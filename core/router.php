<?php
class Router{
  public function getConrtoller ($controller_name){
    if (!preg_match_all ('/[A-Za-z]*/', $controller_name)){
      return null;
    }
    $file_path = 'classes/controllers/'.$controller_name.'.controller.php';
    vd ($file_path);
    if (!file_exists($file_path)){
      return null;
    }
    
    require_once ($file_path);
    $class_name = UCFirst ($controller_name).'Controller';
    vd ($class_name);
    if (!class_exists($class_name)){
      return null;
    }
    return new $class_name();
  }
}