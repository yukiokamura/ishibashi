
<!-- header -->
<?php get_template_part( 'commons/head' ); ?>


<!--body-->
<body>
  <?php get_template_part( 'commons/header' ); ?>
  <?php get_template_part( 'commons/scroll-header' ); ?>
  
  
  <!--top -->
  <div class="top-wrapper">
    <!--top MV -->
    <?php get_template_part( 'top/mv' ); ?>
    <!--top info -->
    <div class="top-wrapper-inner">
      <?php get_template_part( 'top/info' ); ?>
      <div class="top-wrapper-inner-wrap">
        <?php get_template_part( 'top/time' ); ?>
        <a href="https://www.489map.com/helios/A4457154/reserve" target="_blank" class="top-info-resepution">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/resepution.svg">
        </a>
        <div class="top-wrapper-banner">
          <a href="http://www.byoin-machi.net/area6/fukuoka/119384.html" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpg">
          </a>
        </div>
      </div>
    </div>
    
  </div>
  <!-- footer -->
  <?php get_template_part( 'commons/map' ); ?>
  <?php get_template_part( 'commons/footer' ); ?>
</body>
