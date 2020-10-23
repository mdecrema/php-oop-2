<?php

class Auto {
  public $marca;
  public $modello;
  public $targa;
  public $motore;
  public $colore;
  public $prezzo;
  public $sconto;


  class Usate extends Auto {
    public $km;

    public function setSconto($km) {
      if ($km > 10000) {
        $this->$sconto = 30;
      }
    }
  }


}

$auto1 = new auto("Audi","A3","FG304MA","diesel","nero","24000","0");
$auto2 = new auto("Mercedes","GLX","EF245TB","benzina","bianco","32000","0");
$auto3 = new auto("BMW","Serie 1","DZ103NA","diesel","grigio","265000","0");

$insiemeAuto = [$auto1, $auto2, $auto3];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OOP 2</title>
  </head>
  <body>
    <?php
    foreach ($insiemeAuto as $auto) {

    echo $auto->$marca;
  }
    ?>
  </body>
</html>
