<div class="infomation-contents">
  <?php
  $page = $_GET['pg'] ? $_GET['pg']  : 1;
  $pid = $_GET['pid'] ? $_GET['pid']  : false;
  $args = array(
   'posts_per_page'=>5,
   "paged"=>$page
 );
  if($pid){
    $args = array(
      "post__in"=>array($pid),
      'posts_per_page'=>1
    );
  }
   
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
      $the_query->the_post();
  ?>
  <a class="infomation-contents-item" href="?pid=<?php the_ID()?>">
    <div class="infomation-contents-item-inner">
      <div class="infomation-contents-item-date">
        <?php the_time('Y.m.d');?>
      </div>
      <div class="infomation-contents-item-tit">
        <?php the_title();?>
      </div>
      <div class="infomation-contents-item-des">
        <?php the_content(); ?>
      </div>
    </div>
  </a>
  <?php
  wp_reset_postdata();
endwhile;
endif;?>
<?php
if($pid == false):?>
<div class="infomation-page">
  <?php
  $num = $the_query->max_num_pages + 1;
  $prev = $page == 1 ? 1 : $page - 1;
  $next = $page == $num ? $num : $page + 1;
  if($page == 1):?>
  <a class="page-link current" href="?pg=<?php echo $prev?>">1</a>
  <a class="page-link" href="?pg=2">2</a>
  <a class="page-link" href="?pg=3">≫</a>
<?php elseif($next == $num):?>
  <a class="page-link" href="?pg=<?php echo $prev-1?>">≪</a>
  <a class="page-link" href="?pg=<?php echo $prev?>"><?php echo $prev?></a>
  <a class="page-link current" href=""><?php echo $page?></a>
<?php else:?>
  <a class="page-link" href="?pg=<?php echo $prev?>"><?php echo $prev?></a>
  <a class="page-link current"><?php echo $page?></a>
  <a class="page-link" href="?pg=<?php echo $next?>"><?php echo $next?></a>
<?php endif;?>
  
</div>
<?php endif;?>
</div>
