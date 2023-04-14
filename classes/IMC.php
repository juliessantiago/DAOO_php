<?php 
//Observação: Desconsiderei a idade e o gênero no cálculo e classificação do IMC 
//por questão de praticidade 
Trait IMC{
    protected $imc; 
    public function calc(){
       $peso = $this->peso; 
       $altura = $this->altura; 
       $this->imc = ($peso/pow($altura, 2)); 
    }

    public function classifica(){
        if(!isset($this->imc)){
            $this->calc(); 
        }
        switch ($this->imc) {
            case $this->imc < 18.5:
                echo "\n Abaixo do peso";
                break;
            case $this->imc >= 18.5 && $this->imc < 24.9:
                echo "\n Saudável";
                $this->isNormal(); 
                break;
            case $this->imc >= 25 && $this->imc < 29.9:
                echo "\n Sobrepeso";
                break;
            case $this->imc >=30:
                echo "\n Obesidade";
                break;
        }        
    }
    public function isNormal(){
        return true; 
    }
}