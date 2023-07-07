<?php 
// include 'autoload.php'; 

class Medico extends Pessoa implements iFuncionario{
    //use IMC; 
    public function mostrarSalario():string{
        return "salário: R$ 30.000,00";
    }
    public function mostrarTempoContrato():string{
        return "Tempo de contrato é de 5 anos";
    }
}