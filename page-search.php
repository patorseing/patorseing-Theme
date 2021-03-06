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
  <h3 style="margin-left: 26px; font-family: Chalkduster; color: white;">Pat Or Seing Style</h3>
  <?php
    $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/portfolio/myphoto.png" );
      ?>
  <img src="<?php echo esc_url($full);?>" style="width: 100px; height: 100px;margin-left: 60px; margin-bottom: 60px; border-radius:50px;"><br>
   <a href="http://www.patorseingstyle.me">Home</a>
   <a href="https://www.patorseingstyle.me/food/">Food</a>
   <a href="https://www.patorseingstyle.me/diary/">Diary</a>
   <a href="https://www.patorseingstyle.me/portfolio/">Portfolio</a>
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

<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<h2 style="margin-left:5%; margin-top:15%; font-family: Chalkduster; color:white;">Search</h2>

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

<form class="glyphicon glyphicon-search" style="margin-left:50px; margin-top:5%; color: white;" action="" method="get">
    <input type="text" name="search" placeholder="Search..">
</form>

<?php
  $search = $_GET["search"];
  $s = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $allsearch = &new WP_Query("s=$s&showposts=-1");
  $key = wp_specialchars($s, 1);
  $count = $allsearch->post_count;
?>

<h4 style="margin-left:5%; margin-top:5%; margin-bottom:5%; font-family: Chalkduster; color:white;"> search for: <?php echo $search; ?> <?php _e(' Total: ', 'basicmaths'); echo $count . ' '; wp_reset_query();?></h4><br>

<?php
while ( $allsearch->have_posts() ) {
$allsearch->the_post();

$patorseing_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>
<div class="w3-third" style="color: white;">
<div  align="center">
  <?php if($patorseing_feature_img_url == "") { ?>
  <a href="<?php the_permalink(); ?>" style="cursor:pointer;"><img src="<?php echo esc_url(get_template_directory_uri().'/images/default.png'); ?>" class="img-responsive" style="border-style: dotted dashed solid double; border-width: 10px; border-color:white;"></a>
  <?php } else { ?>
  <a href="<?php the_permalink(); ?>" style="cursor:pointer;"><img src="<?php echo esc_url($patorseing_feature_img_url); ?>" class="img-responsive" style="border-style: dotted dashed solid double; border-width: 10px; border-color:white;"></a>
  <?php } ?>
  <a href="<?php the_permalink(); ?>" style="cursor:pointer;">
    <div class="patorseing-post-box-hover">
      <div class="patorseing-post-box-hover-center">
        <div class="patorseing-post-box-hover-center1"><i class="patorseing-zoom-icon"></i></div>
      </div>
    </div>
  </a>
<div class="clearfix"></div>
<div class="patorseing-box-name" style="font-family: 'Acme'; font-size:125%;">
  <h6><?php echo get_the_date("j F, Y"); ?></h6>
  <div class="patorseing-title" > <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a> </div>
  <div class="patorseing-hr" style="padding-bottom:20%;"><?php _e('Post By:','patorseing') ?>  <span class="patorseing-postby-color"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php echo get_the_author(); ?></a></span></div>
</div>
</div>
</div>

<?php }?>

<?php get_footer();?>
