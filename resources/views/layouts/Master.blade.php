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
        <li class="active">
          <a href="{{ Route('Status-Parkir') }}">
            <em class="fa fa-th">&nbsp;</em> Status Parkir
          </a>
        </li>
    </ul>
  </div>
  <div id="app">
    @yield('content')
  </div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
