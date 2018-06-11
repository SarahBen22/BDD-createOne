 Hello world!

<?php

//Une classe peut avoir des variables et des functions.
// elles peuvent être public (accessible à tout autres classes) ou private (accessible à elle même & ses enfants)

echo "<h1>LOGS</h1>";

class vehicule {
  public $marque="";

  function rouler ( ) {
    echo "Je roule...<br>";
  }
}

class auto extends vehicule{
  function nombreDeRoue (){
    echo "J'ai 4 roues <br>";
  }
}

class moto extends vehicule {
function nombreDeRoue (){
  echo"J'ai 2 roues <br>";
}
}

// on va pouvoir instancier notre classe avec le mot "new" et en l'attribuant à une variable.

$vehiculeOrdinaire= new
vehicule ();

$auto= new auto();

$moto= new moto();

// les instances ont acces aux methodes de notre class

$vehiculeOrdinaire ->rouler();

$auto -> rouler();

$auto -> nombreDeRoue();
$moto -> nombreDeRoue();

require_once "server.php";


     ?>
