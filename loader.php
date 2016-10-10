<?php
$files = glob("core/*.php");
vd($files);
foreach ($files as $key => $file){
  require_once ($file);
}
function vd ($str){
  echo "<pre>";
  var_dump($str);
  echo"</pre>";
}