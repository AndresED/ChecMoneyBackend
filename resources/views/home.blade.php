<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- en html5 no necesitas indicar el cierre de la etiqueta -->
    <!--<meta http-equiv="refresh" content="10">-->

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Compiled and minified CSS Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <!-- stilos personalizados -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="grey lighten-2">
    <main>
        <!-- Page Layout here -->        
        <div class="navbar-fixed">
            <nav class="blue-grey darken-3">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo"><i class="material-icons"></i>Check<span class="orange-text">money</span></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="./">Inicio</a></li>
                        <li><a href="#caracteristicas">Características</a></li>
                        <li><a href="#checkmoney">Qué es Checmoney</a></li>
                        <li><a href="/login" >Entrar</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">                        
                        <h5 class="center-align grey-text darken-4">Menu</h5>
                        <li><div class="divider"></div></li>
                        <li><a href="./">Inicio</a></li>
                        <li><div class="divider"></div></li>
                        <li><a href="#caracteristicas">Nosotros</a></li>
                        <li><div class="divider"></div></li>
                        <li><a href="#checkmoney">Qué es Checmoney</a></li>
                        <li><div class="divider"></div></li>
                        <li><a href="/login" >Iniciar sesión</a></li>
                        <li><div class="divider"></div></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row no-margin">                            
          <section id="inicio" class="col s12 valign-wrapper parallax-container">
              <div class="parallax"><img src="img/como-ahorrar-dinero-checkmoney.png"></div>
              <div class="container center-align white-text">
                  <h1 class="h1-title-port">Bienvenido a Checkmoney</h1 cl>
                  <p class="descripcion">El lugar para administar todo lo que pasa en tu bolsillo</p>
              </div>
              
          </section>
          <section id="caracteristicas" class="col s12 valign-wrapper">
              <div class="row">
                  <div class="col s12">
                      <h1 class="center-align white-text h1-section ">¿Qué puedes hacer con Checkmoney?</h1>
                  </div>
                  <div class="col s12">
                      <div class="row">
                          <div class="col s12 m4 l4">
                              <div class="card-panel center-align">
                                  <div class="s12 m12 l12">
                                      <i class="material-icons medium orange-text">payment</i>
                                  </div>
                                  <div class="s12 m12 l12">
                                      <h1 class="h1-car">Gestiona tu dinero facilmente</h1>
                                      <p>Ahora podrás gestionar también tu efectivo con Tus Gastos nuestra app móvil. Nunca fue tan sencillo llevar al días tus pequeños gastos.</p>
                                  </div>                                            
                              </div> 
                          </div>
                          <div class="col s12 m4 l4">
                              <div class="card-panel  center-align">
                                  <div class="s12 m12 l12">
                                      <i class="material-icons medium orange-text">timeline</i>
                                  </div>
                                  <div class="s12 m12 l12">
                                    <h1 class="h1-car">Controla tu dinero fácilmente</h1>
                                    <p>Ya es hora de tomar las riendas de tus finanzas. Checkmoney te permite, de un modo sencillo y automático, entender tus gastos e ingresos. Ahora puedes ahorrar inteligentemente.</p>    
                                  </div>                       
                              </div>
                                                
                          </div>
                          <div class="col s12 m4 l4">
                              <div class="card-panel  center-align">
                                  <div class="s12 m12 l12">
                                        <i class="material-icons medium orange-text">cloud_queue</i>
                                  </div>
                                  <div class="s12 m12 l12">
                                        <h1 class="h1-car">Todas tus finanzas en un solo lugar</h1>
                                        <p>En Checkmoney podrás ver, de forma segura, todas tus cuentas en un mismo sitio. Puedes crear un presupuesto, ordenar tus gastos, fijar objetivos de ahorro y mucho más. Y además es gratis.</p>
                                  </div>                    
                              </div>                                 
                          </div>
                      </div>
                  </div>            
              </div>  
          </section>
          <section id="checkmoney" class="col s12 valign-wrapper">
              <div class="container center-align">
                  <h1 class="h1-section">¿Qué es Checkmoney?</h1>
                  <p class="descripcion">
                      Checkmoney es un lugar que te ayuda a getionar todo lo que pasa en tu bolcillo.<br>
                      Tu tienes el control de tus gastos e ingresos, gestionalo desde una donde quiera
                      que este a travez de una amagable interfaz de usuario.
                  </p>
              </div>
          </section>
          <footer class="col s12 page-footer  blue-grey darken-2">             
              <div class="footer-copyright">
                <div class="container">
                © 2017 Copyright Checkmoney
                <div class="right">
                <a class="grey-text text-lighten-4"  href="https://www.linkedin.com/in/wualtervera/">Developer by Wualter Vera</a>  |  <a  class="grey-text text-lighten-4" href="https://andresed.me/">Andrés Esquivel</a>
                </div>
                </div>
              </div>
           </footer>
        </div>        
    </main>
    <!-- vue 2.4.2-->
    <script src="https://unpkg.com/vue@2.4.2"></script>
    <script src="js/vue.js"></script>
    <!-- Compiled and minified Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <script>
        $(document).ready(function () {
            var h= screen.availHeight;
            $('.button-collapse').sideNav();
            $('select').material_select();
             $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });
            $('.modal').modal();
            //$('.panel-menu').css('height',h-210);
            
            $(document).ready(function(){
              $('.parallax').parallax();
            });
                

        });

    </script>
</body>

</html>