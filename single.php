<?php
  $category = get_the_category();
  $firstCategory = $category[0]->cat_name;
  get_template_part( 'content', $firstCategory );
?>
