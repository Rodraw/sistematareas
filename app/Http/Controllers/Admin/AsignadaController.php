<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAsignada;
use Illuminate\Http\Request;
use App\Models\Asignada;
use App\Models\Category;
use App\Models\Tarea;
use App\Models\Becario;
use App\User;

class AsignadaController extends Controller
{
    private $repository;

    public function __construct(Asignada $asignada)
    {
        $this->repository = $asignada;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignadas = Asignada::orderBy('token_asignada')->get();

        return view('admin.pages.asignadas.index', compact('asignadas'));
    }

    public function UpdateStatusAsig(Request $request){ 

        $AsigUpdate = Asignada::findOrFail($request->id)->update(['estatus' => $request->estatus]); 
    
        if($request->estatus == 0)  {
            $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">En espera</button>';
        }else{
            if($request->estatus == 1) {
                $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">Asignada</button>';
            }else{
                if($request->estatus == 2) {
                    $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">En proceso</button>';
                }else{
                    $newStatus ='<br> <button type="button" class="btn btn-sm btn-success">Finalizada</button>';
                }
            }
        
        }
    
        return response()->json(['var'=>''.$newStatus.'']);
        }

    public function create()
    {
        $tareas = Tarea::pluck('name', 'id');
        $users = User::pluck('name', 'id');
        $becarios = Becario::pluck('name', 'id');
        $data = [ 'tareas' => $tareas,
                'users' => $users,
                'becarios' => $becarios,
    ];
        return view('admin.pages.asignadas.create', $data);
    }

    public function show($id)
    {
        if (!$asignatura = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.asignaturas.show', compact('asignatura'));
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return back()->with('message', 'Tarea asignada con exito.')->with('typealert', 'success');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        if (!$asignada = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.asignadas.edit', compact('asignada'));
    }

    public function postUpdate(Request $request, $id)
    {
        if (!$asignada = $this->repository->find($id)) {
            return redirect()->back();
        }

        $asignada->update($request->all());

        return back()->with('message', 'Actualizado con exito.')->with('typealert', 'success');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }

    public function destroy($id)
    {
        if (!$asignada = $this->repository->find($id)) {
            return redirect()->back();
        }

        if($asignada->delete()):
            return back()->with('message', 'Asignacion de tarea eliminada con exito.')->with('typealert', 'danger');
        endif;
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $asignadas = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('created_at', 'LIKE', "%{$request->filter}%");
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.pages.asignadas.index', compact('asignadas', 'filters'));
    }

    public function searchTareas(Request $request)
    {

    }

    


}
