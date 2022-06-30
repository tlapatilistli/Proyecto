@extends('layouts.app')

@section('title','Registrarse')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
 <form class="formulario" method="POST" action="">
    @csrf
    <div class="contenedor">
      <h1>Registrate</h1><br>

      <div class="grupo">
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="name" id="name" required><span class="barra"></span>
         <label>Nombre</label>
        </div>
         @error('name')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror

      </div>
         
      <div class="grupo">

         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" title="Has concidir el formato con un @" required><span class="barra"></span>
         <label>Correo electronico</label> 
        </div>
         @error('email')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror
      </div>

      <div class="grupo">
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="password" id="password" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" 
         title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menor un dígito" min="6" max="15"required><span class="barra"></span>        
         <label>Contraseña</label> 
        </div>
         @error('password')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror
      </div>

      <div class="grupo">
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="password_confirmation" id="password_confirmation" required><span class="barra"></span> 
         <label>Confirmar contraseña</label>       
         </div>
         @error('password_confirmation')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror
      </div>

      <div class="grupo">
         <div class="input-contenedor">
         <i class="fas fa-question icon"></i>
         <input type="text" name="question" id="question" required><span class="barra"></span>
         <label>Palabra secreta</label> 
        </div>
         @error('question')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror
      </div>  
         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="{{route('login.index')}}">Iniciar Sesion</a></p>
    </div>
  </form>

<style>



form .grupo{
    position: relative;

}




input:focus~label, 
input:valid~label, 
textarea:focus~label, textarea:valid~label{
    position: absolute;
    top: -30px;
    font-size: 16px;
    color: #686463;
    
}

label{
    color: var(--colorTextos);
    font-size: 17px;
    position: absolute;
    left: 60px;
    top:10px;
    transition: 0.5s ease all;
    pointer-events: none;
    font-weight: bold;
}



a:link, a:visited,  a:hover, a:active
{
    color: #000000;
    text-decoration: none;
}
</style>
</body>

</html>

@endsection