<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Acala Rancang</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/fullpage.css')}}">
		<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.19.1.min.css?ver=4.19.1">
		<base target="_parent"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
<link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css">
<link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
		<script src="{{asset('js/fullpage.js')}}"></script>
		<script src="{{asset('js/mdb.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery-3.4.1.min.js')}}">
		$( ".wow" ).addClass( "fadeInUp" );
		</script>
		<script src="{{asset('js/mdb.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
		<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-plugins-gathered.min.js"></script>
		<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/popper.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-plugins-gathered.min.js"></script>
		<style>
			#main{
			  background-image: url("{{asset('img/background.png')}}");
			  background-size: cover;
			  background-repeat: no-repeat;
				position: absolute;
				
			}
			#header, footer{
				background-color: #263353;
			}
			#header{
				padding: 33px;
			}
			body{
				line-height: 1.15;
			}
			#kotak{
				background-color: #f6461a;
				margin-top: 50px;
			}
			#kotak2{
				background-color: #1a8a9a;
				margin-top: 50px;
			}
			.kotak{
				
				background-color: #1a8a9a;
			}
			.kotak2{
				max-width: 4%;
				background-color: #FFD000;
			}
			.logo{
				width: 500px;
				height: 270px;
				margin-top: 175px;
			}
			.about{
				font-size: 48pt;
				font-weight: bold;
				margin-top: 5px;
			}
			.us{
				margin-top: 5px;
			}
			.konten{
				margin-top: 20px;
				font-size: 48pt;
				font-weight: bold;
			}
			.konten2{
				align: center;
				font-size: 24pt;
				font-weight: bold;
			}
			footer{
				color: white;
				position: absolute;
				bottom: 0;
				width: 100%;
			}
			.top{
				margin-bottom: 596px;
			}
			.navbar{
				box-shadow: 0 0 0 0;
				//margin-top: 50px;
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
			.body{
				background-image: url({{asset('img/a.jpg')}});
				background-attachment: fixed;
			}
			#section1{
				background-color: transparent !important;
			}
			.fadeInUp{
				shadow: 0 !important;
			}
			.wow {
			  visibility: hidden;
			}
			/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
		</style>
		<script>
			$( document ).ready(function() {
			  new WOW().init();
			});
			
		</script>
</head>
<body class="body">

<nav class="navbar sticky-top navbar-expand-lg  float-right">
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
<div id="fullpage">
	<div class="section" id="section1">
	<div class="top">
			<div id="header">
			
		</div>
		
		<div id="main" class="col-md-12">
			<center><img src="{{asset('img/logo.png')}}" class="logo"></center>
		</div>
		</div>
	</div>
	<div class="section" id="section2">
	    <div class="row sambutan">
			<div class="col-1"><div id="kotak" align="left"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div></div>
			<div class="col-10"><center><iframe width="700" height="394" src="https://www.youtube.com/embed/a3ICNMQW7Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center></div>
			<div class="col-1"><div id="kotak2" align="right"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div></div>
		</div>

	</div>
	<div class="section" id="section3">
		<div class="row">
			<div class="col-1" style="max-width: 5%;"><div class="kotak" align="left"><br><br><br><br><br><br><br><br><br><br></div></div>
			<div class="col-md wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeInUp; animation-iteration-count: 1;">
			<div class="row">
			<div class="col-md about">TENTANG<br>KAMI</div>
			<div class="col-md us">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas sagittis magna, at rutrum quam porta eu. Vestibulum eleifend non elit eget tincidunt. Proin dapibus, nisl ac maximus porttitor, libero nulla fringilla orci, vitae auctor neque arcu sed libero. Nullam egestas, est a placerat dictum, urna tellus semper diam, quis efficitur lectus ipsum ut mauris. Duis viverra eleifend dui, sit amet facilisis nisl. Sed accumsan mattis placerat. Fusce convallis purus ac tempus mattis. Aenean mollis ac est quis tempus.</div>
			</div>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
	<div class="section" id="section4">
		
	</div>
	<div class="section" id="section5">
		<div class="row">
			<div class="col-1 kotak2" align="left"><br><br><br><br><br><br><br><br><br><br></div>
			<div class="col-md konten">KONTEN</div>
		</div>
		<div class="row">
			
				
				<div class="col-12">
				<center>
				<div class="row konten2">
				<div class="col-sm">
					<a href=""><img src="{{asset('img/1.png')}}"><br>
					ABOUT</a>
				</div>
				<div class="col-sm">
					<a href="/exhibition"><img src="{{asset('img/2.png')}}"><br>
					EXHIBITION</a>
				</div>
				<div class="col-sm">
					<a href="/interiorExp"><img src="{{asset('img/3.png')}}"><br>
					INTERIOR EXPERIENCE</a>
				</div>
				<div class="col-sm">
					<a href="/podcast"><img src="{{asset('img/4.png')}}"><br>
					PODCAST</a>
				</div>
				<div class="col-sm">
					<a href="/umkm"><img src="{{asset('img/4.png')}}"><br>
					UMKM</a>
				</div>
				</div>
				</div>
			
		</div>
	</div>
	<div class="section" id="section6">
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
	</div>
</div>

<script type="text/javascript" src="../dist/fullpage.js"></script>
<script type="text/javascript" src="examples.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['First page', 'Second page', 'Third and last page']
    });
</script>
</body>
</html>