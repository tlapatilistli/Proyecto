<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >

     <!-- style css -->
     <link rel="stylesheet" href="../css/st.css">
        <link rel="stylesheet" href="../css/estilos.css">  
        <link rel="stylesheet" href="../css/facebook.css">
        <link rel="icon" type="image/x-icon" href="../img/logo.jpg" />
     <!-- responsive-->
     <link rel="stylesheet" href="../css/responsive.css">
     
     <link rel="stylesheet" href="../css/owl.carousel.min.css">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
       
    <title>@yield('title')Tlapatilistli</title>
  </head>
<body >

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
   </nav>
   <div class="container-fluid">
 <ol class="breadcrumb">

   <li class="breadcrumb-item"><a href="{{ route('catalogo') }}" class="text">Menú</a></li>

   <li class="breadcrumb-item active"><a href="" class="text">Origen</a></li>

 </ol>
</div>
        <!-- Remedios-->
        
            <div class="container"><br><br>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Origen</h2><br>
                    <h3 class="section-subheading text-muted">Plantas tradicionales.</h3>
                </div>
                <center><div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="../img/lavanda.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lavanda</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <img class="img-fluid" src="../img/sabila.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sabila</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <img class="img-fluid" src="../img/menta.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hierbabuena</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <img class="img-fluid" src="../img/epazote.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Epazote</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <img class="img-fluid" src="../img/manzanilla.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Manzanilla</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <img class="img-fluid" src="../img/stevia.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Stevia</div>
                            </div>
                        </div>
                    </div><br><br>
                </div>
            </div></center>
        
        
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lavanda</h2>
                                    <p class="item-intro text-muted">(Montiel-Secundino 2010)</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/lavanda.jpeg" alt="..." />
                                    <p>La esencia se utiliza en la industria de la cosmetológica y muy 
                                        ocasionalmente en pomadas y otros productos para enmascarar olores 
                                        desagradables. El aceite inhalado ha sido recomendado para disminuir 
                                        la ansiedad y mejorar la memoria. Las infusiones, decocciones, pomadas 
                                        y lociones de flor de lavya también han sido recomendados como 
                                        diuréticos, cicatrizante y analgésico. Los tés de flores y tallos también son 
                                        recomendados para tratar dolores reumáticos, tortícolis, dolor de cabeza, 
                                        heridas, quemaduras, picaduras de insectos, hematomas, caída del pelo, 
                                        anginas y resfriados.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Lavanda</h2>
                                    <p class="item-intro text-muted"> (Montiel-Secundino 2010).</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/lavanda.jpeg" alt="..." />
                                    <p>El aceite inhalado ha sido recomendado para disminuir 
                                        la ansiedad y mejorar la memoria. Las infusiones, decocciones, pomadas 
                                        y lociones de flor de lavya también han sido recomendados como 
                                        diuréticos, cicatrizante y analgésico. Los tés de flores y tallos también son 
                                        recomendados para tratar dolores reumáticos, tortícolis, dolor de cabeza, 
                                        heridas, quemaduras, picaduras de insectos, hematomas, caída del pelo, 
                                        anginas y resfriados</p>
                            
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sabila</h2>
                                    <p class="item-intro text-muted">(Ahlawat y Khatkar, 2011)</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/sabila.jpeg" alt="..." />
                                    <p>Los registros históricos muestran que los antiguos chinos 
                                        y egipcios utilizaban la sábila para tratar quemaduras, heridas y para bajar 
                                        la fiebre. Hoy en día, aparte de usarse para tratar 
                                        diversos malestares, también se utiliza en cosmetología.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hierbabuena</h2>
                                    <p class="item-intro text-muted">(Kumar y col., 2011)</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/menta.jpeg" alt="..." />
                                    <p>La hierbabuena es utilizada ampliamente en el 
                                        tratamiento de diversos padecimientos como nauseas, vómito y desordenes 
                                        gastrointestinales  En el pasado, la hoja seca en polvo 
                                        se llegó a utilizar para emblanquecer los dientes La 
                                        planta y el aceite de hierbabuena también se han utilizado como repelente 
                                        de hormigas, mosquitos y avispas</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Epazote</h2>
                                    <p class="item-intro text-muted">(Gómez-Castellanos, 2008)</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/epazote.jpeg" alt="..." />
                                    <p>En los primeros años del siglo XX, 
                                        el aceite esencial del epazote se utilizó como antihelmínticos (contra las 
                                        lombrices) en humanos, perros, gatos, caballos y cerdos. Su uso pasó de 
                                        moda cuando se descubrieron antihelmínticos más eficaces. También se ha recomendado como emenagogo (estimula el flujo 
                                        sanguíneo y puede fomentar la menstruación) y abortificante (abortivo).</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Manzanilla</h2>
                                    <p class="item-intro text-muted">(Srivastava y col., 2010)</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/manzanilla.jpeg" alt="..." />
                                    <p> La flor se consume en polvo, pero también se 
                                        hacen preparaciones con agua, etanol y metanol. Una tintura de manzanilla 
                                        comúnmente se prepara con una parte de flor de manzanilla en cuatro 
                                        partes de agua con 12% de alcohol grado alimenticio y se utiliza para 
                                        combatir la diarrea o para prevenir calambres. Las 
                                        vaporizaciones del aceite se usan contra la ansiedad y la depresión. </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Stevia</h2>
                                    <p class="item-intro text-muted"> (Bryle y col.,1998;).</p>
                                    <img class="img-fluid d-block mx-auto" src="../img/stevia.jpeg" alt="..." />
                                    <p>Las hojas de estevia se utilizan como agente edulcorante 
                                        en general. En años recientes, la hoja de la estevia es consumida como 
                                        tal o preparada en tés para pacientes diabéticos con el fin de reducir los 
                                        niveles de glucosa en la sangre.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
        a:link, a:visited,  a:hover, a:active
{
    color: #000000;
    text-decoration: none;
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

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</html>