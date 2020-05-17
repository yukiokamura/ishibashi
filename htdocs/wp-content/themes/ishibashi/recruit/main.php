<div class="recruit-main">
  <div class="recruit-main-inner">
    <h2 class="about-tit">募集要項</h2>
    <?php if( have_rows('recruit_options', 'option') ):
      while( have_rows('recruit_options', 'option') ): the_row();?>
      <div class="recruit-main-item">
        <?php $activeClass = get_sub_field('recruit_is') == 'boshu' ? '' : 'not_recruit'?>
        <div class="recruit-main-tit <?php echo $activeClass;?>">
          <?php the_sub_field('recruit_title');?>
        </div>
        <div class="recruit-main-type recruit-main-contents">
          <p>採用形態</p>
          <p><?php the_sub_field('recruit_type');?></p>
        </div>
        <div class="recruit-main-price recruit-main-contents">
          <p>給与</p>
          <p><?php the_sub_field('recruit_price');?></p>
        </div>
        <div class="recruit-main-time recruit-main-contents">
          <p>勤務時間</p>
          <p><?php the_sub_field('recruit_time');?></p>
        </div>
        <div class="recruit-main-holiday recruit-main-contents">
          <p>休日</p>
          <p><?php the_sub_field('recruit_holiday');?></p>
        </div>
        
      </div>
    <?php endwhile;
  else:?>
  <p class="recruit_none">現在募集はしておりません。</p>
<?php endif;?>
  </div>
</div>
