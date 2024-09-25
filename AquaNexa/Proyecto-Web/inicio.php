<?php
    include("controlador.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AquaNexa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-header.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicio y dudas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Catálogo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">A cerca de</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">La tecnología al servicio de la naturaleza</div>
                <div class="masthead-heading text-uppercase">AquaNexa</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Descubre más a cerca</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicio y dudas</h2>
                    <h3 class="section-subheading text-muted">Aclaraciones de nuestro producto:</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Compra del producto</h4>
                        <p class="text-muted">Ordena tu dispositivo dependiendo tus necesidades en la sección de catálogo, nuestro equipo se contactará mediante un mail para confirmar el envio por correo.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Instalacion sencilla</h4>
                        <p class="text-muted">Se adjuntará una aplicacion con el mail. En esta, se podrá se podra seleccionar el cuidado de la planta en la que se utilice e interactuar con los sensores del producto </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Segura instalación</h4>
                        <p class="text-muted">Tras la compra de AquaNexa, con el mail enviado se adjuntará la direccion a un video de YouTube con un tutorial para la instalacion ¡la cual termina siendo muy sencilla y segura debido a los elementos utilizados!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Catálogo</h2>
                    <h3 class="section-subheading text-muted">AquaNexa consta de varios modelos los cuales poseen diferentes sensores para la necesidad que cada usuario ¡Cada planta es unica!</h3>
                </div>
                <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/Carrito.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/basic.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: básico</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">Lo más básico pero efectivo para tus plantas</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/temperatura.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/temp.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Temperatura</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">Añade un sensor de temperatura para saber aun mejor las necesidades requeridas de tus queridas plantaciones en cualquier estacion del año</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ultrasonido-bomba.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/bomb_sound.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ultrasonido y bomba</div>
                                    <div class="portfolio-caption-subheading text-muted">El guardar agua cerca de las plantas ya no hara que plagas se aprovechen de los recursos, haciendo que puedas irrigar con la bomba y que el ultrasonido se encargue de los molestos insectos</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ph-tem-soni.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph_temp_sound.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: ph, temp. y ultrasonido</div>
                                    <div class="portfolio-caption-subheading text-muted">Todos los sensores disponibles en un dispositivo, tendras mediciones precisas a la vez que las plagas se alejan de tus cultivos, para quienes quieren cuidar lo maximo posible a sus plantas</div>
                                </div>
                            </div>
                        </div>
                           
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/bomba.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/bomb.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Bomba</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">¿Quieres usar al maximo los recursos y regar las plantas con agua no corriente? Añade una bomba y deja que la presion se encargue del trabajo</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/medidorph.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Medidor PH</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">Una de causas de muertes de plantas comun es la acidez de la tierra, con el sensor de ph recibiras avisos de este problema</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/bomba-temperatura.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/temp_bomb.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Bomba y temperatura</div>
                                    <div class="portfolio-caption-subheading text-muted">Para el cambio de clima, es mejor estar preparado, tendras infomracion de la temperatura a la vez de que puedes ahorrar con agua estancada desde la bomba a presion</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ph-tem-bomba.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph_bomb_temp.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ph, temperatura y bomba</div>
                                    <div class="portfolio-caption-subheading text-muted">No volveras a tener problemas con las mediciones de tus plantas a la vez que ahorras agua con la bomba ¡tus plantas creceran sanas y fuertes!</div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ultrasonido.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/sound.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ultrasonido</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">Elimina las molestas plagas que atacan a tus plantas usando un sensor ultrasonido sin perjudicar de ninguna forma las plantas</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ph-bomba.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph_bomb.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ph y bomba</div>
                                    <div class="portfolio-caption-subheading text-muted" style="display: flex; align-items: center; justify-content: center; height: 100%;">Reutiliza agua desde recipientes no corrientes sin el miedo de que la acidez de esta misma agua dañe a las plantas</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ph-temperatura.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph_temp.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ph y temperatura</div>
                                    <div class="portfolio-caption-subheading text-muted">Lo mejor en sensores de medicion de plantas ¡Tendras mucha informacion de como estan tus plantas en todo momento! Ideal para quienes quieren darle el mejor cuidado</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item card shadow-sm">
                                <a href="../Proyecto-Web/compra/ph-bomba-soni.html" class="portfolio-link" data-bs-toggle="modal">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid card-img-top" src="assets/img/portfolio/ph_bomb_sound.jpeg" alt="...">
                                </a>
                                <div class="portfolio-caption card-body">
                                    <div class="portfolio-caption-heading">AquaNexa: Ph, bomba y ultrasonido</div>
                                    <div class="portfolio-caption-subheading text-muted">Aleja plagas, recicla el auga de recipientes y protege a las plantas de la acidez de esta agua, una combinacion perfecta para los que quieren hacer unas plantaciones lo mas amigables con el medio ambiente</div>
                                </div>
                            </div>
                        </div>
       
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A cerca de...</h2>
                    <h3 class="section-subheading text-muted">Informacion de AquaNexa</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022-2023</h4>
                                <h4 class="subheading">Nacimiento de una idea</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">AquaNexa nace como una idea al ver los cambios climaticos que afectan a huertas y a plantas domesticas. En 2023 hubieron temperaturas de 40 grados celcius las cuales mataron plantas al secar en exceso la tierra, lo que generó que muchas personas no supieran que cuidado dar a sus plantas en este lapso de tiempo.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Mayo 2023</h4>
                                <h4 class="subheading">Necesidad de un dispositivo</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Tras pensar en como solucionar esta problematica, llegamos a la conclusion de que de seguir así, los climas van a seguir cambiando y esto afectará a todo tipo de planta, por lo que decidimos programar y producir un dipositivo capaz de medir datos cerca de las plantas y activar metodos de cuidado para que pueda ayudar a dichas plantas. </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Junio 2023</h4>
                                <h4 class="subheading">Diseño de AquaNeaxa</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Luego de tener en claro lo que se requería, concordamos en que deberiamos usar una placa electrónica que constara de sensores que midieran niveles de humedad y que pueda interactuar con una aplicación de celular para poder facilitar la configuracion y favorecer a la experiencia de cada usuario.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2023-2024</h4>
                                <h4 class="subheading">Creación de AquaNexa</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Luego de haber investigado exhaustivamente, hicimos varios modelos que se adaptan a lo que necesitan los usuarios, decidimos usar baterias recargables de 5V para facilitar la instalación y diseñamos un armazón para proteger los componentes. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                ¡Se parte
                                <br />
                                de esta
                                <br />
                                Idea!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro equipo</h2>
                    <h3 class="section-subheading text-muted">Conoce a las mentes detras de AquaNexa</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Ledesma Santiago</h4>
                            <p class="text-muted">Diseñador backend, Diseñador movil</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                           
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/zuria.png.jpg" alt="..." />
                            <h4>Britos Lucas</h4>
                            <p class="text-muted">Diseñador frontend, Diseñador de sistemas electrónicos</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/murd3red.punk_/" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-instagram"></i></a>
                            
                            <a class="btn btn-dark btn-social mx-2" href="www.linkedin.com/in/lucasbritos66" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/brandon.jpg" alt="..." />
                            <h4>Torres Brandon</h4>
                            <p class="text-muted">Diseñador movil, Investigador</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/armas_madera/" aria-label="Larry Parker Twitter Profile"><i class="fab fa-instagram"></i></a>
                            
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">"De una idea hacia el mundo"</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactenos a:</h2>
                    <h3 class="section-subheading text-muted">Para cualquier duda, nuestro equipo contestará lo antes posible</h3>
                    <h2 class="section-heading text-uppercase" ><a href="https://mail.google.com/mail/?view=cm&fs=1&to=aquanexateam@gmail.com&su=Consulta&body=Hola,%20quiero%20más%20información%20sobre%20sus%20servicios." target="_blank">Correo electronico de AquaNexa</a></h2>
                    <h2 class="section-heading text-uppercase" ><a href="aquanexateam@gmail.com">Instagram de AquaNexa</a></h2>

                    
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                
                <!-- to get an API token!-->
                
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; AquaNexa 2023-2024</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                    

                        <script>
                            function abrirVentanaEmergente() {
                                window.open('terminos-privacidad.html', 'Términos de Privacidad', 'width=600,height=400,scrollbars=yes,resizable=yes');
                            }
                        </script>
                        <script>
                            function abrirVentanaEmergente2() {
                                window.open('terminos-uso.html', 'Términos de Uso', 'width=600,height=400,scrollbars=yes,resizable=yes');
                            }
                        </script>
                        
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="javascript:void(0);" onclick="abrirVentanaEmergente()">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="javascript:void(0);" onclick="abrirVentanaEmergente2()">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
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
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
