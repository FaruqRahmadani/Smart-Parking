<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino - Panels</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
          <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
              <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
            </a>
            <ul class="dropdown-menu dropdown-messages">
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                </a>
                <div class="message-body"><small class="pull-right">3 mins ago</small>
                  <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                  <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                </a>
                <div class="message-body"><small class="pull-right">1 hour ago</small>
                  <a href="#">New message from <strong>Jane Doe</strong>.</a>
                  <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="all-button"><a href="#">
                  <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                </a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-bell"></em><span class="label label-info">5</span>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li><a href="#">
              <div><em class="fa fa-envelope"></em> 1 New Message
                <span class="pull-right text-muted small">3 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 New Likes
                  <span class="pull-right text-muted small">4 mins ago</span></div>
                </a></li>
                <li class="divider"></li>
                <li><a href="#">
                  <div><em class="fa fa-user"></em> 5 New Followers
                    <span class="pull-right text-muted small">4 mins ago</span></div>
                  </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div><!-- /.container-fluid -->
      </nav>
      <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
          <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
          </div>
          <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
        <ul class="nav menu">
          <li><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
          <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
          <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
          <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
          <li class="active"><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
          <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
            <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
          </a>
          <ul class="children collapse" id="sub-item-1">
            <li><a class="" href="#">
              <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
            </a></li>
            <li><a class="" href="#">
              <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
            </a></li>
            <li><a class="" href="#">
              <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
            </a></li>
          </ul>
        </li>
        <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
      </ul>
    </div>
    @yield('content')
    <div class="col-sm-12">
      <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
  </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
