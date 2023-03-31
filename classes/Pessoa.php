<?php
//namespace classes; 
//criando classe Pessoa
class Pessoa {
    public $nome;
    public $idade; 
    private $peso; 
    private $altura; 
    private $imc; 

    //Modifique o construtor para que as propriedades de peso e altura sejam
    //obrigatórias e que apenas a idade seja opcional
    //PHP permite sobrecarga de métodos? 
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
        $this->setIMC(); 
    }

    public function getAltura(){
        return $this->altura; 
    }

    public function setAltura($valorAltura){
        echo("\nAltura foi modificada"); 
        $this->altura = $valorAltura; 
        $this->setIMC(); 
    }

    public function setIMC(){ //calcula
        // var_dump($this->peso);  
        if($this->peso == null || $this->altura == null){
            echo ("\nNão é possível calcular IMC. Informe os dois valores"); 
        }else{
            $this->imc = ($this->peso/pow($this->altura, 2)); 
        }
    }

    public function getIMC(){//mostra
        echo("\nValor do IMC de ".$this->nome." é igual a ".number_format($this->imc,2,",",".")); 
    }
    /* public function __destruct(){
        echo("\n $this->nome foi destruído"); 
    }
 */

}

// $pessoa1 = new Pessoa("José Pereira", 40, 80, 1.70); 

// $pessoa2 = new Pessoa("Maria Silva", 30, 90, 1.84); 

// $pessoa1->setIMC(); 
// $pessoa1->getIMC(); 

// $pessoa1->setPeso(75); 
// $pessoa1->getIMC(); 

// $pessoa2->setIMC(); 
// $pessoa2->getIMC(); 





