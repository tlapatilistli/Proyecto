<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedio;

class RemedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remedios = Remedio::paginate();
        return view('remedios.index', compact('remedios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('remedios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:20',
            'descripcion' => 'required', 
            'imagen' => 'required|image|mimes:jpeg,png,svg,jpg|max:1024'
        ]);

         $remedio = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'img/';
             $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenProducto);
             $remedio['imagen'] = "$imagenProducto";             
         }
         
         Remedio::create($remedio);
         return redirect()->route('remedios.index');
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
    public function edit( Remedio $remedio)
    {
        return view('remedios.editar', compact('remedio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Remedio $remedio)
    {
        $request->validate([
            'nombre' => 'required|max:20',
            'descripcion' => 'required', 
            'imagen' => 'required|image|mimes:jpeg,png,svg,jpg|max:1024'
        ]);
         $prod = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'img/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['imagen'] = "$imagenProducto";
         }else{
            unset($prod['imagen']);
         }
         $remedio->update($prod);
         return redirect()->route('remedios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remedio $remedio)
    {
        $remedio->delete();
        return redirect()->route('remedios.index');
    }
}
