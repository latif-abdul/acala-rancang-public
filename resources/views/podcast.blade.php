<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Audio Waveform Player with Playlist</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"><!-- icons -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/awp_default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.css')}}" media="all"><!-- playlist scroll -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
        <script src="https://connect.facebook.net/en_US/all.js?hash=b71c7fdf0f10124dc48b5df988fd41d3&amp;ua=modern_es6" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="http://connect.facebook.net/en_US/all.js"></script><script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="{{asset('js/wavesurfer.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jsmediatags.min.js')}}"></script><!-- id3 tags -->
        <script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script><!-- playlist scroll -->
        <script type="text/javascript" src="{{asset('js/new_cb.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/new.js')}}"></script>			
        <script type="text/javascript">

            var awp_player;  
            jQuery(document).ready(function($){

                var settings = {
                    instanceName:"default",
                    sourcePath:"",
                    playlistList:"#awp-playlist-list",
                    activePlaylist:"playlist-audio1",
                    activeItem:0,
                    volume:0.5,
                    autoPlay:true,
                    drawWaveWithoutLoad:false,
                    randomPlay:false,
                    loopingOn:true,
                    autoAdvanceToNextMedia:true,
                    mediaEndAction:"loop",
                    soundCloudAppId:"r4wruADPCq7iqJomagvYpdehvILa2bgE",
                    gDriveAppId:"AIzaSyB0Rw9B0WgjWQUYoxRi_rwpwr5E0ZxXuXs",
                    useKeyboardNavigationForPlayback:true,
                    usePlaylistScroll:true,
                    playlistScrollOrientation:"vertical",
                    playlistScrollTheme:"light",
                    facebookAppId:"644413448983338",
                    useNumbersInPlaylist: true,
                    numberTitleSeparator: ".  ",
                    artistTitleSeparator: " - ",
                    playlistItemContent:"title",
                    wavesurfer:{
                        waveColor: '#A8DBA8',
                        progressColor: '#ff33ff',   
                        barWidth: 0,
                        cursorColor: '#0000ff',
                        cursorWidth: 3,
                        height: 200,
                    }
                };

                awp_player = $("#awp-wrapper").awp(settings);

            }); 

        </script>
        
	<style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>
<style>
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
<body>
<header>
	
    <!-- Navbar -->
	<h3 class="float-left ml-5"><strong>Podcast</strong></h3>
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

        <!-- player code -->   
        <div id="awp-wrapper">

            <div class="awp-player-thumb-wrapper">
			
			<div class="awp-player-thumb"><img class="awp-visible" src="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.jpg"></div>
			
			<div class="awp-playback-toggle" style="cursor: pointer;"><i class="fa fa-play"></i></div>

                <div class="awp-volume-wrapper">
                    <div class="awp-player-volume" style="cursor: pointer;"><i class="fa fa-volume-up"></i></div>
                    <div class="awp-volume-seekbar awp-tooltip-top">
                         <div class="awp-volume-bg"></div>
                         <div class="awp-volume-level" style="width: 25px;"></div>
                    </div>
                </div>

            </div>

            <div class="awp-player-holder">

                <div class="awp-waveform-wrap">
                    <div class="awp-waveform awp-hidden"><wave style="display: block; position: relative; user-select: none; height: 200px; overflow: hidden;"><canvas style="position: absolute; z-index: 1; left: 0px; top: 0px; bottom: 0px; width: 760px;" width="760" height="200"></canvas><wave style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; overflow: hidden; width: 31px; display: block; box-sizing: border-box; border-right: 3px solid rgb(0, 0, 255);"><canvas width="760" height="200" style="width: 760px;"></canvas></wave></wave><audio preload="auto" src="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.mp3" style="width: 100%;"></audio></div>  
                    <div class="awp-waveform-img awp-visible" style="display: block;"><!-- image waveform backup -->
                        <div class="awp-waveform-img-load"><img src="peaks/Tim_McMorris_-_Successful_Business_Venture.png" alt="load"></div>
                        <div class="awp-waveform-img-progress-wrap" style="width: 30.9358px;"><div class="awp-waveform-img-progress" style="width: 760px;"><img src="peaks/Tim_McMorris_-_Successful_Business_Venture_progress.png" alt="progress"></div></div>
                    </div>
                    <span class="awp-waveform-preloader"></span>
                </div>  

                <p class="awp-media-time-total awp-visible">2:36</p>
                <p class="awp-media-time-current awp-visible">0:06</p>

            </div>
              
            <div class="awp-playlist-holder">
                <div class="awp-playlist-filter-msg"><p>NOTHING FOUND!</p></div>
                <div class="awp-playlist-inner mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 150px;"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="awp-playlist-content">
                        <!-- playlist items are appended here! --> 
                    <div class="awp-playlist-item" data-type="audio" data-id="0"><a class="awp-playlist-selected" href="#" data-id="0"><span class="awp-playlist-title">01.  Tim McMorris - Successful Business Venture</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.mp3" download="" title="Download"><i class="fa fa-download"></i></a><a class="awp-link" href="http://codecanyon.net/user/Tean/portfolio" target="_blank"><i class="fa fa-external-link"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="1"><a class="awp-playlist-non-selected" href="#" data-id="1"><span class="awp-playlist-title">02.  Tim McMorris - Happy Days Are Here To Stay</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay.mp3" download="" title="Download"><i class="fa fa-download"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="2"><a class="awp-playlist-non-selected" href="#" data-id="2"><span class="awp-playlist-title">03.  Tim McMorris - A Bright And Hopeful Future</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3" download="" title="Download"><i class="fa fa-download"></i></a><a class="awp-link" href="http://codecanyon.net/user/Tean/portfolio" target="_blank"><i class="fa fa-external-link"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="3"><a class="awp-playlist-non-selected" href="#" data-id="3"><span class="awp-playlist-title">04.  Tim McMorris - Give Our Dreams Their Wings To Fly</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.mp3" download="" title="Download"><i class="fa fa-download"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="4"><a class="awp-playlist-non-selected" href="#" data-id="4"><span class="awp-playlist-title">05.  Tim McMorris - Marketing Advertising Music</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Marketing_Advertising_Music.mp3" download="" title="Download"><i class="fa fa-download"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="5"><a class="awp-playlist-non-selected" href="#" data-id="5"><span class="awp-playlist-title">06.  Tim McMorris - Health Awppiness Success</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Health_Awppiness_Success.mp3" download="" title="Download"><i class="fa fa-download"></i></a></div><div class="awp-playlist-item" data-type="audio" data-id="6"><a class="awp-playlist-non-selected" href="#" data-id="6"><span class="awp-playlist-title">07.  Tim McMorris - Be My Valentine</span></a><a class="awp-download" href="media/audio/1/Tim_McMorris_-_Be_My_Valentine.mp3" download="" title="Download"><i class="fa fa-download"></i></a></div></div>
                </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 80px; max-height: 140px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                
                <div class="awp-preloader" style="display: none;"></div>

                <div class="awp-bottom-bar">

                    <input class="awp-search-filter" type="text" value="filter...">
                    <div class="awp-sort-alpha awp-tooltip-top" data-awptooltip="Alphabetic sort" style="cursor: pointer;"><i class="fa fa-sort-alpha-desc awp-sr-bar-i awp-icon-color"></i></div>

                   
                    <div class="awp-share-item awp-tooltip-top" data-type="tumblr" data-awptooltip="Share on Tumblr" style="cursor: pointer;"><i class="fa fa-tumblr awp-sr-bar-i awp-icon-color"></i></div>
                    <div class="awp-share-item awp-tooltip-top" data-type="twitter" data-awptooltip="Share on Twitter" style="cursor: pointer;"><i class="fa fa-twitter awp-sr-bar-i awp-icon-color"></i></div>
                    <div class="awp-share-item awp-tooltip-top" data-type="facebook" data-awptooltip="Share on Facebook" style="cursor: pointer;"><i class="fa fa-facebook awp-sr-bar-i awp-icon-color"></i></div> 

                </div>

            </div>
        
        <div class="awp-tooltip" style="display: none;"><p class="awp-tooltip-inner"></p></div><iframe class="awp-dl-iframe" style="position: absolute; left: -10000px; display: none;"></iframe></div>  



        <!-- PLAYLIST LIST -->
        <div id="awp-playlist-list" style="display: none;">

             <!-- audio playlist -->
             <ul id="playlist-audio1">

                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.mp3" data-artist="Tim McMorris" data-title="Successful Business Venture" data-thumb="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.jpg" data-share="http://audiojungle.net/item/successful-business-venture/154097?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Successful_Business_Venture.mp3" data-link="http://codecanyon.net/user/Tean/portfolio" data-peak-load="peaks/Tim_McMorris_-_Successful_Business_Venture.png" data-peak-progress="peaks/Tim_McMorris_-_Successful_Business_Venture_progress.png"></li> 

                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay.mp3" data-artist="Tim McMorris" data-title="Happy Days Are Here To Stay" data-thumb="media/audio/1/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay.jpg" data-share="http://audiojungle.net/item/Happy-days-are-here-to-stay/484531?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay.mp3" data-peak-load="peaks/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay.png" data-peak-progress="peaks/Tim_McMorris_-_Happy_Days_Are_Here_To_Stay_progress.png"></li>
             
                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3" data-artist="Tim McMorris" data-title="A Bright And Hopeful Future" data-thumb="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.jpg" data-share="http://audiojungle.net/item/a-bright-and-hopeful-future/236175?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3" data-link="http://codecanyon.net/user/Tean/portfolio" data-peak-load="peaks/Tim_McMorris_-_A_Bright_And_Hopeful_Future.png" data-peak-progress="peaks/Tim_McMorris_-_A_Bright_And_Hopeful_Future_progress.png"></li>
                 
                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.mp3" data-artist="Tim McMorris" data-title="Give Our Dreams Their Wings To Fly" data-thumb="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.jpg" data-share="http://audiojungle.net/item/give-our-dreams-their-wings-to-fly/151759?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.mp3" data-peak-load="peaks/Tim_McMorris_-_Give_Our_Dreams_Their_Wings_To_Fly.png" data-peak-progress="peaks/Tim_McMorris_-__Give_Our_Dreams_Their_Wings_To_Fly_progress.png"></li>

                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Marketing_Advertising_Music.mp3" data-artist="Tim McMorris" data-title="Marketing Advertising Music" data-thumb="media/audio/1/Tim_McMorris_-_Marketing_Advertising_Music.jpg" data-share="http://audiojungle.net/item/marketing-advertising-101/240408?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Marketing_Advertising_Music.mp3" data-peak-load="peaks/Tim_McMorris_-_Marketing_Advertising_Music.png" data-peak-progress="peaks/Tim_McMorris_-_Marketing_Advertising_Music_progress.png"></li>

                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Health_Awppiness_Success.mp3" data-artist="Tim McMorris" data-title="Health Awppiness Success" data-thumb="media/audio/1/Tim_McMorris_-_Health_Awppiness_Success.jpg" data-share="http://audiojungle.net/item/health-awppiness-success/178810?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Health_Awppiness_Success.mp3" data-peak-load="peaks/Tim_McMorris_-_Health_Awppiness_Success.png" data-peak-progress="peaks/Tim_McMorris_-_Health_Awppiness_Success_progress.png"></li> 

                <li class="awp-playlist-item" data-type="audio" data-mp3="media/audio/1/Tim_McMorris_-_Be_My_Valentine.mp3" data-artist="Tim McMorris" data-title="Be My Valentine" data-thumb="media/audio/1/Tim_McMorris_-_Be_My_Valentine.jpg" data-share="http://audiojungle.net/item/be-my-valentine/154579?ref=Tean" data-download="media/audio/1/Tim_McMorris_-_Be_My_Valentine.mp3" data-peak-load="peaks/Tim_McMorris_-_Be_My_Valentine.png" data-peak-progress="peaks/Tim_McMorris_-_Be_My_Valentine_progress.png"></li> 

             </ul>

        </div>     
		
	

<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div><script>window.fbAsyncInit=function(){FB.init({appId:'644413448983338',status:true,xfbml:true})};(function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n)){return}r=e.createElement(t);r.id=n;r.src='http://connect.facebook.net/en_US/all.js';i.parentNode.insertBefore(r,i)})(document,'script','facebook-jssdk')</script></body></html>