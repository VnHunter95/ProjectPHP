<?php
class Db
{
  protected static $connection;
  public function connect()
  {
    if(!isset(self::$connection))
    {
      $config= parse_ini_file("config.ini");
      self::$connection = new mysqli("localhost",$config["username"],$config["password"],$config["databasename"]);
    }
    if(self::$connection==false)
    {
      return fasle;
    }
    mysqli_set_charset(self::$connection,"utf8");
    return self::$connection;
  }

  public function query_execute($queryString)
  {
    $connection = $this->connect();
    $result=$connection->query($queryString);
    return $result;
  }
  public function query_execute_return_affected_rows($queryString)
  {
    $connection = $this->connect();
    $result=$connection->query($queryString);
    $effected = $connection->affected_rows;
    return $effected;
  }
  public function query_execute_return_id($queryString)
  {
    $connection = $this->connect();
    $result=$connection->query($queryString);
    if($result == false)
    {
      return false;
    }
    return $connection->insert_id;
  }
  public function select_to_array($queryString)
  {
    $rows=array();
    $result=$this->query_execute($queryString);
    if($result==false)
    {
      return false;
    }
    while($item = $result->fetch_assoc())
    {
      $rows[]=$item;
    }
    return $rows;
  }
}
?>
