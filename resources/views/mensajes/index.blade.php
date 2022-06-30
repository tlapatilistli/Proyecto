@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Tlapatilisti</h1>
@stop

@section('content')
    <center><h2>Mensajes</h2></center>
    <br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            
            <table class="table table-striped" style="width:100%">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th class="border px-4 py-2">NOMBRE</th>
                        <th class="border px-4 py-2">CORREO</th>
                        <th class="border px-4 py-2">MENSAJE</th>
                        <th class="border px-4 py-2">ACCIONES</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($mensajes as $mensaje)
                    <tr>
                        <td style="display: none;">{{$mensaje->id}}</td>
                        <td>{{$mensaje->nombre}}</td>
                        <td>{{$mensaje->correo}}</td>
                        <td>{{$mensaje->mensaje}}</td>
                                                
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                
                                <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
                
            </div>
        </div>
    </div>



@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">  
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    
@stop

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> console.log('Hi!'); </script>
@stop