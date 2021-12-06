<?php

class TasseDeCafe {
    // Properties
    public $taille;
    public $contenance;
    public $couleur;
    public $contenu;

        // Methods
        function set_Taille($taille, $contenance, $couleur, $contenu) {
            $this->taille = $taille;
            $this->contenance = $contenance;
            $this->couleur = $couleur;
            $this->contenu = $contenu;
          }
          function get_Taille() {
            return $this->taille;
          }
        }
      

    //   var_dump($tasse);



























      // class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// class Heures {
//     public $fuseau;
//     public $heure;
  
  
  
//     function set_fuseau($fuseau){
//       $this->fuseau = $fuseau;
//     }
  
//     function get_fuseau(){
//       return $this->fuseau;
//     }
  
//     function set_heure($heure){
//       $this->heure = $heure;
//     }
  
//     function get_heure(){
//       return $this->heure;
//     }
  
//     function get_All_Time(){
  
//       $dateTime = new DateTime();
  
//       foreach ([
//          'ATOM',
//          'COOKIE',
//          'ISO8601',
//          'RFC822',
//          'RFC850',
//          'RFC1036',
//          'RFC1123',
//          'RFC2822',
//          'RFC3339',
//          'RFC3339_EXTENDED',
//          'RSS',
//          'W3C',
//          ] as $format) {
//          eval("echo '<h2>Heure de l interface</h2>$format\t'.\$dateTime->format(DateTimeInterface::$format).\"\n\";");
//       }
//     }
  
//   }

//   $heure = new Heures();
//   $heure->get_All_Time();

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');

// var_dump($apple);
// echo "<br>";
// var_dump($banana);
?>
      