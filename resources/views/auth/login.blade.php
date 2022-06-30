@extends('layouts.app')

@section('title','Iniciar sesion')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

	

</head>  
<body>
    <form class="formulario" method="POST" action="">
    @csrf
      
     <div class="contenedor">   
     <h1>Login</h1><br>

        <div class="grupo">
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" id="email" required><span class="barra"></span>
                <label>Email</label>
         </div>
        </div>

         <div class="grupo">
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password"name="password" id="password" title="Minimo 6 caracteres" min="6" max="15" required><span class="barra"></span>
         <label>Contraseña</label> 
        </div>
         </div>

         @error('message')
         <p class="brder border-red-500 rounded-md bg-red-100 w-full
         text-red-600 p-2 my-2">{{$message}}</p>
         @enderror

         <center>
        <div class="form-grup mt-3">
         {!! NoCaptcha::renderJs('es', false, 'onloadCallback') !!}
         {!! NoCaptcha::display() !!}
         </div><br>
         @if ($errors->has('g-recaptcha-response'))
             <span class="help-block ">
             <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
        @endif
        </center>
         <br>

         <input type="submit" value="Login" class="button">
         <p>¿No tienes una cuenta? <a class="link" href="{{route('register.index')}}">Registrate </a></p>
         <center><a class="link" href="{{route('password.request')}}">¿Olvidaste la contraseña?</a></center>
     </div>
     </form>

     <style>



form .grupo{
    position: relative;
    margin: 20px;
}




input:focus~label, 
input:valid~label, 
textarea:focus~label, textarea:valid~label{
    position: absolute;
    top: -30px;
    font-size: 16px;
    color: #000000;
    
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

<script>
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>