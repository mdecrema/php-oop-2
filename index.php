<?php

class User {
  public $name;
  public $lastname;
  public $eta;



}

$utente1 = new User("Paolo","Rossi","45");
$utente2 = new User("Mario","Bianchi","38");
$utente3 = new User("Luca","Verdi","26");

$utenti = [$utente1, $utente2, $utente3];

?>
