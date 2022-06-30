<!doctype html>
<html lang="en">
  <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../css/estilos.css"> 
    <link rel="stylesheet" href="../css/st.css"> 
    <link rel="stylesheet" href="../css/facebook.css">
    
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg" />
   
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
   </nav>
<div class="container-fluid">
 <ol class="breadcrumb">

   <li class="breadcrumb-item "><a href="{{ route('catalogo') }}" class="text">Menú</a></li>

   <li class="breadcrumb-item active "><a href="" class="text">Historia</a></li>

 </ol>
</div>


    <div class="Introduction">
         <div class="container">
                <h2>Historia</h2>
                <p class="plain-text">Los orígenes de la medicina natural los encontramos alrededor del siglo V y IV antes de Cristo. Hipócrates es considerado el padre de la medicina alternativa, y defendía la capacidad intrínseca del cuerpo para sanarse. Él diseñó la teoría de los cuatro humores, que consideraba que si la sangre, la bilis, la linfa y la atrabilis se encontraban en equilibrio, la persona también tendría salud. El desequilibrio de estos elementos produce la apocrisis, es decir, la enfermedad. <IMG SRC="../img/foto.jpg" ALIGN=LEFT>     Hipócrates consideraba que las principales causas de las enfermedades eran dietéticas o psicoemocionales, de modo que los tratamientos se centraban en la alimentación. Sin embargo, también diseñó tratamientos que son los precursores de los remedios médicos actuales.

En el siglo XIX, con la llegada de Pasteur, la medicina avanzó a pasos agigantados con el descubrimiento de que las enfermedades eran producidas por microorganismos. A partir de entonces, la medicina pasó de estudiar al individuo como una totalidad para centrarse en el “micro” y los agentes patógenos que causan las enfermedades. Claude Bernard, paralelamente, introdujo términos importantes y determinó que la enfermedad no depende únicamente de agentes patógenos, sino que un mismo microorganismo puede causar la enfermedad o no dependiendo del terreno o la persona. Por lo tanto, otorgó importancia a la individualización de los tratamentos.

A continuación, se produjo una separación entre los principios de la medicina de Pasteur y las ideas de Bernard, que avanzaron hacia un enfoque más natural de la medicina. 
</p><br>
<p class="plain-text">La medicina natural se sustenta sobre la idea de que el ser humano tiene a su disposición una serie de mecanismos, físicos y psíquicos, que le ayudan a conservar su salud. A estos mecanismos los antiguos griegos les llaman medicatrix naturae; es decir, fuerza curativa natural. La medicina alternativa tiene tres principios básicos.<br><br>

1. La medicina natural no trata enfermedades, sino personas. Por lo tanto, se concibe el individuo como un todo.
<br><br>2. El objetivo de esta disciplina es potenciar la fuerza curativa natural del cuerpo humano. El médico debe ayudar al paciente a lo largo del proceso curativo, y confiar en la capacidad del cuerpo para autorregular su propio organismo.<br><br>
3. Los remedios y técnicas que se utilizan para tratar los pacientes tienen que ser naturales y lo menos agresivos posibles. En todo momento se debe seguir la máxima hipocrática primum non nocere, es decir, no perjudicar al paciente.</p>
<center><IMG SRC="../img/natu.jpg"></center>
<br> 
<h2>Técnicas de medicina natural</h2>
                <p class="plain-text">La medicina alternativa engloba diversas técnicas cuyos tratamientos están basados en elementos naturales como las plantas, el aire, el agua y el ejercicio físico. Algunas de estas disciplinas son la homeopatía, la acupuntura, la fitoterapia, el quiromasaje, el Reiki, la hidroterapia o la ozonoterapia, entre muchas otras.
</p><br><br><br>

<h5>Referencia</h5>
                <p >https://veigler.com/medicina-alternativa/#:~:text=Origen%20de%20la%20medicina%20alternativa,intr%C3%ADnseca%20del%20cuerpo%20para%20sanarse.
</p><br>
  
        </div>
</div>

<style>
body{
    margin: 0;
}
a{
    color: inherit;
    text-decoration: none;
}
h1,h2,h3,h4,h5,h6,p{
    margin: 2;
    text-align: justify;
}
.d-flex{
    display: flex;
}
    .Introduction{
    padding: 44px 0;
}
.Introduction h2{
    margin-bottom: 20px;
}
.Introduction .plain-text{
    margin-bottom: 24px;
    font-size: 20px;
}
.Introduction h3{
    color: #ffcc00
}
.container{
    margin: 20 20%;
}
.reasons{
    background-color: #000;
    color: #fff;
    padding: 22px;
    font-size: 24px;
}
.reasons li{
    line-height: 1.4;
}
</style>
<link rel="stylesheet" href="../css/pan.css">
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