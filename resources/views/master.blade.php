<!DOCTYPE HTML>
<html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        main{
            min-height: calc(100vh - 211px - 50px);
        }
		footer{
				bottom: 0;
		}
    </style>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.18.0.min.css"><style>
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/fullpage.css')}}">
/* Only for snippet */
.double-nav .breadcrumb-dn {
  color: #fff;
}
.sn-bg-4{
    background: url({{asset('img/a.jpg')}});
}
.mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a {
    color: #6c757d;
}
.menu{
    color: #6c757d;
}
</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body class="fixed-sn mdb-skin" aria-busy="true">



  

    <!--Double navigation-->
    <header>
      <!-- Sidebar navigation -->
      <div id="slide-out" class="side-nav sn-bg-4 fixed" style="width: 240px;">
        <ul class="custom-scrollbar">
          <!-- Logo -->
          <li>
            <div class="logo-wrapper waves-light waves-effect waves-light">
              <a href="/dashboard_admin"><img src="{{asset('img/logo.png')}}" class="img-fluid flex-center"></a>
            </div>
          </li>
          <!--/. Logo -->
          <!--Social-->
          <li>
            <ul class="social">
              <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
              <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
              <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
              <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
            </ul>
          </li>
          <!--/Social-->
          <!--Search Form-->
          <li>
            <form class="search-form" role="search">
              <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </form>
          </li>
          <!--/.Search Form-->
          <!-- Side navigation links -->
          <li>
             <ul class="collapsible collapsible-accordion">
              <li><a href="/admin" class="waves-effect"><i class="fas fa-home"></i> Dashboard</a>
              </li>
              <li><a href="/admin/exhibition" class="waves-effect"><i class="fas fa-image"></i> Exhibition</a>

              </li>
              <li><a href="/admin/InteriorExp" class="waves-effect"><i class="fas fa-newspaper"></i>Interior Experience</a>

              </li>
              
              <li><a href="/admin/umkm" class="waves-effect"><i class="fas fa-store"></i> UMKM</a></li>
				<li><a href="/admin/podcast_admin" class="waves-effect"><i class="fas fa-microphone"></i> Podcast</a></li>
				<li><a href="/admin/pengunjung" class="waves-effect"><i class="fas fa-users"></i> Pengunjung</a></li>
            
            </ul>
            </li>
          <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong" style="width: 240px;"></div>
      </div>
      <!--/. Sidebar navigation -->
      <!-- Navbar -->
      <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav top-nav-collapse" style="padding-left: unset;">
        <!-- SideNav slide-out button -->
        <div class="float-left">
          <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
          <p>Acala Rancang</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light"><i class="fas fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
          </li>
          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" alt="" class="img-fluid rounded-circle z-depth-0"></a>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-key"></i> Ganti Password</a>
              <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->
    <main style="padding-left: 0px;">

      <div class="container-fluid text-center">
@yield('konten')
</div>

    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4" style="padding-left: 0px;">


	<br><br><br>
		<div class="container text-center text-md-left mt-0">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-1">

        <!-- Content -->
        <img src="{{asset('img/desain interior.png')}}">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-1">

        <!-- Links -->
        <p>INFORMASI ALAMAT TENTANG DESAIN INTERIOR UNIVERSITAS BRAWIJAYA</p><br>
		<p>(alamat, notelp, dsb)</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
	<hr>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Acala Rancang 2020 all rights reserved.
  </div>
  <!-- Copyright -->

    </footer>
    <script src="{{asset('js/anggota.js')}}"></script>
  <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/js/jquery.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/js/popper.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/js/bootstrap.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.18.0/js/mdb.min.js"></script><script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.18.0/compiled-addons.min.js"></script><script>$(document).ready(() => {

  // SideNav Initialization
  $(".button-collapse").sideNav();

  new WOW().init();
});</script>
<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
<div class="hiddendiv common"></div><div class="drag-target" style="left: 0px;"></div></body></html>
</html>
