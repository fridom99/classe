<?php

include("TasseDeCafe.php");
include("Chaise.php");
include("Montre.php");
include("Stylo.php");


$tasse = new TasseDeCafe();
$tasse->set_Taille("Tasse de café", "200ml", "blanche", "café");

$chaise = new Chaise();
$chaise->setSalut("Chaise");


$montre = new Montre();
$montre->set_name('Montre');

$stylo = new stylos();
$stylo->set_nom('Stylo');
$stylo->set_prix('25euros');
$stylo->set_couleur('Rouge');

?>

<form action="#" method="post">
    <input type="text" name="attribut"></input>
    <button type="submit" name="ajouter">Valider</button>
    <form>

        <?php


        if (isset($_POST['attribut'])) {
            $mess = $_POST['attribut'];
            $chaise->setSalut($mess);

            

        }


        echo ("<br> Je suis une ".$chaise->getSalut($mess)." et ".$tasse->get_Taille()." et ".$montre->get_name()."
         avec un stylo super classe ". $stylo->Get_couleur("rouge"));

        ?>

