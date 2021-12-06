<?php 

class Chaise{
    public $message;
    function dismoi($salut){
        echo $salut;  
    }

    function setSalut($message){
        $this->message = $message;
    }

    function getSalut(){
        return $this->message;
    }
}


// $chaise->dismoi("Bonjour!");


?>