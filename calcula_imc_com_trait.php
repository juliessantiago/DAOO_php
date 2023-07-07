<?php 
include 'autoload.php'; 

// $paciente1 = new Paciente("Ana Paula", 20, 70, 1.80); 
// var_dump($paciente1); 
// $paciente2 = new Paciente("João", 40, 90, 1.78); 
// $paciente3 = new Paciente("José Francisco", 57, 110, 1.80); 
// $paciente4 = new Paciente("Carolina", 14, 50, 1.65); 

// $pacientes = [$paciente1, $paciente2, $paciente3, $paciente4]; 
// foreach ($pacientes as $pac){
//     IMC::calc($pac); 
//     $classifica = IMC::classifica($pac); 
//     echo("\n================\n"); 
//}
$atleta1 = new Atleta("Flávio", 60, 65, 1.68); 
$atleta1->calc(); 
$atleta1->classifica();
//saudável

$atleta2 = new Atleta("Roberto", 32, 90, 1.75);
$atleta2->calc();
$atleta2->classifica();
//sobrepeso

$atleta3 = new Atleta("Ana Luiza", 16, 50, 1.68);
$atleta3->calc();
$atleta3->classifica();
//abaixo do peso

$atleta4 = new Atleta("Julia", 28, 81, 1.64);
$atleta4->calc();
$atleta4->classifica();
//obesidade