<?php
require_once('loader.php');
//$router = Router :: getIstance();
$router = new Router();
$arr=explode('/',$_SERVER['REQUEST_URI']);
vd($arr);
$controller= $router->getConrtoller($arr[1]);
  if(!is_null($controller))
  {
    $method = isset($arr[2])?$arr[2]:'process';
    $args = [];
    for($i=3;$i<count($arr);$i++)
    {
      $args[]= $arr[$i];
    }
    
    if(method_exists($controller, $method))
    {
      call_user_func([$controller,$method], $args);  
    }
    else
    {
      require_once('404.php');
    }
  }
else
{
  require_once('404.php');
}