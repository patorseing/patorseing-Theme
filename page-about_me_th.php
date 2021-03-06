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
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="jquery.multilevelpushmenu.css">
        <link rel="stylesheet" href="mlpm.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.js"></script>
        <style>
body {
    font-family: "Lato", sans-serif;
    background-image: url('<?php echo get_theme_mod( 'header_image' , 			   get_template_directory_uri().'/images/about/bangkok.JPG' ); ?>');
background-size: cover;
height: 100%;
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
<?php
  $full = get_theme_mod( 'banner'.$a , get_template_directory_uri() . "/images/portfolio/myphoto.png" );
    ?>
<img src="<?php echo esc_url($full);?>" style="width: 100px; height: 100px;margin-left: 60px; border-radius:50px;"><br>
<h3 style="margin-left: 53px; font-family: Chalkduster; color: white;">About Me</h3>
 <a href="http://www.patorseingstyle.me">Home</a>
 <a href="food">Food</a>
 <a href="diary">Diary</a>
 <a href="portfolio">Portfolio</a>
</div>
<link rel="stylesheet" href="style.css">
            <div class="topnav" style="position: fixed;">
		<!--<h2><span onclick="goBack()" style="cursor: pointer;">&#10094;</span>Pat Or Seing Style</h2>-->
		<table style="width:100%">
			<tr>
    			<th style="padding-left: 1%; cursor: pointer;"><h2><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></h2></th>
    			<th width="98%"><h1 align="center"><?php bloginfo( 'name' ); ?></h1></th>
          <th width="2%"><h5><a href="about_me">EN</a></h5></th>
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
  <?php wp_head(); ?>
    <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
</head>
<body <?php body_class(); ?>>
  <table style="width:100%; margin-top: 12%; margin-bottom: 5%; margin-left: 3%; margin-right: 3%;">
    <tr>
        <br>
        <br>
      <td style="width:80%; background-color: rgba(100, 100, 100, 0.5);">
        <h2 style="margin-left: 10%; margin-right: 10%; font-family: Chalkduster; color: white;">About Me</h2><br>
        <!--Content-->
        <style>
          p{
            font-size:120%;
          }
        </style>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        สวัสดีค่ะ ถ้าคุณอยากอ่านเกี่ยวกับฉัน คุณเข้ามาถูกหน้าแล้ว ฉันชื่อภัทร (Pat) หรือเรียกว่า เซียง (Seing) ก็ได้ เป็นผู้สร้างเว็บนี้เพื่อเผยแพร่เกี่ยวกับอาหาร เทคโนโลยี และ ประสบการณ์ต่าง ๆ ก่อนอื่นเรามาเริ่มจากชื่อภาษาจีนของฉันก่อน เซียง มาจากภาษาจีนที่อากงตั้งให้ โดยที่ชื่อจริงในภาษาจีนของฉันคือ 黄智商 (Huáng Zhìshāng = อึ้ง ตี่ เซียง ในภาษาจีนแต้จิ๋ว) ซึ่งแปลว่า IQ เท่าที่เล่ามาคุณอาจจะรู้ว่าฉันเป็นคนไทยเชื้อสายจีนและยังผูกผันกับอากงมาก ตอนเด็ก พ่อและแม่ของฉันมักจะยุ่งมากและมักจะฝากฉันไว้กับอากง อาม่า มันทำให้เกิดความผูกผันและความชอบเรื่องอาหารก็เกิด ณ ตอนนั้น เพราะพวกท่านทำอาหารอร่อยมากโดยเฉพาะอากงที่ท่านจะมีเมนูพิเศษของท่าน และ อาม่าเป็นคนที่ทำอาหารอะไรก็อร่อย รวมถึงแม่ที่ได้เรียนรู้การทำอาหารมาจากพวกท่าน ก็ทำอาหารเก่งเช่นกัน แม่เป็นคนแรกที่สอนฉันทำอาหาร สอนการปรุงอาหาร และสอนการแก้ไข เมื่อโตขึ้นฉันมักเรียนรู้การทำอาหารด้วยตัวเอง หาสูตรเมนูอาหารน่ากิน ๆ มาทำ หรือเรียนรู้ไปกับแม่ และว่าง ๆ ฉันชอบจะไปอยู่กับอาม่าเพื่อเรียนรู้การทำอาหาร แต่ทุกคนรอบตัวฉันมักจะบอกว่าการทำอาหารของฉันมันทำเป็นอาชีพไม่ได้ ฉันเลย ไม่ได้เรียนต่อทางนี้ อาหารเปลี่ยนแปลงฉันหลายเรื่อง เช่นเรื่องการคุมอารมณ์ การแก้ไขปัญหาเฉพาะหน้า และการคุมน้ำหนัก
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        การทำอาหารทำให้ฉันใจเย็นขึ้น ทุกอย่างต้องให้เวลา ฉันก็แค่ต้องทำมันให้ถูกขั้นตอนและ ค่อย ๆ เป็นค่อย ๆ ไปกับมัน
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        การทำอาหารนั้น บางครั้งบางคราวอาจเกิดความผิดพลาดขึ้นได้ เมื่อถึงเวลานั้นเราจะต้องตัดสินใจให้เร็ว ตัดสินใจให้ไว้ เพื่อบุคคลที่กำลังรอทานอาหารของเราอยู่
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        การทำอาหารกับการคุมน้ำหนักนั้น โดยส่วนตัวฉันเป็นคนอ้วนง่ายและอ้วนมาตั้งแต่เด็กแล้ว เพื่อโตขึ้นมันมีโอกาสป่วยได้ง่าย การทำอาหารจึงเป็นปัจจัยหนึ่งที่ทำให้ฉันคุมน้ำหนักได้และยังสุขภาพดีขึ้นด้วย
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        บุคคลที่ฉันอยากจะขอบคุณคือ อากง อาม่า และแม่ ที่สอนให้ฉันทำอาหารได้ ทำอาหารเป็น รวมถึง ป๊า น้องชาย และเพื่อน ที่คอยชิมอาหาร และทำให้ฉันมีความสุขทุกครั้งที่ทำอาหารคือ การดูคนทานอาหารที่เราทำแล้วมีความสุขกับมัน
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        อีกแรงบรรดาใจหนึ่งในการคิดสร้างสรรค์เกี่ยวกับการทำอาหารคือ รายการ MasterChef Australia ฉันพึ่งดูตอนปี 2017 โดยมี Matt Sinclair เป็นผู้เข้าแข่งขันที่ชื่นขอบและเกิดอยากทำอาหารอีครั้ง
        </p>
        <br>
        <p style="color: white;text-indent: 2.5em; text-align: justify; text-justify: inter-word; margin-left: 10%; margin-right: 10%;">
        ป.ล. การทำอาหารเป็นงานอดิเรกที่ฉันอยากจะนำมารวมกับ อาชีพที่ฉันรัก คือการเป็นนักพัฒนา การเขียนโค้ด และการดูแล้วด้านความปลอดภัย เว็บนี้เลยเกิดขึ้นและเป็นทุกอย่างที่ฉันรักมารวมกัน ฉันจะพัฒนาต่อไปในทุก ๆ ด้าน ขอบคุณ
        </p>
        <br>
        <h2 style="margin-left: 10%; margin-right: 10%; font-family: Chalkduster; color: white;">Thank you and Enjoy</h2>
        <br>
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
        <a target="_blank" href="https://www.facebook.com/napatchol.thaipanich" class="fa fa-facebook" style="margin-left: 10%; margin-bottom: 5%;"></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCaTBr-FOe6pggqCjy47zfcA/featured" class="fa fa-youtube"></a>
        <a target="_blank" href="http://www.instagram.com/patorseing" class="fa fa-instagram"></a>
		<br>
      </td>
      <td></td>
    </tr>
  </table>
<?php get_footer();?>
