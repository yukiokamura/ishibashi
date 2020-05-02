<div class="infomation-latest">
  <?php
  $args = array(
   'posts_per_page'=>5,
   "paged"=>1
 );
 $the_query = new WP_Query( $args );
 echo "<p class='infomation-latest-tit'>最新の記事</p>";
 if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) :
     $the_query->the_post();
  ?>
  <a class="infomation-latest-item" href="?pid=<?php the_ID();?>">
    <div class="infomation-latest-item-date"><?php the_time('Y.m.d');?></div>
    <div class="infomation-latest-item-tit"><?php the_title();?></div>
  </a>
  <?php
  wp_reset_postdata();
endwhile;
endif;?>
</div>
