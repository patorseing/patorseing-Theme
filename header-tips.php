<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="Keywords">
  <meta name="author" content="Name">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="jquery.multilevelpushmenu.css">
  <link rel="stylesheet" href="mlpm.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.js"></script>
  <style>
	body {
    	font-family: "Lato", sans-serif;
	}

	.sidenav {
    	height: 100%;
    	width: 0;
    	position: fixed;
    	z-index: 1;
    	top: 0;
    	left: 0;
    	background-color: #111;
    	overflow-x: hidden;
    	transition: 0.5s;
    	padding-top: 60px;
	}

	.sidenav a {
    	padding: 8px 8px 8px 32px;
    	text-decoration: none;
    	font-size: 25px;
    	color: #818181;
    	display: block;
    	transition: 0.3s;
	}

	.sidenav a:hover, .offcanvas a:focus{
    	color: #f1f1f1;
	}

	.sidenav .closebtn {
    	position: absolute;
    	top: 0;
    	right: 25px;
    	font-size: 36px;
    	margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
  		.sidenav {padding-top: 15px;}
  		.sidenav a {font-size: 18px;}
	}
	</style>
  <?php wp_head(); ?>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	color: black;
}

input[type=text]:focus {
    width: 85%;
}
</style>
<h3 style="margin-left: 26px; font-family: Chalkduster; color: white;">Pat Or Seing Style</h3>
<?php
  $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/icon/Guacamoleicon_30330.png" );
    ?>
 <img src="<?php echo esc_url($full);?>" style="width: 100px; height: 100px;margin-left: 60px"><br>
 <h3 style="margin-left: 66.5px; font-family: Chalkduster; color: white;">Food</h3>
 <form class="glyphicon glyphicon-search" style="margin-left:5px; color: white;" method="get" action="https://www.patorseingstyle.me/search/">
 <input type="text" name="search" placeholder="Search..">
 </form>
  <a href="http://www.patorseingstyle.me">Home</a>
  <a href="https://www.patorseingstyle.me/food/">All</a>
  <a href="https://www.patorseingstyle.me/recipes/">Recipes</a>
  <a href="https://www.patorseingstyle.me/tips/"><strong>Tips</strong></a>
  <a>Tags</a>
  <ul>
    <?php
        query_posts('category_name= tips');
        if (have_posts()) : while (have_posts()) : the_post();
           if( get_the_tag_list() ){
              echo get_the_tag_list('<li>','</li><li>','</li>');
           }
        endwhile; endif;
        wp_reset_query();
    ?>
  </ul>
  <br>
  <a href="https://www.patorseingstyle.me/diary/">Diary</a>
  <a href="https://www.patorseingstyle.me/about_me/">About Me</a>
</div>
<link rel="stylesheet" href="style.css">
            <div class="topnav" style="position: fixed;">
		<!--<h2><span onclick="goBack()" style="cursor: pointer;">&#10094;</span>Pat Or Seing Style</h2>-->
		<table style="width:100%">
			<tr>
    			<th style="padding-left: 1%; cursor: pointer;"><h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></h2></th>
    			<th width="99%"><h1 align="center"><?php bloginfo( 'name' ); ?></h1></th>
  			</tr>
  			<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
		</table>
	</div>
    <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
</head>
<body <?php body_class(); ?>>
