<?php

class Route {
  private function formatUrl(){
    //localhost:8888/tasks/
    if (isset($_SERVER["PATH_INFO"])){
      //localhost:8888/tasks/filter
      $url = $_SERVER["PATH_INFO"];
    }
    else {
      $url="/";
    }
    //echo
    $urlTrim= trim($url,"/");
    // ["tasks", "filter"]

    $urlTab=explode ("/", $url);
    echo $urlTab[1];
    return $urlTab;

  }

  public function getMethod () {
    return $_SERVER['REQUEST_METHOD'];
  }

  public function getController(){
 echo "methode getController de route ";
    //$this représente l'instance, ex: $route je peux donc appeler $route-->formatUrl()
    // grâce à $this --> formatUrl()
    // elle prend la valeur de ce que me renvoie la fonction. Dc elle prend la valeur $urlTab
    // comme pour afficher tasks je dois afficher $this -> formatUrl()[1]:

    $controller= $this->formatUrl() [1];
    echo "<br/> mon controller:".$controller;

    //comme $controller est égal à "tasks"
    //ce chemin va être égal à controllers/tasks.php
    $controllerPath = "controllers/".$controller. ".php";
    if(file_exists($controllerPath)){
            require_once $controllerPath;
        }
  }
}

 ?>
