<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>>
<head>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <script>

 function setCookie(cname,cvalue,exdays) {
     var d = new Date();
     d.setTime(d.getTime() + (exdays*60*60*1000));
     var expires = "expires=" + d.toGMTString();
     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
 }

 function getCookie(cname) {
     var name = cname + "=";
     var decodedCookie = decodeURIComponent(document.cookie);
     var ca = decodedCookie.split(';');
     for(var i = 0; i < ca.length; i++) {
         var c = ca[i];
         while (c.charAt(0) == ' ') {
             c = c.substring(1);
         }
         if (c.indexOf(name) == 0) {
             return c.substring(name.length, c.length);
         }
     }
     return "";
 }

 function checkCookie() {
     var user=getCookie("username");
     if (user != "") {
     } else {
 		alert("Welcome <?php bloginfo( 'name' ); ?> website");
         setCookie("username", "grest", 3);
     }
 }

 </script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="Keywords">
  <meta name="author" content="Name">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
  <?php
    $full1 = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/1.png" );
    $full2 = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/2.png" );
    $full3 = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/8.png" );
 ?>
  <style>
    .navigation {
        position: absolute;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
        background-color: #333;
        color: #f2f2f2;
    }
    * {
        box-sizing: border-box;
    }
 
    body {
        overflow: hidden;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        font-family: chalkduster;
    }
    .css-slider-wrapper {
        display: block;
        background: #FFF;
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }
    /* Slider */
    .slider {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 1;
        z-index: 0;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: center;
        -webkit-transition: -webkit-transform 1600ms;
        transition: -webkit-transform 1600ms, transform 1600ms;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
        
    /* Slides Background Color */
    .slide-1 {
        background-image: url(<?php echo esc_url($full1);?>);
        left: 0;
        /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .slide-2 {
        background-image: url(<?php echo esc_url($full2);?>);
        left: 100%;
        /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .slide-3 {
        background-image: url(<?php echo esc_url($full3);?>);
        left: 200%;
        /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .slide-4 {
        background: #b1a494;
        left: 300%;
    }
    .slider {
        display: flex;
        justify-content: flex-start;
    }
    .slider-content {
        width: 635px;
        padding-left: 100px;
        color: black;
    }
    /* Slider Inner Slide Effect */
.slider h2 {
  color: black;
  font-weight: 900;
  text-transform: capitalize;
  font-size: 60px;
  font-weight: 300;
  line-height: 1.2;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
  margin-top: 0;
  letter-spacing: 2px;
}
 
.slider h4 {
  font-size: 22px;
  font-family: &quot;Oswald&quot;;
  color: black;
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.2;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
}
 
.slider &gt; img {
  position: absolute;
  right: 10%;
  bottom: 0;
  height: 100%;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
}
 
.slide-1 &gt; img {
  right: 0;
}
 
.buy-now-btn {
  background-color: #ea2e49;
  width: 220px;
  height: 50px;
  border-radius: 30px;
  border: none;
  font-family: Montserrat;
  font-size: 20px;
  font-weight: 100;
  color: #fff;
  text-align: left;
  padding-left: 35px;
  position: relative;
  cursor: pointer;
  transition: all .2s;
}
 
.buy-now-btn:hover {
  box-shadow: 0px 0px 60px -17px rgba(51,51,51,1);
}
 
.buy-now-btn:after {
  content: "Let's look";
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
  position: absolute;
  right: 35px;
  top: 18px;
}
 
.slider .buy-now-btn:focus,
.navigation .login-btn:focus {
  outline: none;
}
/* Animations */
.slider h2 {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1s; /* Safari */
  transition-delay: 1s;
}
.slider h4 {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1.4s; /* Safari */
  transition-delay: 1.4s;
}
.slider &gt; img {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1.2s; /* Safari */
  transition-delay: 1.2s;
}
/* Number Pagination */
.number-pagination {
  position: absolute;
  bottom: 30px;
  right: 100px;
  font-family: &quot;Oswald&quot;;
  font-weight: bold;
}
 
.number-pagination span {
  font-size: 30px;
  color: #ea2e49;
  letter-spacing: 4px;
}
 
.number-pagination span:after {
  content: &quot;/4&quot;;
  font-size: 16px;
  color: #fff;
}
/* Slider Pagger */
.slider-pagination {
  position: absolute;
  bottom: 30px;
  width: 575px;
  left: 100px;
  z-index: 1000;
  display: flex;
  align-items: center;
}
.slider-pagination label {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  display: inline-block;
  background: #fff;
  margin: 0 10px;
  cursor: pointer;
}
/* Slider Pagger Event */
.slide-radio1:checked ~ .slider-pagination .page1,
.slide-radio2:checked ~ .slider-pagination .page2,
.slide-radio3:checked ~ .slider-pagination .page3,
.slide-radio4:checked ~ .slider-pagination .page4 {
  width: 14px;
  height: 14px;
  border: 2px solid #ea2e49;
  background: transparent;
}
 
/* Slider Slide Effect */
.slide-radio1:checked ~ .slider {
  -webkit-transform: translateX(0%);
  transform: translateX(0%);
}
.slide-radio2:checked ~ .slider {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
.slide-radio3:checked ~ .slider {
  -webkit-transform: translateX(-200%);
  transform: translateX(-200%);
}
.slide-radio4:checked ~ .slider {
  -webkit-transform: translateX(-300%);
  transform: translateX(-300%);
}
 
.slide-radio1:checked ~ .slide-1 h2,
.slide-radio2:checked ~ .slide-2 h2,
.slide-radio3:checked ~ .slide-3 h2,
.slide-radio4:checked ~ .slide-4 h2,
.slide-radio1:checked ~ .slide-1 h4,
.slide-radio2:checked ~ .slide-2 h4,
.slide-radio3:checked ~ .slide-3 h4,
.slide-radio4:checked ~ .slide-4 h4,
.slide-radio1:checked ~ .slide-1 &gt; img,
.slide-radio2:checked ~ .slide-2 &gt; img,
.slide-radio3:checked ~ .slide-3 &gt; img,
.slide-radio4:checked ~ .slide-4 &gt; img {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  opacity: 1
}
@media only screen and (max-width: 768px) {
  .slider h2 {
    font-size: 20px;
  }
  .slider h4 {
    font-size: 16px;
  }
 
  .slider-content {
    padding: 0 2%
  }
 
  .navigation {
    padding: 0 2%;
  }
 
  .navigation-left {
    display: none;
  }
 
  .number-pagination {
    right: 2%;
  }
  .slider-pagination {
    left: 2%;
  }
 
  .slider .buy-now-btn {
    padding: 0 15px;
    width: 175px;
    height: 42px;
  }
 
  .slider .buy-now-btn:after {
    top: 15px;
  }
 
  .slider &gt; img {
    right: 2%;
  }
 
  .slide-1 &gt; img {
    right: -110px;
  }
}
    </style>
  <?php wp_head(); ?>
  <div class="navigation">
     <header>
            <h1 align="center" style ="font-family: chalkduster;"><?php bloginfo( 'name' ); ?></h1>
        </header>
  </div>
<body <?php body_class(); ?> onload="checkCookie()">
    <!-- Slider Wrapper -->
<div class="css-slider-wrapper">
  <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
  <input type="radio" name="slider" class="slide-radio2" id="slider_2">
  <input type="radio" name="slider" class="slide-radio3" id="slider_3">
 
  <!-- Slider Pagination -->
  <div class="slider-pagination">
    <label for="slider_1" class="page1"></label>
    <label for="slider_2" class="page2"></label>
    <label for="slider_3" class="page3"></label>
  </div>
 
  <!-- Slider #1 -->
  <div class="slider slide-1">
    <div class="slider-content">
      <a href= "food">
                <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                  <strong style="text-align: center;">Food</strong><br>
                    recipe, tips and etc.
                  </div>
                </a>
    </div>
  </div>
 
  <!-- Slider #2 -->
  <div class="slider slide-2">
    <div class="slider-content">
      <a href= "diary">
                    <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                      <strong style="text-align: center;">Diary</strong><br>
						lifestyle, technology and my experience.
                    </div>
                    </a>
        </div>
  </div>
 
  <!-- Slider #3 -->
  <div class="slider slide-3">
    <div class="slider-content">
      <a href= "portfolio">
                        <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                          <strong style="text-align: center;">Portfolio</strong><br>
							my full details of me.
                          </div>
                        </a>
    </div>
  </div>
</div>
<script type="text/javascript">
 	var TIMEOUT = 2000;
 
	setInterval(handleNext, TIMEOUT);
 
function handleNext() {
 
  var $radios1 = $('input[class*=&quot;slide-radio1&quot;]');
  var $radios2 = $('input[class*=&quot;slide-radio2&quot;]');
  var $radios3 = $('input[class*=&quot;slide-radio3&quot;]');

  var $activeRadio = $('input[class*=&quot;slide-radio&quot;]:checked');
 
  var currentIndex = $activeRadio.index();
  var radiosLength = $radios.length;
 
  $radios1.attr('checked', false);
  $radios2.attr('checked', false);
  $radios3.attr('checked', false);
 
  if (currentIndex &gt;= radiosLength - 1) {
 
    $radios1.attr('checked', true);
    $radios2.attr('checked', false);
    $radios3.attr('checked', false);
 
  } else {
  	if (currentIndex == radiosLength - 2) {
  		$radios1.attr('checked', false);
    	$radios2.attr('checked', true);
    	$radios3.attr('checked', false);
  	} else {
  		$radios1.attr('checked', false);
    	$radios2.attr('checked', false);
        $radios3.attr('checked', true);
  	}
  }
 
}
</script>
<?php get_footer();?>