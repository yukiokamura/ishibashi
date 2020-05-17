<div class="medical-contents-item" id="1">
  <h3>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical/medi01.png">
    <p>主な症状と病気</p>
  </h3>
  <div class="medical-contents-item-contents">
    <?php if( have_rows('main_medical', 'option') ):
      while( have_rows('main_medical', 'option') ): the_row();?>
      <?php
      $item = get_sub_field('main_medical_group');
      ?>
      <p class="medical-contents-item-contents-tit">
        <?php echo $item['tit']?>
      </p>
      <p class="medical-contents-item-contents-main-des">
        <?php echo $item['des']?>
      </p>
      <p class="medical-contents-item-contents-des">
        <?php echo $item['name']?>
      </p>
    <?php endwhile;endif;?>
  </div>
</div>
