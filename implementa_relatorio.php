<?php 
include 'autoload.php'; 

$medico1 = new Medico("Roberto Almeida", 50, 80, 1.80); 
$medico2 = new Medico("Ana Beatriz de Souza", 43, 65, 1.68); 

$atleta1 = new Atleta("Vinícius Silva", 20, 65, 1.68);
$atleta2 = new Atleta("Carlos Gonçalves", 60, 65, 1.68);  

$relatorio = new Relatorio(); 

$relatorio->add($medico1);
$relatorio->add($medico2);

$relatorio->log($medico1);
$relatorio->log($atleta1);  

$relatorio->imprime();

//Informações de salário e contrato não serão exibidos para atletas. 
