<?php

//namespace classes; 
//require_once('Pessoa.php'); 

Class Paciente extends Pessoa{
    //referência à classe pai - utiliza-se o parent
    public function __construct($nome, $idade, $peso, $altura){
        parent::__construct($nome, $idade, $peso, $altura); 
    }
}

