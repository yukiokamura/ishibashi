<footer>
  <div class="footer-wrap">
    <a class="pagetop" href="#">
      このページのトップへ
    </a>
    <div class="footer-links">
      <?php
      global $pagelinks;
      foreach($pagelinks as $links):?>
      <a href="<?php echo $links['url']?>"><?php echo $links['name']?></a>
    <?php endforeach;?>
    </div>
    <div class="footer-baseInfo">
      <div class="footer-baseInfo-item">
        <p>石橋整形外科病院<br/>
          813-0032　<a href="https://goo.gl/maps/Vuk3Dyp1QZU2" target="_blank">福岡市東区土井1-1-3</a><br>TEL 092-691-1031 / FAX 092-691-1032</p>
      </div>
      <div class="footer-baseInfo-item">
        <p>平日 8:30-12:00 / 14:00-17:30<br>土	8:30-12:00 <br>休診日	日曜日、祝日、年末年始</p>
      </div>
      <div class="footer-baseInfo-item">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pagetop.png"></a></div>
    </div>
  </div>
  <div class="footer-copyrights">
    <small>© ISIBASI ORTHOPEDICS HOSPITAL RIGHTS RESERVED.</small>
  </div>
</footer>
