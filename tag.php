<?php get_header(); ?>
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<h2 style="margin-left:5%; margin-top:15%; margin-bottom:5%; font-family: Chalkduster; color:white;"><?php single_tag_title('Tag: '); $current_tag = single_tag_title("", false);?></h2>
	<?php
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
  else { $paged = 1; }
              $args = array(
                    'tag' => $current_tag,
										'posts_per_page'   => -1,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'paged'			  => $paged
                );
            $patorseing_post = new WP_Query( $args );

            while ( $patorseing_post->have_posts() ) {
            $patorseing_post->the_post();

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
              <div class="patorseing-hr" style="padding-bottom:20%;"><?php _e('Post By:','patorseing') ?>  <span class="patorseing-postby-color"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php echo get_the_author(); ?></a></span><?php if ( get_comments_number() > 0 ) : ?> <?php _e('Comments:','patorseing') ?> <span class="patorseing-postby-color"><?php echo get_comments_number(); ?></span><?php endif; ?> </div>
            </div>
						</div>
						</div>

        <?php } ?>
<?php get_footer();?>
