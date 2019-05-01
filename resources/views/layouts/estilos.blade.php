<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>INCIDENCIAS</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
=======
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistema de incidencias
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/now-ui-dashboard.css?v=1.3.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
>>>>>>> 56ce5a4b3f7c163bb672aadc0db8ad3647fa260a
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      @include('layouts.sidebar')
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('layouts.nav')
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://incidencias.test">
                  Sistema de incidencias
                </a>
              </li>
              <li>
                <a href="https://incidencias.test">
                  Nosotros
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Diseñado por
            <a href="https://incidencias.test" target="_blank">URACCAN</a>. Programado por
            <a href="https://incidencias.test" target="_blank">Informativa V Año</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('js/core/jquery.min.js')}}"></script>
  <script src="{{asset('js/core/popper.min.js')}}"></script>
  <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <!-- <script src="../assets/js/plugins/bootstrap-notify.js"></script> -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/now-ui-dashboard.min.js?v=1.3.0')}}" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('js/demo.js')}}"></script>
  <script>
    // $(document).ready(function() {
    //   // Javascript method's body can be found in assets/js/demos.js
    //   demo.initDashboardPageCharts();

    // });
  </script>
</body>

</html>
