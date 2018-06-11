<?php

require_once "models/model.php";// je recopie ça

class TaskModel extends Model { // ex: class SalonsModel extends Model

  public function getAll(){

    $db=parent::connect();// return $db // je recopie ça
    //$db va nous permettre de faire toutes nos requetes sur notre BDD.

    $sql= "select * from tasks";// from salons etc il faut changer dans chaque page
    $query= $db -> prepare ($sql);
    $query -> execute ();
    $tasklist= $query -> fetchAll();
    return $tasklist; //salonList
    }


  public function createOne () {
    $db=parent::connect();
    // $objetPDO= new PDO ('mysql:host=localhost;dbtodolist','root','');
    $pdoStat= $db->prepare('INSERT INTO tasks(name) VALUES(:name)');
    $name = $_POST['name'];
    echo 'this is name : '.$name;
    $pdoStat->bindValue(':name', $name, PDO::PARAM_STR);
    $insertIsOk = $pdoStat->execute();

    if ($insertIsOk){

      $message= 'Le contact est ajouté';
    }

    else{

      $message= 'Echec';
    }

  }
}


$delete= "DELETE FROM tasks WHERE name";

$update= "UPDATE FROM tasks WHERE name";
 ?>
