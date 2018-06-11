<?php

$app= __DIR__;

echo $app;

require_once 'routes.php';

$route= new Route();
$route->getController();

 ?>
