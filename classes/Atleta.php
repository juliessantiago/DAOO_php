<?php 
//Utilizando traits, é possível que Paciente e Atleta compartilhem os métodos definidos em IMC. 
class Atleta extends Pessoa{
    use IMC; 
    // public function mostrarSalario():string{
    //     return "salário: R$ 10.000,00";
    // }
    // public function mostrarTempoContrato():string{
    //     return "Tempo de contrato é de 3 anos";
    // }
}