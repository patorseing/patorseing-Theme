<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="Keywords">
  <meta name="author" content="Name">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <div class="topnav">
  		<h1><?php bloginfo( 'name' ); ?></h1>
      <div class="topnav" style="position: fixed;">
		<!--<h2><span onclick="goBack()" style="cursor: pointer;">&#10094;</span>Pat Or Seing Style</h2>-->
		<table style="width:100%">
			<tr>
    			<th style="padding-left: 1%; cursor: pointer;" onclick="goBack()"><h2>&#10094;</h2></th>
    			<th width="99%"><h1 align="center"><?php bloginfo( 'name' ); ?></h1></th>
  			</tr>
		</table>
	</div>
    </div>
    <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
</head>
<body <?php body_class(); ?>>
  <script>
    function goBack() {
	     window.location.href='http://www.patorseingstyle.me';
     }
     </script>
  <style>
	body{
    	background-image: url('<?php echo get_theme_mod( 'header_image' , get_template_directory_uri().'/images/slider/8.png' ); ?>');
		/* Full height */
    	height: 100%;

    	/* Center and scale the image nicely */
    	/*background-repeat: no-repeat;*/
    	background-size: cover;
	}
	.box{
		border-style: dotted dashed solid double;
		border-color: sienna;
		border-radius: 5px;
		border-width: 10px;
	}

	center {
		color: white;
		padding: 25%;
	}
</style>
<div style="margin-top: 9.5%;">
  <h2 style="margin-left: 10%; margin-top: 9.5%; font-family: Chalkduster; color:black;">Portfolio</h2>
  <div class="w3-row-padding" style="margin-top: 5%;">
    <div class="w3-third w3-container w3-margin-bottom box" style="background-color:#F16745; cursor:pointer;" data-js="open">
      <div class="w3-container content">
        <center><h3>Description</h3></center>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom box" style="background-color:#FFC65D; cursor:pointer;" data-js="open1">
      <div class="w3-container content">
        <center><h3>Passion</h3></center>
      </div>
    </div>
    <div class="w3-third w3-container box" style="margin-bottom: 2.5%; background-color: #7BC8A4; cursor:pointer;" data-js="open2">
      <div class="w3-container content">
        <center><h3>Education</h3></center>
      </div>
    </div>
  </div>

  <div class="w3-row-padding" style="padding-bottom: 11%; margin-top: 2%;">
    <div class="w3-third w3-container w3-margin-bottom box" style="background-color: #4CC3D8; cursor:pointer;" data-js="open3">
      <div class="w3-container content">
        <center><h3>Skill</h3></center>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom box" style="background-color:#93648D; cursor:pointer;" data-js="open4">
      <div class="w3-container content">
        <center><h3>Experience</h3></center>
      </div>
    </div>
    <div class="w3-third w3-container box" style="background-color: #404040; cursor:pointer;" data-js="open5">
      <div class="w3-container content">
      	<center><h3>Contact</h3></center>
      </div>
    </div>
  </div>
 </div>

  <div class="popup">
	<h2 class = "ontop">Description</h2>
	<img src="<?php echo get_theme_mod( 'header_image' , get_template_directory_uri().'/images/portfolio/myphoto.png' ); ?>" style="width: 33%; height: 33%; margin-right: 10%" align="left">
	<h3 class="ontop">Napatchol Thaipanich (Pat or Seing)</h3>
	<p class="ontop"><strong>Name:</strong> Napatchol Thaipanich<br>
	<strong>Nickname:</strong> Pat(ภัทร) or Seing(เซียง(xiang)). <br>
	<strong>Birth Date:</strong> 6 July 1997<br>
	<strong>Address:</strong> 115/29 Seranee Park village Soi. Nawong Pracha Pattana 21<br> Si Kan, Don Mueang, Bangkok 10210<br><strong>Phone:</strong> 0819288140 <br> <strong>Email:</strong> Napatcholthaipanich@gmail.com, patorseing@gmail.com<br> <strong>Website:</strong> <a href="http://www.patorseingstyle.me">www.patorseingstyle.me</a><br> <strong>Hobby:</strong> reading, coding, cooking</p>
	<button name="close" style="color: aliceblue">Close</button>
</div>

<div class="popup2">
	<h2 class = "ontop">Education</h2>
	<table width="100%" style="margin-bottom: 10%">
	<tr>
		<td align="left">
			<strong>Kasetsart University Laboratory School
in Math &amp; Sci.</strong> with GPA 2.75
		</td>
		<td>
			05/03 – 02/15
		</td>
	</tr>
	<tr>
		<td align="left">
			<strong>The Faculty of Information and Communication Technology, Mahidol University</strong> (Bachelor’s degree)
		</td>
		<td>
			08/15 - Current
		</td>
	</tr>
	</table>
	<button name="close" style="color: aliceblue">Close</button>
</div>

<div class="popup1">
	<h2 class = "ontop">Passion</h2>
	<p class="ontop"> When I was young, I liked using technology, and I was happy to learn something new every time. I like sharing the new thing to people around me. Also, my experience that I like to share. Learn, live and eat are my life</p>
	<button name="close" style="color: aliceblue">Close</button>
</div>

<div class="popup3">
	<h2 class = "ontop">Skill</h2>
  <style>
* {box-sizing: border-box}

.container {
width: 100%;
background-color: #ddd;
}

.skills {
text-align: right;
padding-right: 20px;
line-height: 10px;
color: white;
}

.html {width: 90%; background-color: #4CAF50;}
.css {width: 80%; background-color: #2196F3;}
.js {width: 80%; background-color: #2196F3;}
.php {width: 75%; background-color: #f44336;}
.c {width: 75%; background-color: #f44336;}
.SQL {width: 70%; background-color: #808080;}
.R {width: 70%; background-color: #808080;}
.java {width: 65%; background-color: #0014CE;}
.swift {width: 50%; background-color: #980DF1;}
.XML{width: 50%; background-color: #980DF1;}
</style>
<table align="center" width="100%">
  <style>
    td{
      text-align: left;
    }
  </style>
  <tr>
    <th>
      Programming language
    </th>
  </tr>
  <tr>
    <td>
      HTML
      <div class="container">
          <div class="skills html">90%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      CSS
      <div class="container">
          <div class="skills css">80%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      JavaScript
      <div class="container">
          <div class="skills js">80%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      PHP
      <div class="container">
          <div class="skills php">75%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      C
      <div class="container">
          <div class="skills c">75%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      SQL
      <div class="container">
          <div class="skills SQL">70%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      R
      <div class="container">
          <div class="skills R">70%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      java
      <div class="container">
          <div class="skills java">65%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      Swift
      <div class="container">
         <div class="skills swift">50%</div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      XML
      <div class="container">
          <div class="skills XML">50%</div>
      </div>
    </td>
  </tr>
</table>
<button name="close" style="color: aliceblue; margin-top: 10px;">Close</button>
</div>
<div class="popup4">
	<h2 class = "ontop">Experience</h2>
	<p class="ontop">I just do project in my classroom and creat projects by myself such as website application, android application, ios application and security.<br><br><br>
	<strong>Keep follow my code and my work:</strong> <a href="https://github.com/patorseing?tab=repositories" target="_blank">GitHub</a> or <a href="http://www.patorseingstyle.me">My website</a>
	</p>
	<button name="close" style="color: aliceblue">Close</button>
</div>

<div class="popup5">
	<h2 class = "ontop">Contact</h2>
	<p class="ontop"><strong>Email(Only for Business):</strong> patorseing@gmail.com <br>
	<strong>Social network:</strong> <br>
  <!-- Add font awesome icons -->
<a target="_blank" href="https://www.facebook.com/napatchol.thaipanich" class="fa fa-facebook"></a>
<a target="_blank" href="http://www.twitter.com/SeingOrPat" class="fa fa-twitter"></a>
<a target="_blank" href="https://www.linkedin.com/in/napatchol-thaipanich/" class="fa fa-linkedin"></a>
<a target="_blank" href="https://www.youtube.com/channel/UCaTBr-FOe6pggqCjy47zfcA/featured" class="fa fa-youtube"></a>
<a target="_blank" href="http://www.instagram.com/patorseing" class="fa fa-instagram"></a>
	</p>
	<button name="close" style="color: aliceblue">Close</button>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
    padding: 20px;
    font-size: 30px;
    width: 75px;
	  margin: 0px;
    text-align: center;
    text-decoration: none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>

<style>
  table{
    color: white;
  }
	a:hover{
		color: orange;
	}
	h3{
		font-family: Chalkduster;
	}
	h2.ontop{
			text-align: center;
			color: white;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	}
	h3.ontop{
			text-align: left;
			color: white;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	}
	p.ontop {
			font-size: 115%;
			color: white;
			margin: 30px auto;
			text-align: left;
			font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
	}
	button {
		background: #89BDD3;
		border: 0;
		border-radius: 4px;
		padding: 7px 15px;
		font-size: 16px;
		color: #FFFFFF;
		cursor: pointer;

		&:focus {
			outline: none;
		}

		&:hover {
			background: lighten(#89BDD3, 10%);
		}
	}
	.popup {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 8%;
	}

	.popup1 {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 10%;
	}

	.popup2 {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 10%;
	}

	.popup3 {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 10%;
	}

	.popup4 {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 10%;
	}

	.popup5 {
		background: rgba(100, 100, 100, 0.8);
		position: fixed;
		display: none;
		z-index: 5000;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		text-align: center;
		padding: 10% 10% 10% 10%;
	}
	 </style>
   <script>
		 function popupOpenClose(popup) {

	/* Add div inside popup for layout if one doesn't exist */
	if ($(".wrapper").length == 0){
		$(popup).wrapInner("<div class='wrapper'></div>");
	}

	/* Open popup */
	$(popup).show();

	/* Close popup if user clicks on background */
	$(popup).click(function(e) {
		if ( e.target == this ) {
			if ($(popup).is(':visible')) {
				$(popup).hide();
			}
		}
	});

	/* Close popup and remove errors if user clicks on cancel or close buttons */
	$(popup).find("button[name=close]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(popup).hide();
	});
}

$(document).ready(function () {
	$("[data-js=open]").on("click", function() {
		popupOpenClose($(".popup"));
	});
});
$(document).ready(function () {
	$("[data-js=open1]").on("click", function() {
		popupOpenClose($(".popup1"));
	});
});
		 $(document).ready(function () {
	$("[data-js=open2]").on("click", function() {
		popupOpenClose($(".popup2"));
	});
});
		 $(document).ready(function () {
	$("[data-js=open3]").on("click", function() {
		popupOpenClose($(".popup3"));
	});
});
		 $(document).ready(function () {
	$("[data-js=open4]").on("click", function() {
		popupOpenClose($(".popup4"));
	});
});
		 $(document).ready(function () {
	$("[data-js=open5]").on("click", function() {
		popupOpenClose($(".popup5"));
	});
});
	</script>
    <?php get_footer();?>
