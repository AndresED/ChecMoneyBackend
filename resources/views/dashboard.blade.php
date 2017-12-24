<!DOCTYPE html>
<html lang="en">

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
        <div class="nav-wrapper hide-on-large-only fixed">
            <a href="#" data-activates="mobile-demo" class="button-collapse btn-floating waves-effect btn-large blue-grey darken-4 hide-on-med-and-up">
                <i class="material-icons orange-text">menu</i>
            </a>
            <ul class="side-nav blue-grey darken-4" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="http://materializecss.com/images/office.jpg">
                        </div>
                        <a href="#modal-edit-user" class="modal-trigger"><img class="circle" src="{{ Auth::user()->avatar }}"></a>
                        <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                        <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                    </div>
                </li>                           
                <li class="paddign">
                    <a href="#!" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">location_city</i> Patrimonio <span class="patrimonio"><b> S/.2400.00</b></span></a>                                    
                </li>                 
                <li><div class="divider   blue-grey darken-3"></div></li>
                <li class="paddign">
                    <a href="#modal-nueva-cuenta" class="modal-trigger valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">payment</i> Cuentas</a>
                </li>
                <li><div class="divider   blue-grey darken-3"></div></li>
                <li class="paddign">
                    <a href="#modal-nueva-categoria" class="modal-trigger valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">local_offer</i> Categorías</a>
                </li>
                <li><div class="divider   blue-grey darken-3"></div></li>    
                <li class="paddign">
                    <a href="./" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">power_settings_new</i> Cerrar sesion</a>
                </li>
                <li><div class="divider   blue-grey darken-3"></div></li>    
                <li class="paddign">
                    <a href="#!" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">help</i> Ayuda</a>
                </li>
                <li><div class="divider   blue-grey darken-3"></div></li>                  
            </ul>             
        </div>
        <div class="row">  
            <!-- Contentenedor lateral -->          
            <div class="col m4 l3 xl3 hide-on-small-only">
                <div class="row card-panel blue-grey darken-4">
                    <div class="col s12 m12 l12">                        
                        <div class="row">
                            <div class="user">
                                <div class="col s12 m12 l12 no-padding">
                                    <div class="foto-user center-align">
                                        <a href="#modal-edit-user" class="modal-trigger"><img class="circle responsive-img" src="{{ Auth::user()->avatar }}"></a>
                                    </div>                                
                                </div>
                                <div class="col s12 m12 l12">
                                    <div class="datos-user center-align">
                                        <a href="#!name"><span class=" grey-text text-lighten-2 name">{{ Auth::user()->name }}</span></a><br>
                                        <a href="#!mail"><span class=" grey-text text-lighten-2 email">{{ Auth::user()->email }}</span></a>                                        
                                    </div>
                                </div>
                                                 
                            </div>                           
                        </div>                                                                
                    </div>                    
                    <div class="col s12 m12 l12">
                        <div class="menu">
                            <ul>
                                <li><div class="divider   blue-grey darken-3"></div></li>                          
                                <li class="paddign">
                                    <a href="#!" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">location_city</i> Patrimonio <span class="patrimonio"><b> S/.2400.00</b></span></a>                                    
                                </li>                 
                                <li><div class="divider   blue-grey darken-3"></div></li>
                                <li class="paddign">
                                    <a href="#modal-nueva-cuenta" class="modal-trigger valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">payment</i> Cuentas</a>
                                </li>
                                <li><div class="divider   blue-grey darken-3"></div></li>
                                <li class="paddign">
                                    <a href="#modal-nueva-categoria" class="modal-trigger valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">local_offer</i> Categorías</a>
                                </li>                                
                                <li><div class="divider   blue-grey darken-3"></div></li>
                                <li class="paddign">
                                    <a href="./" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">power_settings_new</i> Cerrar sesion</a>
                                </li>
                                <li><div class="divider   blue-grey darken-3"></div></li>    
                                <li class="paddign">
                                    <a href="https://www.facebook.com/wualterveraguerra" class="valign-wrapper grey-text text-lighten-2"><i class="material-icons icons-nav orange-text">help</i> Ayuda</a>
                                </li>
                                <li><div class="divider   blue-grey darken-3"></div></li>                          
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- Contentenedor principal -->
            <div class="col s12 m8 l9 xl9">
                <!-- Seccion Ingresos y EGresos-->
                <div class="row">
                    <div class="col s12 m12 l12 xl12">                        
                        <div class="card-panel">
                            <div class="row row-imput">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s6"><a class="active" href="#test1">Ingresos</a></li>
                                        <li class="tab col s6"><a href="#test2">Gastos</a></li>
                                    </ul>
                                </div>
                                <div id="test1" class="col s12">
                                    <div class="center-align">
                                        <div class="row">
                                            <div class="col s12 m6 l6 center-align nuevo">
                                                <a class="waves-effect btn-small btn modal-trigger blue-grey darken-2" href="#modal-nuevo-movi">Nuevo</a>          
                                            </div>
                                            <div class="col s12 m6 l6 left-align buscar">
                                                <div class="input-field col s12 m8 l8">
                                                     <i class="material-icons prefix">search</i>
                                                     <input id="first_name" type="text" class="validate">
                                                     <label for="icon_prefix">fecha o cuenta</label>
                                                </div>
                                            </div>
                                            <div class="col s12 m12 l12 center-align">
                                                <div class="card-panel cardpanel-total blue-grey lighten-3">
                                                    <h5 class="white-text">Total Ingresos: <span> S/. 2400.00</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <table class="striped centered responsive-table" id="mitabla">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Fecha</th>
                                                <th>Cuenta</th>
                                                <th>Monto</th>
                                                <th>Movimiento</th>
                                                <th>Categoría</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>00001</td>
                                                <td>27/06/2017</td>
                                                <td>BBVA</td>
                                                <td>S/.1800.00</td>
                                                <td>Ingreso</td>
                                                <td>Salario mensual</td>
                                                <td>
                                                    <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                                    <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>00002</td>
                                                <td>31/06/2017</td>
                                                <td>INTERBANCK</td>
                                                <td>S/. 600.00</td>
                                                <td>Ingreso</td>
                                                <td>Bonificación escolar</td>
                                                <td>
                                                    <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                                    <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="test2" class="col s12">
                                    <div class="center-align">
                                        <div class="row">
                                            <div class="col s12 m6 l6 center-align nuevo">
                                                <a class="waves-effect btn-small waves-light btn modal-trigger blue-grey darken-2" href="#modal-nuevo-movi">Nuevo</a>          
                                            </div>
                                            <div class="col s12 m6 l6 center-align buscar">
                                                <div class="input-field col s12 m8 l8">
                                                     <i class="material-icons prefix">search</i>
                                                     <input id="first_name" type="text" class="validate">
                                                     <label for="icon_prefix">fecha o cuenta</label>
                                                </div>
                                            </div>
                                            <div class="col s12 m12 l12 center-align">
                                                <div class="card-panel cardpanel-total blue-grey lighten-3">
                                                    <h5 class="white-text">Total Gastos: <span> S/. 50.00</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <table class="striped centered responsive-table" id="mitabla">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Fecha</th>
                                                <th>Cuenta</th>
                                                <th>Monto</th>
                                                <th>Movimiento</th>
                                                <th>Categoría</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr>
                                                <td>00003</td>
                                                <td>06/05/2017</td>
                                                <td>INTERBANCK</td>
                                                <td>S/. 50.87</td>
                                                <td>Egreso</td>
                                                <td>Pago de Luz</td>
                                                <td>
                                                    <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                                    <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>                               
                            </div>                   
                        </div>
                    </div>
                </div>
            </div>            

        </div>
        <!-- INICIO MODALES-->        
        <!--Inicio modal edit datos user -->
        <div id="modal-edit-user" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h6>Cambiar imagen</h6>                
                <div class="file-field input-field">
                     <div class="btn pink">
                        <span>Abrir</span>
                            <input type="file">
                      </div>
                      <div class="file-path-wrapper">
                        
                        <input class="file-path validate" type="text" placeholder="Subir foto">
                      </div>
                 </div>                                
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat ">Cerrar</a>
                <a href="#!" class="modal-action waves-effect waves-green btn-flat">Guardar</a>
            </div>
        </div>
        <!--Fin modal edit datos user-->
        <!-- Inicio modal nuevo movimiento -->
        <div id="modal-nuevo-movi" class="modal modal-fixed-footer ">
            <div class="modal-content">
                <h6 class="center-align">Movimiento</h6>
                <div class="row row-imput">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Selecione la cueenta</option>
                            <option value="1">BBVA</option>
                            <option value="2">INTERBANCK</option>
                            <option value="3">BCP</option>
                        </select>
                        <label>Cuenta bancaria</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="first_name" type="number" class="validate input-monto">
                        <label for="first_name">Monto</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" class="datepicker">
                        <label for="first_name">Fecha</label>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Seleccione</option>
                            <option value="1">Ingreso</option>
                            <option value="2">Gasto</option>
                        </select>
                        <label>Movimiento</label>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Selecione</option>
                            <option value="1">Sueldo</option>
                            <option value="2">Bonificacion escolar</option>
                        </select>
                        <label>Categoría</label>
                    </div>                                                        
                </div>                                 
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat ">Cerrar</a>
                <a href="#!" class="modal-action waves-effect waves-green btn-flat">Guardar</a>
            </div>
        </div>
        <!--Fin modal nuevo movimiento -->
        <!--Inicio modal nueva cuenta -->
        <div id="modal-nueva-cuenta" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h6>Nueva Cuenta</h6>
                <div class="row row-imput">                                            
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate input-monto">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="categorias col s12">
                        <ul class="col s12 m12 l12">
                            <li class="col s12 m12 l12">BCP
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                            <!--<hr class="teal lighten-5" />-->
                            <li class="col s12 m12 l12">INTERBACK
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                            <li class="col s12 m12 l12">BBVA
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                        </ul>
                    </div>                                        
                </div>                               
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat ">Cerrar</a>
                <a href="#!" class="modal-action waves-effect waves-green btn-flat">Guardar</a>
            </div>
        </div>
        <!--Fin modal nueva cuenta-->
        <!--Inicio modal nueva categoria -->
        <div id="modal-nueva-categoria" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h6>Nueva Categoría</h6>
                <div class="row row-imput">                                            
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate input-monto">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="categorias col s12">
                        <ul class="col s12 m12 l12">
                            <li class="col s12 m12 l12">Sueldo
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                            <!--<hr class="teal lighten-5" />-->
                            <li class="col s12 m12 l12">Bonificacion escolar
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                            <li class="col s12 m12 l12">Pago de Luz
                                <a href="" class="eliminar"><i class="tiny material-icons red-text">delete</i></a>
                                <a href="" class="editar"><i class="tiny material-icons">edit</i></a>
                            </li>
                        </ul>
                    </div>                                        
                </div>                               
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat ">Cerrar</a>
                <a href="#!" class="modal-action waves-effect waves-green btn-flat">Guardar</a>
            </div>
        </div>
        <!--Fin modal nueva categoria--> 
        <!-- FIN MODALES-->
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
                // today: 'Hoy',
                // // clear: 'Reset',
                // close: 'Ok',
                // closeOnSelect: false // Close upon selecting a date,
            });
            $('.modal').modal();
            //$('.panel-menu').css('height',h-210);

        });

    </script>
</body>

</html>