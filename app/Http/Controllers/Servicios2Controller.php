<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class Servicios2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios= Servicio::oldest('id')->paginate(3);
        return view('servicios',compact('servicios'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'servicio'=>new Servicio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateServicioRequest $request)
    {   
        {
            Servicio::create($request->validated());
            return redirect()->route('servicios')->with('success', 'Service created successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('show',[
            'servicio'=>Servicio::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $id)
    {
        return view('editar', [
            'servicio'=>$id
        ]);
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Servicio $id, CreateServicioRequest $request)
    {
        $id->update($request->validated());

        return redirect()->route('servicios.show',$id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios');//
    }
}
