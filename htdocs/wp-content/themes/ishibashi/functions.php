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
  acf_add_options_page();
}
