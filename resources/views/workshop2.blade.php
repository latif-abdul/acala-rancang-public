<!DOCTYPE HTML>
@foreach($interiorExp as $ie)
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>{{$ie->judul}}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css"><link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css"><style>       .navbar {
            background-color: #6f7782;
        }
        footer.page-footer {
            background-color: #6f7782;
        }</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body aria-busy="true">






  <!--  Required meta tags always come first  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap Template</title>
  <!--  Font Awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <style>
    .navbar {
            background-color: #6f7782;
        }
        footer.page-footer {
            background-color: #6f7782;
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
			main{
				margin-top: 100px;
			}
			.blockquote-footer{
				background-color: white !important;
			}

    </style>




  <!--Main Navigation-->
<div id="header">
			<br><br>
		</div>
  <!--Main Navigation-->
  <header>
	
    <!-- Navbar -->
	<h3 class="float-left ml-5"><strong>Interior Experience</strong></h3>
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

  <!--Main Layout-->
  <main>

    <div class="container">
<hr class="my-5">
      <!--Section: Blog v.4-->
	  
      <section class="section mt-5 pb-3 wow fadeIn">

        <!--Grid row-->
        <div class="row">
          <div class="col-md-12">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="card-img-top" src="{{asset('uploads')}}/{{$ie->gambar}}" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>

              <!--Post data-->
              <div class="card-body card-body-cascade text-center">
                <h2><a><strong>{{$ie->judul}}</strong></a></h2>
                <p>Written by <a>{{$ie->name}}</a></p>


              </div>
              <!--Post data-->
            </div>

            <!--Excerpt-->
            <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
              <p>{{$ie->isi}}</p>

            </div>
          </div>
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Blog v.4-->
	  <section>

        <div class="jumbotron p-5 text-center text-md-left author-box wow fadeIn" data-wow-delay="0.3s">
          <!--Name-->
          <h4 class="h3-responsive text-center font-weight-bold dark-grey-text">About author</h4>
          <hr>
          <div class="row">
            <!--Avatar-->
            <div class="col-12 col-md-2 mb-md-0 mb-4">
              <img src="{{asset('uploads')}}/{{$ie->profile_picture}}" class="img-fluid rounded-circle z-depth-2">
            </div>
            <!--Author Data-->
            <div class="col-12 col-md-10">
              <h5 class="font-weight-bold dark-grey-text mb-3">
                <strong>{{$ie->name}}</strong>
              </h5>
               <div class="personal-sm pb-3">
                <a class="fb-ic pr-2" href="www.facebook.com/{{$ie->facebook}}"><i class="fab fa-facebook-f mr-2"> </i></a>
                <a class="tw-ic pr-2" href="www.twitter.com/{{$ie->twitter}}"><i class="fab fa-twitter mr-2"> </i></a>
              </div>
              <p>{{$ie->bio}}</p>
            </div>
          </div>
        </div>

      </section>
	  
      <!--/.Author box-->

      <hr class="mb-5 mt-4">

      <!--Section: Blog v.2-->
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h3 class="text-center my-5 text-center h3 pt-3">Recomendation</h3>

        <!--Grid row-->
        <div class="row">
			@foreach($suggestion as $sgt)
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('uploads')}}/{{$sgt->gambar}}" class="card-img-top" alt="" style="height: 233px;">
                <a>
                  <div class="mask waves-effect waves-light"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">
                <!--Social shares button-->
                
                <!--Title-->
                <h4 class="card-title">{{$sgt->judul}}</h4>
                <hr>
                <!--Text-->
                <p class="card-text">{{$sgt->isi}}</p>
                <a class="link-text" href="/workshop2/{{$sgt->id}}">
                  <h5>Read more <i class="fas fa-chevron-right"></i></h5>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->
			@endforeach

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Blog v.2-->

      <!--Author box-->
      

      

    </div>

  </main>
  <!--Main Layout-->

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

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>



<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/popper.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/bootstrap.min.js"></script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script><script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script><script> new WOW().init();</script><div class="hiddendiv common"></div></body></html>
@endforeach