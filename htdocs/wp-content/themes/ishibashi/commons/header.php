<header>
  <div class="header-contact">
    <div class="header-contact-tel">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.svg" alt="092-691-1031">
    </div>
    <div class="header-contact-reservation">
      <a href="https://www.489map.com/helios/A4457154/reserve" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/syoshin.svg" alt="初診ご予約はこちら">
      </a>
    </div>
  </div>
  <div class="header-logo">
    <a href="<?php echo home_url( '/' );?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="pc-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_yoko.png" class="sp-only">
    </a>
    <div class="header-department">
      <p>整形外科</p>
      <p>リハビリテーション科</p>
      <p>リウマチ科</p>
    </div>
  </div>
  <div class="header-menu">
    <div class="header-menu-inner">
      <?php
      global $pagelinks;
      foreach($pagelinks as $links):?>
      <a href="<?php echo $links['url']?>"><?php echo $links['name']?></a>
    <?php endforeach;?>
    </div>
  </div>
</header>
