<?php


global $pagelinks;
$name;
$u = strstr($_SERVER['REQUEST_URI'],'?',true);
if($u == '')$u = $_SERVER['REQUEST_URI'];
foreach($pagelinks as $links){
  if(strpos($links['url'],$u)){
    $name = $links;
  }
}



?>


<div class="page-tit">
  <h1><?php echo $name['name'];?><span><?php echo $name['en'];?></span></h1>
</div>
