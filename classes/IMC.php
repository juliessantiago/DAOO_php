<?php 
//include_once('Paciente.php');  
Class IMC{
    public static function calc($paciente){
       $peso = $paciente->getPeso(); 
       $altura = $paciente->getAltura(); 
       echo (number_format(($peso/pow($altura, 2)),2,",",".")); 
    }

    public static function classifica($paciente){
        $peso = $paciente->getPeso(); //Não faria mais sentido receber o valor do IMC diretamente? 
        $altura = $paciente->getAltura(); 
        $imc = $peso/pow($altura, 2); 

        switch ($imc) {
            case $imc < 18.5:
                echo "\n Abaixo do peso";
                break;
            case $imc >= 18.5 && $imc < 24.9:
                echo "\n Saudável";
                break;
            case $imc >= 25 && $imc < 29.9:
                echo "\n Sobrepeso";
                break;
            case $imc >=30:
                echo "\n Obesidade";
                break;
        }
        
    }
}