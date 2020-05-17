<?php
global $pagelinks;
$pagelinks = array(
  array('name'=>'トップ',"url"=>home_url( '/' ),'en'=>'top'),
  array('name'=>'当院について',"url"=>home_url( '/about/' ),'en'=>'about'),
  array('name'=>'診療のご案内',"url"=>home_url( '/medical/' ),'en'=>'medical'),
  array('name'=>'お知らせ',"url"=>home_url( '/infomation/' ),'en'=>'infomation'),
  array('name'=>'アクセス',"url"=>home_url( '/#access' ),'en'=>'top'),
  array('name'=>'採用情報',"url"=>home_url( '/recruit/' ),'en'=>'recruit'),
);


if( function_exists('acf_add_options_page') ) {
  $parent = acf_add_options_page(array(
    'page_title'  => __('Theme General Settings'),
    'menu_title'  => __('option'),
    'redirect'    => false,
  ));
  $sub = array(
    array("key"=>"main-symptom","ja"=>"主な症状と病気の設定"),
    array("key"=>"rheumatism","ja"=>"リウマチの設定"),
    array("key"=>"makizume","ja"=>"巻き爪/陥入爪の設定"),
    array("key"=>"rihabiri","ja"=>"リハビリの設定"),
    array("key"=>"ziko","ja"=>"交通事故の設定"),
    array("key"=>"recruit","ja"=>"募集要項の設定"),
  );
  foreach ($sub as &$s) {
    acf_add_options_sub_page(array(
          'page_title'    => $s["ja"],
          'menu_title'    => $s["ja"],
          'menu_slug'     => 'theme-options-'.$s["key"],
          'capability'    => 'edit_posts',
          'parent_slug' => $parent['menu_slug'],
          'position'  => false,
        ));
  }
}


function my_admin_script() {
  global $hook_suffix;
  echo '<script>
    (function($) {
      var p = "'.$hook_suffix.'";
      if(p.indexOf("option_page") >= 0){
        $("#submitdiv").css("position","fixed");
      }
    }(jQuery));
    
  </script>';
}

add_action('admin_print_footer_scripts', 'my_admin_script');
