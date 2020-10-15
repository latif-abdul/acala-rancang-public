<!DOCTYPE HTML>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>UMKM</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/fullpage.css')}}">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
		.navbar{
				box-shadow: 0 0 0 0;
				//margin-top: 50px;
				-webkit-box-shadow: 0 0 0 0;
			}
			.center:hover {
				color: #0eb7da;
			}
			.center::before, .center::after {
			  top: 0;
			  left: 0;
			  height: 100%;
			  width: 100%;
			  transform-origin: center;
			}
			.center::before {
			  border-top: 2px solid #0eb7da;
			  border-bottom: 2px solid #0eb7da;
			  transform: scale3d(0, 1, 1);
			}
			.center::after {
			  border-left: 2px solid #0eb7da;
			  border-right: 2px solid #0eb7da;
			  transform: scale3d(1, 0, 1);
			}
			.center:hover::before, .center:hover::after {
			  transform: scale3d(1, 1, 1);
			  transition: transform 0.5s;
			}
			.container {
			  isolation: isolate;
			}
			nav a {
			  background: none;
			  border: 0;
			  box-sizing: border-box;
			  //margin: 1em;
			  padding: 1em 2em;
			  //box-shadow: inset 0 0 0 2px #f45e61;
			  color: #f45e61;
			  font-size: inherit;
			  font-weight: 700;
			  position: relative;
			  vertical-align: middle;
			}
			nav a::before, nav a::after {
			  box-sizing: inherit;
			  content: '';
			  position: absolute;
			  width: 100%;
			  height: 100%;
			}
			#header, footer{
				background-color: #263353;
				color: white;
			}
			.btn-color{
				background-color: #263353 !important;
				color: white !important;
			}
			header{
				margin-top: 30px;
			}
    </style>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/css/mdb.min.css"><style></style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body>

<div id="header">
			<br><br>
		</div>
  <!--Main Navigation-->
  <header>
	
    <!-- Navbar -->
	<h3 class="float-left ml-5"><strong>UMKM</strong></h3>
    <nav class="sticky-top navbar-expand-lg  float-right">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="center" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="center" href="/exhibition">Exhibition</a>
      </li>
      <li class="nav-item">
        <a class="center" href="/workshop">Interior Experience</a>
      </li>
		<li class="nav-item">
        <a class="center" href="/umkm">UMKM</a>
      </li>
<li class="nav-item">
        <a class="center" href="/podcast">Podcast</a>
      </li>
<li class="nav-item">
        <a class="center" href="/aboutus">About Us</a>
      </li>
      <li class="nav-item dropdown">
        
      </li>
    </ul>
  </div>
</nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">



      <hr class="my-5">

      <!--Section: Cards-->
      <section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">
			@foreach($umkm as $u)
          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('uploads')}}/{{$u->gambar}}" class="card-img-top" alt="" style="width :540px; height :360px;">
                <a href="/workshop2/{{$u->id}}" target="_blank">
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">{{$u->nama}}</h4>
                <!--Text-->
                <p class="card-text">{{$u->bio}}...</p>
                <a href="/umkm2/{{$u->id}}" target="_blank" class="btn btn-color btn-md waves-effect waves-light">Read More
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->
			@endforeach
        </div>
        <!--Grid row-->

       
      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
<footer>
	<br><br><br>
		<div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <img src="{{asset('img/desain interior.png')}}">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

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
  <!--/.Footer-->
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/js/jquery.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/js/popper.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/js/bootstrap.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Free_4.19.1/js/mdb.min.js"></script><script>new WOW().init();</script><div class="hiddendiv common"></div></body></html>