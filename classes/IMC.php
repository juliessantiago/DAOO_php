<?php 
namespace classes; 
//include_once('Paciente.php');  
Class IMC{
    //indicar o tipo de objeto que deve ser recebido->somente Paciente 
    public function calcIMC($paciente){
        echo($paciente->altura); 
        //return $paciente->peso/(pow($paciente->altura,2)); 
    }


}