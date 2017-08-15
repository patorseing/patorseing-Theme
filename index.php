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
  <?php wp_head(); ?>
  <div class="topnav">
  		<h1><?php bloginfo( 'name' ); ?></h1>
        <div class="main-slide">
        <style>
        .mySlides {
          display:none;
          height:100%;
        }
        .w3-left, .w3-right, .w3-badge { cursor:pointer; padding-bottom:70px}
        .w3-badge {height:20px;width:20px;padding:0}
        </style>
          <div class="w3-display-container">
            <div class="w3-display-container mySlides">
              <?php
                $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/1.png" );
                  ?>
                    <img class="customer-featured-image" src="<?php echo esc_url($full);?>" style="width:100%; min-height:90%;"/>
                    <a href= "food">
                <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                  <strong style="text-align: center;">Food</strong><br>
                    recipe, tips and etc.
                  </div>
                </a>
                </div>
                <div class="w3-display-container mySlides">
                  <?php
                    $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/2.png" );
                      ?>
                        <img class="customer-featured-image" src="<?php echo esc_url($full);?>" style="width:100%; min-height:90%;"/>
                        <a href= "diary">
                    <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                      <strong style="text-align: center;">Diary</strong><br>
						lifestyle, technology and my experience.
                    </div>
                    </a>
                    </div>
                    <div class="w3-display-container mySlides">
                      <?php
                        $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/slider/8.png" );
                          ?>
                            <img class="customer-featured-image" src="<?php echo esc_url($full);?>" style="width:100%; min-height:90%;"/>
                            <a href= "portfolio">
                        <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
                          <strong style="text-align: center;">Portfolio</strong><br>
							my full details of me.
                          </div>
                        </a>
                        </div>
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)" ><h2 style="font-size:50px;">&#10094;</h2></div>
      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)" ><h2 style="font-size:50px;">&#10095;</h2></div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
              </div>
            </div>
            <script>
var myIndex = 0;
	var slideIndex;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
	for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-white", "");
      }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
	slideIndex = myIndex;
    x[myIndex-1].style.display = "block";
	dots[myIndex-1].className += " w3-white";
    setTimeout(carousel, 8000); // Change image every 2 seconds
}

      function plusDivs(n) {
      showDivs(slideIndex += n);
      }

      function currentDiv(n) {
        myIndex = n;
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
      }
</script>
</div>
  <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
</head>
<body <?php body_class(); ?> onload="checkCookie()">
<?php get_footer();?>
