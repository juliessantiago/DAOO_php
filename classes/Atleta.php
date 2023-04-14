<?php 
//Utilizando traits, é possível que Paciente e Atleta compartilhem os métodos definidos em IMC. 
class Atleta extends Pessoa{
    use IMC; 
  
}