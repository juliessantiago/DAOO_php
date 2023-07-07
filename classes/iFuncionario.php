<?php
//interface declara quais métodos classe vai implementar sem dizer como 
//métodos precisam ser públicos

//é necessário que se implemente todos os métodos definidos na interface

//as classes podem implementar mais de uma interface por vez 
interface iFuncionario
{
    public function mostrarSalario():string;
    public function mostrarTempoContrato():string;
}