<?php
class Montre {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$couleur = new Montre();
$marque = new Montre();
$couleur->set_name('Rouge');
$marque->set_name('Wish');

// echo "<br>";
// echo $couleur->get_name();
// echo "<br>";
// echo $marque->get_name();
?> 
