<?php
class TestController extends Controller {
  
  public function process (){
    echo "<h1>Testing...</h1>";
  }
  public function result (){
    echo "<h1> All works... </h1>";
  }
  public function multi ($args){
    echo "<h1>";
    var_dump ($args);
    echo "</h1>";
  }
}