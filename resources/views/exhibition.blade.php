<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exhibition</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/fullpage.css')}}">
		
		<style>
			footer{
				background-color: #263353;
			}
			.kotak{
				background-color: #FFD000;
			}
			.title{
				font-size: 48pt;
				font-weight: bold;
			}
			.kotak2{
				background-color: #f6461a;
			}
			.title2{
				margin-top: 70px;
			}
			.link{
				font-size: 24pt;
				font-weight: bold;
			}
			#gambar img{
				width: 300px;
				height: 300px;
				display: block;
				  transition: .5s ease;
				  backface-visibility: hidden;

			}
			#gambar{
				margin-top: 100px;
				opacity: 1;
			}
			#gambar:hover img {
				opacity: 0.3;
			}
			footer{
				color: white;
			}
			.exhibition{
				margin-bottom: 100px
			}
			a{
				color: black;
			}
			.modal-lg, .modal-xl {
				max-width: 1300px;
			}
			.title:hover{
				color: black;
			}
.navbar{
				box-shadow: 0 0 0 0;
				margin-top: 50px;
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
		</style>
	</head>
	<body>
<div class="row float-right">
		<div id="header">
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
		</div>
</div>
		<br><br><br><br>
		<div class="row">
			<div class="col-1 kotak" align="left"><br><br><br><br><br><br><br><br><br><br></div>
			<div class="col-10 title"><a href="/exhibition"><center class="title2">EXHIBITION</center></a></div>
			<div class="col-1"><div class="kotak2"><br><br><br><br><br><br><br><br><br><br></div></div>
		</div>
		<div class="row">
			<div class="col-12 link">
			<center>
				<a href="/exhibition/InteriorDesign">INTERIOR DESIGN</a> | 
				<a href="/exhibition/Furniture">FURNITURE</a> | 
				<a href="/exhibition/SchematicDrawing">SCHEMATIC DRAWING</a> | 
				<a href="/exhibition/Nirmana">NIRMANA</a>
			</center>
			</div>
		</div>
		
		<div class="row exhibition">
			<div class="col-1">  </div>
			<div class="col-10">
				<center>
					<div class="row">
					
					@foreach($exhibition as $exh)
					<div class="col-sm-4 float-left" id="gambar">
					<a type="button" data-toggle="modal" data-target="#modal{{$exh->id_exhibition}}"><div class="col-sm view zoom" id="gambar">
					<img src="{{asset('uploads')}}/{{$exh->gambar}}">
					</div></a></div>
<!-- Modal: modalQuickView -->
<div class="modal fade" id="modal{{$exh->id_exhibition}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{{$exh->judul_exhibition}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb{{$exh->id_exhibition}}" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
			  <?php $i = 0?>
                @foreach($gambar as $img)
				
				@if($img->id_exhibition == $exh->id_exhibition)
                <div class="carousel-item <?php echo $i==0 ? 'active' : ''?>">
                  <img class="d-block w-100"
                    src="{{asset('uploads')}}/{{$img->gambar}}"
                    alt="{{$img->id_gambar}}">
                </div>
				<?php $i++?>
				
				@if($img->video != null)
				<div class="carousel-item">
					<iframe width="100%" height="500px" src="{{$img->video}}" 
					frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
					gyroscope; picture-in-picture" allowfullscreen="" alt="{{$img->id_video}}">></iframe>
                </div>
				@endif
				@endif
				@endforeach
				
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb{{$exh->id_exhibition}}" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb{{$exh->id_exhibition}}" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              <ol class="carousel-indicators">
                <?php $i = 0;?>
			  @foreach($gambar as $img)
			  @if($img->id_exhibition == $exh->id_exhibition)
                <li data-target="#carousel-thumb{{$exh->id_exhibition}}" data-slide-to="<?= $i?>" class="<?php echo $i==0 ? 'active' : ''?>">
                  <img src="{{asset('uploads')}}/{{$img->gambar}}" width="60">
                </li>
				<?php $i++;?>
				
				@if($img->video != null)
				<li data-target="#carousel-thumb{{$exh->id_exhibition}}" data-slide-to="<?= $i ?>" class="">
                  <img src="{{asset('img/OIP.jpg')}}" width="60">
                </li>
				@endif
				@endif
				@endforeach
              </ol>
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-4">
			<img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0 float-left"
						alt="avatar image" height="70">
			<div class="row">
			<div class="col-md">
            <h5 class="h5 product-name float-left">
              <strong class="float-left">{{$exh->author}}</strong><br>
			  <span class="float-left">{{$exh->instansi}}<br></span><br>
				<small>
				<span class="grey-text">
                
				 <a href="https://instagram.com/{{$exh->ig_author}}"><i class="fab fa-instagram"></i>{{$exh->ig_author}}</a>
				</span>
                </small>   
            </h5>
			</div>
			</div>
			
			<div class="card">
				<div class="card-header">
				<h5 class="mb-0">
				{{$exh->judul_exhibition}}
                 </h5>
				 </div>
				 <div class="card-body" align="left">
				 {{$exh->desc}}
				 </div>
			</div>
            <!--Accordion wrapper-->
          </div>
        </div>
      </div>
    </div>
	<!---->
  </div>
</div>
@endforeach
					
					</div>
				</center>
			</div>
			
		</div>
		
		
		
		<footer>
			<div class="footer-copyright text-center py-3">© Acala Rancang 2020 all rights reserved.
  </div>
		</footer>
	</body>
	<script src="{{asset('js/fullpage.js')}}"></script>
		<script type=text/javascript src="compiled-4.10.1.min.js"></script>
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
    integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n'
    crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
    integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
    crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
    crossorigin='anonymous'></script>
		<script>
			$(document).ready(function() {
$('.mdb-select').materialSelect();
});
		</script>
</html>