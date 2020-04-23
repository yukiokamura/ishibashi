<div class="header-scroll">
  <div class="header-scroll-bg"></div>
  <div class="header-scroll-inner">
    <a href="<?php echo home_url( '/' );?>" class="header-scroll-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_yoko.png">
    </a>
    <div class="header-scroll-menu">
      <?php
      global $pagelinks;
      foreach($pagelinks as $links):?>
      <a href="<?php echo $links['url']?>"><?php echo $links['name']?></a>
    <?php endforeach;?>
    </div>
    <div class="header-scroll-menuBtn">
      <div class="header-scroll-menuBtn-open">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="header-scroll-menuBtn-close">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</div>
