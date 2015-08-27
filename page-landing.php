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


<section id="top" class="site-wrapper" 
<?php if(get_field('landing_mobil_background')!=''): ?>
    style="background-image: url(<?php the_field('landing_mobil_background'); ?>);"
<?php else: ?>    
    style="background-image: url(<?php echo get_template_directory_uri();?>/../church-event-child/images/bg-mobil.jpg);"
<?php endif; ?>
>
    <!-- Video from YouTube. Have Questions? How To: https://github.com/pupunzi/jquery.mb.YTPlayer/wiki http://youtu.be/rlYVhDKCbqY-->
    <a id="bgndVideo" class="player" data-property="{videoURL:'<?php the_field('landing_background_video'); ?>', containment:'.site-wrapper', autoPlay:true, loop:true, mute:false, startAt:0, stopAt: 0, realfullscreen:true, quality:'<?php the_field('landing_video_quality'); ?>', opacity:1 , showControls: false, showYTLogo:false, vol:25}"></a>
    <div class="overlay"></div>
    <div class="site-wrapper-inner">
        <div class="masthead clearfix wow fadeIn" data-wow-delay=".9s">
            <div class="inner">
                <h3 class="masthead-brand">
                    <?php 
                        //Cambiamos la configuración de tiempo en PHP a nuestra región
                        $diaDeLaSemana = strftime("%A"); //Obtenemos el nombre del día de la semana en español
                        if($diaDeLaSemana == "sábado" || $diaDeLaSemana == "domingo")
                           $url="/senal-en-vivo";
                        else
                           $url="/inicio";
                    ?>
                    <a href="<?php echo $url; ?>">
                        <i class="icon ion-android-call"></i> Saltar Intro
                        <small> 
                            <img width="90px" alt=""
                            
                            <?php if(get_field('landing_img_intro')!=''): ?>
                                src="<?php the_field('landing_img_intro'); ?>" 
                            <?php else: ?>    
                                src="<?php echo get_template_directory_uri();?>/../church-event-child/images/logo.png" 
                            <?php endif; ?>

                            >
                        </small>
                    </a>
                </h3>
                <nav>
                    <ul class="nav masthead-nav">

                        <?php if(get_field('landing_url_twitter')!=''): ?>
                            <li>
                                <a title="Visitar Twitter" href="<?php the_field('landing_url_twitter'); ?>" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_field('landing_url_facebook')!=''): ?>
                        <li>
                            <a title="Visitar Facebook" href="<?php the_field('landing_url_facebook'); ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('landing_url_youtube')!=''): ?>
                        <li>
                            <a title="Visitar Youtube" href="<?php the_field('landing_url_youtube'); ?>" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('landing_url_instagram')!=''): ?>
                        <li>
                            <a title="Visitar Instagram" href="<?php the_field('landing_url_instagram'); ?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('landing_url_evento')!=''): ?>
                        <li>
                            <a title="Visitar Url" href="<?php the_field('landing_url_evento'); ?>" target="_blank">
                                <i class="fa fa-link"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
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

    <?php if(get_field('landing_date_event')!=''): ?>
        var fecha_contador="<?php the_field('landing_date_event'); ?>";
        var use_contador=true; 
    <?php else: ?>  
        var fecha_contador="<?php echo $fecha_actual = date('Y/m/d');  ?>";
        var use_contador=false;                  
    <?php endif; ?>
    
    

</script>

<!-- Custom JavaScript -->
<script src="<?php echo get_template_directory_uri();?>/../church-event-child/js/cover.js"></script>

</body>
</html>