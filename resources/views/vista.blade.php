<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Prueba Tecnica 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--icons-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" type="text/css"/>
  <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />

  <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>

</head>

<body class="">
  <div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container">
          <div class="collapse navbar-collapse justify-content-end">
           {{-- login --}}
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons" style="font-size: 35px">person</i>
                </a>
                @if (Route::has('login'))
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  @auth
                    <a class="dropdown-item" href="{{ url('/home') }}">Inicio</a>
                  @else
                    <a class="dropdown-item" href="{{ route('login') }}">Inicio Sesión</a>
                    @if (Route::has('register'))
                      <a class="dropdown-item" href="{{ route('register') }}">Registro</a>
                    @endif
                  @endauth
                </div>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
            <form id="form"  action="{{ route('facturar') }}">
              @csrf
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title text-center">INFORMACION PERSONAL</h4>
                  <p class="card-category">Por favor llene todos los campos </p>
                </div>

                {{-- desarrollo --}}
                <div class="card-body">
                  {{-- informacion personal --}}
                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Nombre:</label>
                          <input type="text" onkeypress="return val_numeros(event)" maxlength="50" name="nombre" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                           <label class="bmd-label-floating text-dark">Apellido:</label>
                          <input type="text"onkeypress="return val_texto(event)"  name="apellido" maxlength="50" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Dirección:</label>
                          <input type="text"  name="direcion" class="form-control" maxlength="80" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                           <label class="bmd-label-floating text-dark">cedula:</label>
                          <input type="text" onkeypress="return val_numeros(event)"  name="cedula" maxlength="15"class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Telefono:</label>
                          <input type="text" onkeypress="return val_numeros(event)" name="telefono" maxlength="15" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                           <label class="bmd-label-floating text-dark">celular:</label>
                          <input type="text" onkeypress="return val_numeros(event)"  name="celular" maxlength="15"  class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      {{-- correo cliente --}}
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Correo:</label>
                          <input type="email"  name="correo" class="form-control"  maxlength="90" required>
                        </div>
                      </div>
                    </div>
                 </div>
                </div>
                {{-- 2- INFORMACION DEL VEHICULO  --}}
                <div class="card mt-5">
                <div class="card-header card-header-success">
                  <h4 class="card-title">VEHICULO</h4>
                  <p class="card-category">Por favor llene todos los campos </p>
                </div>
                <div class="card-body">
                  <div class="row mt-4">
                    {{-- placa --}}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating text-dark">Placa:</label>
                        <input type="text"  name="placa" class="form-control" maxlength="9" required>
                      </div>
                    </div>
                    {{-- marca--}}
                    <div class="col-md-6">
                      <div class="form-group">
                       <label class="bmd-label-floating text-dark">Marca:</label>
                       <input type="text"onkeypress="return val_texto(event)"  name="marca"  maxlength="15" class="form-control" required>
                     </div>
                   </div>
                 </div>
                
                <div class="dropdown-divider"></div>
                 <div class="row">
                      {{-- modelo --}}
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Modelo:</label>
                          <input type="text" onkeypress="return val_numeros(event)" name="modelo" maxlength="15" class="form-control" id="Tipo_de_Documento_representate" required>
                        </div>
                      </div>
                      {{-- color --}}
                      <div class="col-md-6">
                        <div class="form-group">
                           <label class="bmd-label-floating text-dark">Color:</label>
                          <input type="text"onkeypress="return val_texto(event)"  name="color" maxlength="15" class="form-control" required>
                        </div>
                      </div>
                 </div>
                 <div class="row">
                      {{-- modelo --}}
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-dark">Valor:</label>
                          <input type="text" onkeypress="return val_numeros(event)" name="valor"  maxlength="15" class="form-control" id="Tipo_de_Documento_representate" >
                        </div>
                      </div>
                 </div>
                 <div class="mt-4"></div>
                   <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-success pull-right" >Registrar</button>
                  </div>
               </div>
              </div>
                {{-- end form --}}
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-left pt-4">
          </div>
          <div class="copyright float-rigth">
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--JS-->
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Plugin para momentJs  -->
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin para Sweet Alert -->
  <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
  <!--Plugin validacion de formulario -->
  <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
  <script src=" {{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <script src=" {{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <script src=" {{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js')  }}"></script>
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
  <!-- Plugin Google Maps-->
  <!-- Chartist JS -->
  <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notificaciones Plugin    -->
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/demo/demo.js') }}"></script>
</body>

</html>