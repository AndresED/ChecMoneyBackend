<!DOCTYPE html>
<html lang="en">

<head>
    <title>CheckMoney | Gestiona y controla tus finanzas personales</title>
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
       <!-- for Google -->
      <meta name="description" content="Checkmoney es un lugar que te ayuda a getionar todo lo que pasa en tu bolcillo." />
      <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
      <meta name="keywords" content="Gestión,Control,Finanzas,Nube" />

      <meta name="author" content="CheckMoney" />
      <meta name="copyright" content="CheckMoney" />
      <meta name="application-name" content="CheckMoney" />

      <!-- for Facebook -->
      <meta property="og:title" content="CheckMoney" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="https://checkmoney.andresed.me/" />
      <meta property="og:description" content="Checkmoney es un lugar que te ayuda a getionar todo lo que pasa en tu bolcillo.Tu tienes el control de tus gastos e ingresos, gestionalo desde una donde quiera que este a travez de una amagable interfaz de usuario." />

      <!-- for Twitter -->
      <meta name="twitter:card" content="CheckMoney" />
      <meta name="twitter:title" content="CheckMoney" />
      <meta name="twitter:description" content="Checkmoney es un lugar que te ayuda a getionar todo lo que pasa en tu bolcillo.Tu tienes el control de tus gastos e ingresos, gestionalo desde una donde quiera que este a travez de una amagable interfaz de usuario." />
</head>

<body class="teal">
    <main>
        <div class="row">            
            <section class="col s12 secion-login center-align">
                <div class="card-panel panel-login">
                    <h1 class="blue-grey-text text-darken-4 brand-logo">Check<span class="orange-text text-lighten-1">money</span></h1>
                      <div class="title-login">
                          <p>Ingresar con</p>
                      </div>
    				  <div class="btn-login">	                
                        <a  class="waves-effect blue darken-4 btn" href="{{ url('/auth/facebook') }}">Facebook</a>
    			      </div>
                  </div>
            </section>              
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

        });

    </script>
</body>

</html>