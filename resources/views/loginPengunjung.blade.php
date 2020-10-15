<!DOCTYPE HTML>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Login Pengunjung</title>
    
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.1.min.css">
<style></style><style type="text/css">
<style>
        body {
            margin: 0;
            padding: 0;
			background-color: #1a8a9a !important;
        }
		.login{
			
			
		}
		.card{
			position: absolute;
			margin-top: 75px;
			
		}
		.card-header{
			background-color: #f6461a !important;
		}
		.md-form input[type=text]:focus:not([readonly]),
		.md-form input[type=password]:focus:not([readonly])	{
			box-shadow: 0 1px 0 0 #f6461a !important;
			border-bottom: 1px solid #f6461a !important;
		}
		.md-form input[type=text]:focus:not([readonly])+label,
		.md-form input[type=password]:focus:not([readonly])+label{
			color : #f6461a !important;
		}
		.btn-outline-info{
			color : #f6461a !important;
			border-color : #f6461a !important;
		}
		.btn-outline-info:hover{
			color : #6f1a04 !important;
			border-color : #6f1a04 !important;
		}
		footer{
				color: white;
			}
    </style>
	<style>
/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body aria-busy="true" style="background-color: #1a8a9a;">


<!-- Material form login -->
<div class="col-md-4 login float-right">
<div class="card">

  <h5 class="card-header white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
	
    <!-- Form -->
    <form class="text-center" style="color: #f6461a;" action="/rekapPengunjung" method="post">
		{{ csrf_field() }}
      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormName" class="form-control" name="nama">
        <label for="materialLoginFormName" class="">Nama</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="text" id="materialLoginFormInstance" class="form-control" name="instansi">
        <label for="materialLoginFormInstance">Instansi</label>
      </div>

		<div class="md-form">
        <input type="email" id="materialLoginFormEmail" class="form-control" name="email">
        <label for="materialLoginFormEmail">Email</label>
      </div>
      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

     

    </form>
    <!-- Form -->

  </div>

</div>
</div>
<canvas id="lel"></canvas>
<footer>
			<div class="footer-copyright text-center py-3">© Acala Rancang 2020 all rights reserved.
  </div>
		</footer>
<!-- Material form login --><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js">
</script><script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/popper.min.js"></script>
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/bootstrap.min.js"></script>
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script>
<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
<script src="{{asset('js/dot.js')}}"></script>
<script></script><div class="hiddendiv common"></div></body></html>