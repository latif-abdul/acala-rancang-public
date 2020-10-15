<!DOCTYPE html>
<html>
    <head>
		<style>
			.box{
				width: 120px;
				height: 120px;
				background-color: #45d169;
				-webkit-transform: rotate(30deg);
				-moz-transform: rotate(30deg);
				-o-transform: rotate(30deg);
				transform: rotate(30deg);
				left: -500;
				margin-top: 100px;
				position: relative;
			}
			.box0{
				width: 120px;
				height: 120px;
				background-color: #45d169;
				-webkit-transform: rotate(45deg);
				-moz-transform: rotate(45deg);
				-o-transform: rotate(45deg);
				transform: rotate(45deg);
				left: -500;
				margin-top: 100px;
				position: relative;
				right: 0;
				top: -300;
			}
			.trapezium{
				height: 0;
				width: 120px;
				border-top: 120px solid #ec3504;
				border-left: 60px solid transparent;
				//border-right: 60px solid transparent;
				margin-bottom: 50px;
				-webkit-transform: rotate(26deg);
				-moz-transform: rotate(26deg);
				-o-transform: rotate(26deg);
				transform: rotate(26deg);
				margin-left: 0;
			}
			.coba{
				overflow: hidden;
			}
			.box1{
				animation: slideIn 1.5s ease-in-out;
			}
						.box2{
				animation: slideIn 2.5s ease-in-out;
			}
		</style>
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                    // $("#box0")
                        // .animate({width: "300px"});
					$("#box1")
					.animate({width: "300px"});
					$("#box2")
					.animate({width: "300px"});
            });
        </script>
    </head>
    <body>
        <div class="coba">
        <div class=box id=box0></div>
		<div class=box1 id=box1></div>
		<div class=box2 id=box2></div>
		<div class=trapezium></div>
		</div>
    </body>
</html>