<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/estilos.css"> 
    <link rel="stylesheet" href="../css/st.css"> 
    <link rel="stylesheet" href="../css/facebook.css">
    <script src="lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<link rel="icon" type="image/x-icon" href="../img/logo.jpg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
     <!-- responsive-->
     <link rel="stylesheet" href="../css/responsive.css">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>@yield('title')Tlapatilistli</title>
  </head>
<body>

<nav>
       
    <div class="options">
    <a href="{{ route('buzon') }}">
    <img src="../imgs/mensaje.png">
    </a>
    <a href="{{ route('videos') }}">
        <img src="../imgs/video.png">
        </a>
            <a href="http://localhost/tlapa/public/home">
            <img src="../imgs/casa.png">
            </a>
            <a href="{{ route('catalogo') }}">
            <img src="../imgs/planta.png">
        </a>
    </div>
       <div class="logo">

           <div class="search">
               <img src="../imgs/search.svg">
               <input type="search" placeholder="Buscar">
           </div>
       </div>
       <a href="{{ route('about') }}">
       <div class="options-two">
           <div class="profile">
              <img src="../imgs/persona.png">
               <p>{{ Auth::user()->name }}</p>

        </div>   
        </a>
            <img src="../imgs/notifications.svg">

            
            
                <a id="navbarDropdown"  role="button" data-toggle="dropdown"  v-pre>
                <div class="options-two">
                <img src="../imgs/menu-desplegable.svg"></div>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                
                    <a class="dropdown-item" href="{{ route('login.destroy') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('login.destroy') }}" method="get" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

                <br>
   </nav><br><br><br>

  <center> <form action="{{route('buzon.store')}}" method="POST">
  @csrf      
        <div class="form">
            <h1>Buzón</h1>
            <div class="grupo">
                <input name="name" id="name"  type="text" title="solo letras" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"  required><span class="barra" ></span>
                <label>Nombre</label>
                
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" required><span class="barra"></span>
                <label>Correo</label>
                @error('email')
                    <p><strong>{{message}}</strong></p>
                @enderror
                <div class="invalid-feedback" data-sb-feedback="email:required">Correo requerido.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido.</div>
            </div>
            <div class="grupo">
                <input type="phone" name="phone" id="phone" pattern="[0-9]{10}" title="solo 10 digitos numericos" maxlength="10"  required><span class="barra"></span>
                <label>Telefono</label>
                @error('phone')
                    <p><strong>{{message}}</strong></p>
                @enderror
                <div class="invalid-feedback" data-sb-feedback="phone:required">Telefono requerido.</div>
            </div>
            <div class="grupo">
                <input name="message" id="message" rows="3"  title="solo letras" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,;:.'-]{2,500}"  required></input><span class="barra"></span>
                <label>Mensaje</label>
                @error('message')
                    <p><strong>{{message}}</strong></p>
                @enderror
                <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje requerido</div>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form></center>
    @if (session('info'))
                    <script>
                        alert("{{session('info')}}")
                    </script>
                @endif

    <style>
        :root{
    --colorTextos: #49454567;
}
        
h1{
    text-align: center;
    margin: 10px 0;
    font-weight: 800;
}

form{
    background: #fff;
    width: 30%;
    padding: 10px 0;
    border-radius: 20px;
    box-shadow: 0 0 5px 0 rgb(0,0,0);
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px;
}

input, textarea{
    background: none;
    color: #000;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border:none;
    border-bottom: 1px solid var(--colorTextos);;
    resize: none;
}

input:focus,textarea:focus{
    outline: none;
    color: rgb(0,0,0);
}

input:focus~label, 
input:valid~label, 
textarea:focus~label, textarea:valid~label{
    position: absolute;
    top: -14px;
    font-size: 12px;
    color: #2196F3;
}

label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top:10px;
    transition: 0.5s ease all;
    pointer-events: none;
}


input:focus~.barra::before, textarea:focus~.barra::before{
    width: 100%;
}
.barra{
    position: relative;
    display: block;
    width: 100%;
}
.barra::before{
    content: '';
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: #17AD35;
    transition: 0.3s ease all;
    left: 0%;
}
button{
    background: #51AD63;
    /* fallback for old browsers */
    background: #51AD63);
    /* Chrome 10-25, Safari 5.1-6 */
    background:  #51AD63);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    display: block;
    width: 100px;
    height: 40px;
    border:none;
    color: #000; 
    border-radius: 4px;
    font-size: 16px;
    margin: 10px auto;
    cursor: pointer;
}

@media screen and (max-width:1100px){
    form{
        width: 50%;
    }
}

@media screen and (max-width:600px){
    form{
        width: 60%;
    }
}

@media screen and (max-width:450px){
    form{
        width: 80%;
    }
}

@media screen and (max-width:300px){
    form{
        width: 90%;
        margin: auto;
        width: 500px;
        margin-top: 150px;
        border-radius: 2%;
    }
}

a:link, a:visited,  a:hover, a:active
{
    color: #000000;
    text-decoration: none;
}
</style>

</body><br><br><br><br>

<!-- footer -->

<footer class="text-center text-white"  style="background-color: #80a00a;">
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>SANTS
                </h6>
                <p>
                    Somos una empresa que esta enfocada a brindar
                    el servicio de informacion acerca de los remedios caseros
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contacto
                </h6>
                <p><i class="fas fa-home me-3"></i> Huejutla de reyes, Hgo 43000</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    tlapatilistli@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> 7712131415</p>
                
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>