<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('gadmin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gadmin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('gadmin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gadmin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{route('adminAuthenticate')}}">
                @csrf
                <h1>Iniciar Sesión</h1>
                @isset($error)
                <div class="alert alert-danger errorAlert" role="alert">
                    Error en el ingreso, credenciales incorrectas
                </div>
                @endisset()
                @isset($logout)
                <div class="alert alert-info logoutAlert" role="alert">
                    Ha cerrado sesión con éxito
                </div>
                @endisset()
              <div>
                <input type="text" class="form-control" placeholder="Username" autocomplete="off" required="" name="user"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" autocomplete="off"  required="" name="password"/>
              </div>
              <div>
                <button class="btn btn-default" type="submit">Ingresar</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1> IDO</h1>
                  <p>©2020 Todos los derechos reservados</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
  <script>
        $(document).ready (function(){ 
             window.setTimeout(function() { 
                $(".logoutAlert").hide(); 
                $(".errorAlert").hide(); 
            }, 2000);  
        }); 
  </script>
</html>
