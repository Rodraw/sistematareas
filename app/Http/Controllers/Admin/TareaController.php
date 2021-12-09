<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Storage;

class TareaController extends Controller
{

    public function __construct(Tarea $tarea)
    {
        $this->repository = $tarea;

        //$this->middleware(['can:tareas']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = $this->repository->latest()->paginate();

        return view('admin.pages.tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        

        return view('admin.pages.tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("tareas");
        }

        $this->repository->create($data);

        return back()->with('message', 'Tarea creada con exito.')->with('typealert', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$l = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.tareas.edit', compact('l'));
    }

    public function postUpdate(Request $request, $id)
    {
        if (!$tarea = $this->repository->find($id)) {
            return redirect()->back();
        }

        $data = $request->all();


        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($tarea->image)) {
                Storage::delete($tarea->image);
            }

            $data['image'] = $request->image->store("tareas");
        }

        $tarea->update($data);

        return redirect()->route('tareas.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
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
        if (!$tarea = $this->repository->find($id)) {
            return redirect()->back();
        }

        if (Storage::exists($tarea->image)) {
            Storage::delete($tarea->image);
        }

        if($tarea->delete()):
            return back()->with('message', 'Eliminada con exito')->with('typealert', 'danger');
        endif;
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $tareas = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('code', $request->filter);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.pages.tareas.index', compact('tareas', 'filters'));
    }
}
