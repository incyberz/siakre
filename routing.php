<?php
$page_tujuan = "pages/$parameter.php";
if(!isset($parameter)) die('Routing memerlukan parameter.');

switch($parameter){
  case '' : 
  case 'home' : include 'pages/dashboard.php'; break;
  default:
    if(file_exists($page_tujuan)){
      include $page_tujuan;
    }else{
      include 'na.php';
    }
  ;
}
