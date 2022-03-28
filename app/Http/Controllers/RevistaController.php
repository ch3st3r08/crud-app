<?php

namespace App\Http\Controllers;

use App\Models\Revista;
use Illuminate\Http\Request;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $revistas = Revista::latest()->paginate(5);
        return view('revistas.index', compact('revistas'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('revistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'editorial' => 'required'
        ]);

        Revista::create($request->all());
        $revistas = Revista::latest()->paginate(5);

        return view('revistas.index', compact('revistas'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $revista = Revista::find($id);
        return view('revistas.show', compact('revista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $revista = Revista::find($id);
        return view('revistas.edit', compact('revista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $revista = Revista::find($id);
        $revista->nombre = $request->nombre;
        $revista->num_revista = $request->num_revista;
        $revista->fecha_edicion = $request->fecha_edicion;
        $revista->num_paginas = $request->num_paginas;
        $revista->editorial = $request->editorial;
        $revista->save();

        $revistas = Revista::latest()->paginate(5);
        return view('revistas.index', compact('revistas'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Revista::find($id)->delete();
        $revistas = Revista::latest()->paginate(5);
        return view('revistas.index', compact('revistas'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }
}
