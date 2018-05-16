<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMARTParking</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="{{ asset('icon.png') }}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
          <a class="navbar-brand" href="#"><span>SMART</span>Parkir</a>
        </div>
      </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
      <ul class="nav menu">
        <li {{RouteHelper::ActiveRoute('Status-Parkir')}}>
          <a href="{{ Route('Status-Parkir') }}">
            <em class="fa fa-th-large">&nbsp;</em> Status
          </a>
        </li>
        <li {{RouteHelper::ActiveRoute('Data-Parkir')}}>
          <a href="{{ Route('Data-Parkir') }}">
            <em class="fa fa-list-alt">&nbsp;</em> Data
          </a>
        </li>
        <li {{RouteHelper::ActiveRoute('Statistik-Parkir')}}>
          <a href="{{ Route('Statistik-Parkir') }}">
            <em class="fa fa-bar-chart">&nbsp;</em> Statistik
          </a>
        </li>
    </ul>
  </div>
  <div id="app">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">{{RouteHelper::JudulRoute()}}</h1>
        </div>
      </div>
        @yield('content')
    </div>
  </div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
