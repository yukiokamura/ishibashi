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
// var_dump($tit);
if($tit['en'] == 'top'){
  $tit['en'] = '';
}else{
  $tit["en"] = $tit["en"].' | ';
}



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
  </head>
