<?php
/*

Template Name: Page Landing

*/?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mision Paz a las Naciones - Tu Casa">
    <meta name="author" content="misionpaz.org">

    <title>Mision Paz a las Naciones.</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="<?php echo get_template_directory_uri();?>/../church-event-child/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri();?>/../church-event-child/css/cover.css" rel="stylesheet">

    <!-- Custom css and fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri();?>/../church-event-child/css/font-awesome.min.css" rel="stylesheet" >


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader"><div id="status">&nbsp;</div></div>

<!-- Header -->


<section id="top" class="site-wrapper" style="background-image: url(http://sergioromero.cl/vesol/wp-content/uploads/ss-2-bg.jpg);">
    <!-- Video from YouTube. Have Questions? How To: https://github.com/pupunzi/jquery.mb.YTPlayer/wiki -->
    <a id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/rlYVhDKCbqY', containment:'.site-wrapper', autoPlay:true, loop:true, mute:true, startAt:0, stopAt: 50, realfullscreen:true, quality:'small', opacity:1, showControls: false, showYTLogo:false, vol:25}"></a>
    <div class="overlay"></div>
    <div class="site-wrapper-inner">
        <div class="masthead clearfix wow fadeIn" data-wow-delay=".9s">
            <div class="inner">
                <h3 class="masthead-brand">
                    <a href="tel:1234567890">
                        <i class="icon ion-android-call"></i> Saltar Intro
                        <small> 
                            <img width="90px" src="<?php echo get_template_directory_uri();?>/../church-event-child/images/logo.png" alt="">
                        </small>
                    </a>
                </h3>
                <nav>
                    <ul class="nav masthead-nav">
                        <li><a title="Visitar Twitter" href="/"><i class="fa fa-twitter"></i></a></li>
                        <li><a title="Visitar Facebook" href="/"><i class="fa fa-facebook"></i></a></li>
                        <li><a title="Visitar Youtube" href="/"><i class="fa fa-youtube"></i></a></li>
                        <li><a title="Visitar Instagram" href="/"><i class="fa fa-instagram"></i></a></li>
                        <li><a title="Visitar Url" href="/"><i class="fa fa-link"></i></a></li>
                    </ul>
                </h3>
                </nav>
                
            </div>
        </div>

        <div class="cover-container">
            <div class="cover">                
                <!-- countdown -->
                <div id="clock" class="wow fadeIn" data-wow-delay="1.1s"></div>                
            </div>
            <div class="video-controls">
                <a id="video-play" class="icon fa fa-pause size-28" href="#"></a>  &nbsp;
                <a id="video-volume" class="fa fa-volume-off size-28" href="#"></a>
            </div>
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/bootstrap.min.js"></script>

<!-- Plugins for video background -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/device.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/jquery.mb.YTPlayer.js"></script>

<!-- Plugins -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/smoothscroll.js"></script>
<script>
    
    var fecha_contador="2015/10/31";

</script>

<!-- Custom JavaScript -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/cover.js"></script>

</body>
</html>