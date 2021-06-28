<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Prueba Practica 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/material-dashboard.min.css?v=2.1.2') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-dark">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Bienvenidos</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a href="{{ route('login') }}" class="nav-link text-dark">
              <i class="material-icons">perm_identity</i>
              Inisio Sesion
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('register') }}">
              @csrf  
              <div class="card card-login card-hidden">
                <div class="card-header card-header-success text-center">
                  <h4 class="card-title">Registro</h4>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Ingrese sus Credenciales</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                  </span>
                   <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirmacion de Contraseña">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <input type="submit" class="btn btn-success pull-right" value="Enviar">  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer mt-4">
        <div class="container-fluid mt-4">
          <div class="copyright justify-content-center">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src=" {{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script src=" {{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src=" {{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src=" {{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=2.1.2') }}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets/demo/demo.js') }}"></script>
  <!-- Sharrre libray -->
  <script src="{{ asset('assets/demo/jquery.sharrre.js') }}"></script>
</body>
</html>