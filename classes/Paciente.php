<?php
namespace classes; 
include 'Pessoa.php'; 
include 'IMC.php'; 


Class Paciente extends Pessoa{
    private $imc; 
    //referência à classe pai - utiliza-se o parent
    public function __construct($nome, $idade, $peso, $altura){
        parent::__construct($nome, $idade, $peso, $altura); 
    }
    public static function teste(){
        echo("\ntestando"); 
    }
}
$paciente1 = new Paciente("Ana Paula", 20, 70, 1.80); 
// $paciente1->setIMC(); 
// $paciente1->getIMC(); 
//Paciente::teste(); //método estático é acessivel através do operador de escopo]

$imc  = new IMC(); 

$imc->calcIMC($paciente1); 
//var_dump($imcCalc); 