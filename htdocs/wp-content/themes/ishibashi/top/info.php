<div class="top-info">
  <div class="shadow"></div>
  <div class="shadow2"></div>
  <div class="top-info-tit">お知らせ</div>
  <div class="top-info-items">
    <?php
    $args = array(
      'posts_per_page'=>7,
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
      while ( $query->have_posts() ) :
        $query->the_post();
    ?>
    <div class="top-info-item">
      <div class="top-info-item-date">
        <?php echo the_time('y.m.d')?>
      </div>
      <div class="top-info-item-tit">
        <?php echo get_the_title()?>
      </div>
    </div>
  <?php endwhile;wp_reset_postdata();endif;?>
  </div>
</div>
