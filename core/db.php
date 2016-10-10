<?php
class DB{
  private $connection = null;
  private static $instance = null;
  public static function getInstance(){
      if(is_null(self::$instance)){
        self::$instance = new DB();
      }
    return self:: $instance;
  }
  private function __construct(){
    $this->connection =
      new PDO('mysql:dbname='.DBNAME.':host'.HOST.';',DBUSER,DBPASSWORD);
    vd($this->connection);
  }
  public function query($query){
    $result = $this->connection->query($query);
    if(!is_bool($result)){
      $result = $result->fetchAll(PDO::FETCH_ASSOC);
    }
    return $result;
  }
  public function getError(){
    return $this->connection->errorinfo();
  }
}