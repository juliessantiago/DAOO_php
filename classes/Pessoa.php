<?php
//criando classe Pessoa
class Pessoa {
    public $nome;
    public $idade; 
    protected $peso; 
    protected $altura; 
    
    //Modifique o construtor para que as propriedades de peso e altura sejam
    //obrigatórias e que apenas a idade seja opcional

   function __construct($nome = null, $idade = null, $peso, $altura){
        $this->nome = $nome; 
        $this->idade = $idade; 
        $this->peso = $peso; 
        $this->altura = $altura; 
    }

    public function getPeso(){
        return $this->peso ; 
    }

    public function setPeso($valorPeso){
        print_r("\nPeso foi modificado"); 
        $this->peso = $valorPeso; 
        //$this->setIMC(); 
    }

    public function getAltura(){
        return $this->altura; 
    }

    public function setAltura($valorAltura){
        echo("\nAltura foi modificada"); 
        $this->altura = $valorAltura; 
       // $this->setIMC(); 
    }

    // public function setIMC(){ //calcula
    //     // var_dump($this->peso);  
    //     if($this->peso == null || $this->altura == null){
    //         echo ("\nNão é possível calcular IMC. Informe os dois valores"); 
    //     }else{
    //         $this->imc = ($this->peso/pow($this->altura, 2)); 
    //     }
    // }

    // public function getIMC(){//mostra
    //     echo("\nValor do IMC de ".$this->nome." é igual a ".number_format($this->imc,2,",",".")); 
    // }
}





