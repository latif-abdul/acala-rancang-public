<!DOCTYPE HTML>
<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    
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
    <strong>{{ __('Login') }}</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #f6461a;" action="{{ route('login') }}" method="POST">
		@csrf
      <!-- Email -->
      <div class="md-form">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <label for="email" class="">{{ __('E-Mail Address') }}</label>
      </div>
		
      <!-- Password -->
      <div class="md-form">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <label for="password">{{ __('Password') }}</label>
      </div>
		
      <div class="d-flex justify-content-around">
        <div>
		<!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
          </div>
        
		@if (Route::has('password.request'))
        <div>
          <!-- Forgot password -->
          <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        </div>
		@endif
		</div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Login') }}</button>

     

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