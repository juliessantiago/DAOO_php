<?php
class Relatorio {

	private $listaPessoas = [];

	public function add(Pessoa $pessoa)
	{
		$this->listaPessoas[]=$pessoa;
	}
	
	public function log(Pessoa $pessoa)
	{
		if($pessoa instanceof iFuncionario){
		    echo  "\n".$pessoa->mostrarSalario();
			echo "\n" .$pessoa->mostrarTempoContrato();
		}

	}

	public function imprime(){
		echo "\n-------------------Relatório---------------------\n";
		foreach ($this->listaPessoas as $pessoa) 
			$this->log($pessoa);
		echo "\n-----------------------------------------------------\n";
	}
}