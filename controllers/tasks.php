<?php
echo "tu as bien chargé tasks.php<br/>";

require_once "models/tasks.php";

//on va instancier TaskModel

$tasks = new TaskModel();

global $route;
$method = $route->getMethod();

switch ($method) {

  case "GET":
    $tasks->getAll();
    break;

  case "POST":
    $tasks->createOne();
    break;
}

$taskListView= $tasks->getAll();





  require_once "views/tasks.php";
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h1>Insertions des tâches</h1>

  </body>
</html>
