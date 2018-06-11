<?php


class Model{

private $user = "root";
private $password= "";
private $dbname= "todolist";
private $host= "localhost";
private $port= 3306;

public function connect(){
  try{
    $db= new PDO ("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
    echo "connection";
    return $db;
  }
  catch(PDOException $e) {
    echo "erreur";
  }
  echo "Je me connecte à ma base de données";


}

}
 ?>
