<?php
global $pagelinks;
$tit;
$u = strstr($_SERVER['REQUEST_URI'],'?',true);
if($u == '')$u = $_SERVER['REQUEST_URI'];
foreach($pagelinks as $links){
  if(strpos($links['url'],$u)){
    $tit = $links;
  }
}

if($tit['en'] == 'top'){
  $tit['en'] = '';
}else{
  $tit["en"] = $tit["en"].' | ';
}

if($u == '/'){
  $tit = $pagelinks[0];
  $tit['en'] = '';
}



$url =  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo strtoupper($tit['en']); bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/lib.js' defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="福岡市東区にある地域のかかりつけ医、石橋整形外科です。整形外科,リハビリテーション科,リウマチ科があります。" name="description"/>
    <meta property="og:url" content="<?php echo $url?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo strtoupper($tit['en']); bloginfo( 'name' );?>" />
    <meta property="og:description" content="福岡市東区にある地域のかかりつけ医、石橋整形外科です。腰痛、関節痛、リウマチ、巻き爪など、その他交通事故の治療もしています。" />
    <meta property="og:site_name" content="<?php echo bloginfo( 'name' ); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/MV.jpg" />
  </head>
