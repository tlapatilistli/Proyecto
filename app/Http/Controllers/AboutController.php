<?php

namespace App\Http\Controllers;
use App\Models\Vistas;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vistas = Vistas::all();
        return view('vistas.index', compact('vistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vistas = new Vistas();
        $vistas->year = $request->get('year');
        $vistas->vista = $request->get('vista');
        $vistas->descripcion = $request->get('descripcion');
        

        $vistas->save();


         return redirect()->route('vistas.index');
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
        $vista = Vistas::find($id);
        
        return view('vistas.editar')->with('vista',$vista);
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
        $vista = Vistas::find($id);
        $vista->year = $request->get('year');
        $vista->vista = $request->get('vista');
        $vista->descripcion = $request->get('descripcion');

        $vista->save();

         return redirect()->route('vistas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vistas $vista)
    {
        $vista->delete();
        return redirect()->route('vistas.index');
    }
}
