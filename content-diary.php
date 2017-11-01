<!-- images <a href="#1"><img src="" alt="" width="300" height="225" class="alignnone size-medium wp-image-135" /></a>

<div class="lightbox-target" id="1">
   <img src=""/>
   <a class="lightbox-close" href="#"></a>
</div>-->
<!-- video <div style="height:0;padding-bottom:56.25%;margin-top: 2.5%;">
            <iframe src="" width="640" height="360" frameborder="0" style="width:75%;height: 75%;left:0" allowfullscreen>
          </iframe>
        </div>
</div>-->
<?php get_header('diary'); ?>
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet'>
<style>
  table{
    width: 100%;
  }
  td{
    width: 50%;
    margin-right: 5%;
  }
  body{
    background: black;
  }
  .the_content{
    font-family: 'Coming Soon';
    font-size: 110%;
    line-height: 250%;
    margin-top: 5%;
    margin-bottom:13%;
    padding: 5%;
    color: white;
    border: 5px solid white;
  }
  .the_content img{
    display: block;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    padding: 1% 1% 5% 1%;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }

   .the_content iframe{
     display: block;
     margin: 0 auto;
     width: 75%;
     height: 100%;
     padding: 1% ;
     background-color: white;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }

   /* Styles the lightbox, removes it from sight and adds the fade-in transition */

   .lightbox-target {
   background: rgba(0,0,0,.7);
   position: fixed;
   width: 100%;
   height: 100%;
   opacity: 0;
   left: 0;
   -webkit-transition: opacity .5s ease-in-out;
   -moz-transition: opacity .5s ease-in-out;
   -o-transition: opacity .5s ease-in-out;
   transition: opacity .5s ease-in-out;
   overflow: hidden;
   }

   /* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

   .lightbox-target img {
   margin: auto;
   position: absolute;
   top: 10%;
   left: 20%;
   width: 65%;
   height: auto;
   border: 3px solid white;
   box-shadow: 0px 0px 8px rgba(0,0,0,.3);
   box-sizing: border-box;
   -webkit-transition: .5s ease-in-out;
   -moz-transition: .5s ease-in-out;
   -o-transition: .5s ease-in-out;
   transition: .5s ease-in-out;
   }

   /* Styles the close link, adds the slide down transition */

   a.lightbox-close {
   display: block;
   width:50px;
   height:50px;
   box-sizing: border-box;
   background: white;
   color: black;
   text-decoration: none;
   position: absolute;
   top: -80px;
   right: 0;
   -webkit-transition: .5s ease-in-out;
   -moz-transition: .5s ease-in-out;
   -o-transition: .5s ease-in-out;
   transition: .5s ease-in-out;
   }

   /* Provides part of the "X" to eliminate an image from the close link */

   a.lightbox-close:before {
   content: "";
   display: block;
   height: 30px;
   width: 1px;
   background: black;
   position: absolute;
   left: 26px;
   top:10px;
   -webkit-transform:rotate(45deg);
   -moz-transform:rotate(45deg);
   -o-transform:rotate(45deg);
   transform:rotate(45deg);
   }

   /* Provides part of the "X" to eliminate an image from the close link */

   a.lightbox-close:after {
   content: "";
   display: block;
   height: 30px;
   width: 1px;
   background: black;
   position: absolute;
   left: 26px;
   top:10px;
   -webkit-transform:rotate(-45deg);
   -moz-transform:rotate(-45deg);
   -o-transform:rotate(-45deg);
   transform:rotate(-45deg);
   }

   /* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

   .lightbox-target:target {
   opacity: 1;
   top: 0;
   bottom: 0;
   }

   .lightbox-target:target img {
   max-height: 100%;
   max-width: 100%;
   }

   .lightbox-target:target a.lightbox-close {
   top: 0px;
   }
</style>
<div class="the_content" >
  <h2 style="margin-top:5%; margin-bottom:1%; margin-left:5%; font-family: Chalkduster; color:white;"><?php echo get_the_title();?></h2>
  <div class="patorseing-box-name" style="margin-left:5%; font-family: 'Acme'; font-size:125%; color:white; margin-bottom:2.5%;">
    <?php
      echo "Date : ".get_the_date("j F, Y");
      echo " | Post by <a href= 'https://www.patorseingstyle.me/author/patorseing/'>patorseing</a> | category: <a href='https://www.patorseingstyle.me/diary/'> diary</a>";
    ?>
  </div>
<?php if (have_posts()) : while (have_posts()) : the_post();
$patorseing_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
if($patorseing_feature_img_url == "") {
} else {
  //echo "<img src=".esc_url($patorseing_feature_img_url).">";
?>
  <a href="#abc"><img src="<?php echo esc_url($patorseing_feature_img_url); ?>" alt="" width="300" height="225" class="alignnone size-medium wp-image-135" /></a>

  <div class="lightbox-target" id="abc">
    <img src="<?php echo esc_url($patorseing_feature_img_url); ?>"/>
    <a class="lightbox-close" href="#"></a>
  </div>
<?php
}
?>
<div>
<?php
   the_content();
?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer();?>
