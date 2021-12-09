<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateBecario;
use App\Models\Becario;
use App\Models\Asignada;
use Illuminate\Http\Request;

class BecarioController extends Controller
{
    private $repository;

    public function __construct(Becario $becario)
    {
        $this->repository = $becario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $becarios = $this->repository->latest()->paginate();

        return view('admin.pages.becarios.index', compact('becarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.becarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return back()->with('message', 'Creado con exito.')->with('typealert', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$becario = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.becarios.show', compact('becario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$becario = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.becarios.edit', compact('becario'));
    }
    public function postUpdate(Request $request, $id)
    {
        if (!$becario = $this->repository->find($id)) {
            return redirect()->back();
        }

        $becario->update($request->all());

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Becario::find($id);
        if($s->delete()):
            return back()->with('message', 'Eliminado con exito.')->with('typealert', 'danger');
        endif;
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $becarios = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('correo', $request->filter);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.pages.becarios.index', compact('becarios', 'filters'));
    }
}
