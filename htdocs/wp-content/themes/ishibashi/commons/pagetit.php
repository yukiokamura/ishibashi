<?php


global $pagelinks;
$name;
foreach($pagelinks as $links){
  if(strpos($links['url'],$_SERVER["REQUEST_URI"])){
    $name = $links;
  }
}



?>


<div class="page-tit">
  <h1><?php echo $name['name'];?><span><?php echo $name['en'];?></span></h1>
</div>
