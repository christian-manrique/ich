<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package CM IT SOLUTIONS INC
 * @subpackage CM IT ICH THEME
 * @since ICH 1.0 VER
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="http://www1.produ.com/HTMLfijos/EspecialEditorialV3/js/jquery-2.2.4.min.js"></script>-->

    <link type="image/x-icon" href="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/favicon.ico" rel="shortcut icon"/> 
	<link type="image/x-icon" href="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/favicon.ico" rel="icon"/> 

    <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/jquery.rd-navbar.js"></script>
    <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/jquery.flexslider.js"></script>
     <script src="http://www1.produ.com/HTMLfijos/produmxlisto/js/slick.min.js"></script>
	<?php wp_head(); ?>
	 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/parallax.min.js"></script>
 <link href="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/css/flex/flexsliderNew2.css" rel="stylesheet" />
    <link href="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/css/style.min.css" rel="stylesheet" />
   

    <script>
        $(function () {
            $('.rd-navbar').RDNavbar({
                stickUpClone: false,
                stickUpOffset: 170
            });
        })

    </script>
    <!-- <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/scrolling_animation.js"></script>-->
     
     <?php if($wp_query->post->post_title == "home"){ ?> 
         <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/pace3.js"></script>
         <link href="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/css/preloader3.css" rel="stylesheet" />

      <?php } ?>

     <script src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/js/scrolling_animation.js"></script>
    
    
     
     <link href="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/css/slick_slider.css" rel="stylesheet" />
     <script src="https://use.fontawesome.com/c70b78400b.js"></script>
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
      <script>
        
	   $(document).ready(function(){

                 <?php if($wp_query->post->post_title != "PROJECTS"){ ?> 
                       $('html, body').animate({
				scrollTop: $(".header-ich").offset().top
			  }, 500); 

                 <?php }else{ ?>
                        if( window.location.hash =="#completed_pro"){
                              setTimeout(function(){
                                      document.getElementById('completed_pro').focus();

                              }, 1500);
                        }
                        if( window.location.hash =="#under_pro"){
                              setTimeout(function(){
                                      document.getElementById('under_pro').focus();

                              }, 1500);
                        }
                        if( window.location.hash =="#future_pro"){
                              setTimeout(function(){
                                      document.getElementById('future_pro').focus();

                              }, 1500);
                        }
  
                 <?php } ?>
		 $('.flexslider').flexslider({
				slidshow: true,
				animation: "slide",
				controlNav: true,
				animationLoop: true,
				slideshow: true,
                                slideshowSpeed: 2500,
                                animationSpeed: 800
			});


	<?php if($wp_query->post->post_title == "home"){ ?> 
                $('.thumbnail-video').click(function(){
			var video_src=$('iframe',this).attr('src');

			$('.video-player').fadeOut();
			$('.video-player iframe').attr('src', video_src);

			$('.video-player').fadeIn();

			$('html, body').delay(0).animate({
				scrollTop: ($('.video-player').offset().top)-50
			}, 500);
		});


      $('.nav-link2').click(function(){
          var href_src=$(this).attr('href');
          
          $( ".nav-item a" ).removeClass( "active" );
          $(this).addClass('active');
          $(href_src).fadeOut(); 

         
          $( ".tab-content .tab-pane" ).removeClass( "active"  );
          $( ".tab-content .tab-pane" ).addClass( "hidden"  );
          $(href_src).addClass( "active" );
          $(href_src).removeClass( "hidden" );
          
			$(href_src).fadeIn();
        
			$('html, body').delay(0).animate({
				scrollTop: ($('.tab-content').offset().top)-50
			}, 500);
       });

              Pace.on('done', function(){
			$('.preload i').hide();
			$('.customize-support').fadeIn(1000);
			$('.preload').fadeOut(2500);
		});
	<?php } ?>
        var config = {
          duration   : 800,
          distance   : "10px",
          scale      : 0.2,
        }

        window.sr = new ScrollReveal(config);

       
var hero = {
        origin   : "bottom",
        distance : "24px",
        duration : 1500,
        scale    : 1.05,
      }

      var intro = {
        origin   : "bottom",
        distance : "64px",
        duration : 900,
        delay    : 800,
        scale    : 1,
      }

     var github = {
        origin   : "bottom",
        distance : "32px",
        duration : 700,
        delay    : 400,
        scale    : 0,
        reset: false,
        viewFactor: 0.2,
      }

      var block = {
        origin   : "top",
        distance : "32px",
        duration : 700,
        delay    : 700,
        scale    : 0,
        reset: false,
        viewFactor: 0.2,
useDelay: 'always',
container: '.projects_scroll2'
      }

      sr.reveal(".about_us_scroll", github,500);
      sr.reveal(".projects_scroll1", github,500);
      sr.reveal(".services_scroll", github,500);
      sr.reveal(".contact_scroll", github,500);


                 <?php if($wp_query->post->post_title == "PROJECTS"){ ?> 
	
            	$('.more-videos-slider').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
autoplay: true,
infinite: true,
				prevArrow: '<a class="slick-btn left"><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
				nextArrow: '<a class="slick-btn right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>'
			});

	
               <?php } ?> 
       
        

     });

 



		
		
     </script>

 <style>

      .sr .projects_scroll1,
      .sr .about_us_scroll,
      .sr .contact_scroll,
      .sr .services_scroll {
        visibility: hidden;
      }


.flex-direction-nav  {
   display:none;
}

.flexslider .slides img {
   
    height: 550px;
}


/* Mobile HD */
@media screen and (min-width: 350px) and (max-width: 760px){
.flexslider .slides img{
height: 300px; 
}
}


@media only screen 
and (min-width : 1824px) {
  .flexslider .slides img{
height: 800px; 
}
}



.hidden {
    display: none !important;
}

.embed-responsive{
  max-width:650px;
  margin: 0 auto;
}


.preload {
    height: 100%;
    position: fixed;
    width: 100%;
    background-color: #000;
    z-index: 500;
    left: 0;
    top: 0;
}

.preload i {
    display: block;
    position: absolute;
    right: 150px;
    bottom: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.6);
    width: 1px;
}

.preload figure, .preload svg {
    position: absolute;
    left: 40%;
    top: 50%;
    margin-left: -132px;
    margin-top: -47px;
}

.more-videos-slider a.slick-btn.left {
    bottom: -40px;
    left: 50%;
    margin-left: -180px;
}

.slider-nav a.slick-btn, .more-videos-slider a.slick-btn {
    position: absolute;
    right: 50%;
    bottom: -40px;
    margin-right: -180px;
}

.more-images-slider a.slick-btn {
    position: absolute;
        bottom: 50%;
}

.slick-slide {
    text-align: center;
}

.slick-slide::before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.slick-slide img {
    vertical-align: middle;
    display: inline-block;
}

a.slick-btn {
    background-image: none !important;
    bottom: 0;
    height: 45px;
    width: 45px;
    border: 2px solid #000;
    border-radius: 50%;
    opacity: 1;
    z-index: 999;
    display: inline-block !important;
    text-align: center;
    padding-top: 5px;
    margin: 0 5px;
    cursor: pointer;    
	font-size: 23px;
}


.slick-btn img {
    max-width: 12px;
}

.more-images-slider .left-carousel-control {
    left: 5%;
}

.more-images-slider .right-carousel-control {
    right: 5%;
}



.w-100-slider2 {
    width: 100% !important;
    height: 50%;
}


</style>
    
</head>
<body>

    <div class="header-ich">
           <?php if($wp_query->post->post_title == "home"){ ?>    
		<div class="flexslider">
		  <ul class="slides">
                        <li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/02.jpg" /></li>
                        <li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/03.jpg" /></li>
                        <li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/04.jpg" /></li>
			<li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/05.jpg" /></li>
                        <li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/06.jpg" /></li>
			<li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/07.jpg" /></li>
			<li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/08.jpg" /></li>
			<li><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/uploads/2017/05/01.jpg" /></li>    
		  </ul>
		</div>
            <?php } ?>
		<header id="home" class="page-header text-center" data-type="anchor">
			<nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static">
				<div class="rd-navbar-inner">
					<!-- RD Navbar Panel -->
					<div class="rd-navbar-panel">
						<div class="rd-navbar-panel-canvas"></div>
						<!-- RD Navbar Toggle -->
						<button class="rd-navbar-toggle"  <?php echo ($wp_query->post->post_title != "home") ? 'style="background-color: #000;"' : '' ?>   data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span 
 ></span></button>
						<!-- END RD Navbar Toggle -->
						<!-- RD Navbar Brand -->
						<div class="rd-navbar-brand">
							<a href="/dev2/ichdev/" class="logo">
								<img src="/dev2/ichdev/wp-content/themes/cmit_theme_ICH/images/logo-menu2.png" />
							</a>
						</div>
						<!-- END RD Navbar Brand -->
					</div>
					<!-- END RD Navbar Panel -->
				</div>
				<div class="rd-navbar-outer border-y">
					<div class="rd-navbar-inner">
						<div class="rd-navbar-subpanel">
							<div class="rd-navbar-nav-wrap">
								<!-- RD Navbar Nav -->
								<ul class="rd-navbar-nav">
									<li class="<?php echo ($wp_query->post->post_title == "home") ? 'active' : ''; ?>"><a href="/dev2/ichdev/">Home</a>
									</li>
									<li class="<?php echo ($wp_query->post->post_title =="PROJECTS" ) ? 'active' : ''; ?>">
										<a href="/dev2/ichdev/?page_id=132/#projects">Projects</a>
									</li>
									<li class="<?php echo ($wp_query->post->post_title =="ABOUT US" ) ? 'active' : ''; ?>">
										<a href="/dev2/ichdev/?page_id=130/#about_us">About Us</a>
									</li>
									<li class="<?php echo ($wp_query->post->post_title =="WHAT WE DO" )  ? 'active' : ''; ?>">
										<a href="/dev2/ichdev/?page_id=128/#what_we_do">what we do</a>
									</li>
									<li class="<?php echo ($wp_query->post->post_title =="VENDOR SUBCONSTRUCTOR" ) ? 'active' : ''; ?>">
										<a href="/dev2/ichdev/?page_id=134/#vendor">Vendor / SubContractor</a>
									</li>
									<li class="<?php echo ($wp_query->post->post_title =="contact us" )  ? 'active' : ''; ?>">
										<a href="/dev2/ichdev/?page_id=123/#contact_us">Contact Us</a>
									</li>
								</ul>
								<!-- END RD Navbar Nav -->
							</div>

						</div>
					</div>
				</div>

			</nav>
		</header>		
		
	</div>
  <?php if($wp_query->post->post_title == "home"){ ?>    
 <div class="preload" style="display: none;"><figure class="preload-logo"><img src="http://www.ichbuilders.com/dev2/ichdev/wp-content/themes/cmit_theme_ICH/images/LOGO_ICH.svg" width="264" alt=""></figure><i id="vbarloader" style="height: 100%; display: none;"></i></div>
<?php } ?>

