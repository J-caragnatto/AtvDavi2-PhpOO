<?php
class Programador extends Funcionario{

public function __construct($nome, $cpf, $salario, $cargo){
	$this->setNome($nome);
	$this->setCpf($cpf);
	$this->setSalario($salario);
	$this->setCargo($cargo);
}

private $desconto4;

public function setDescontar4($desconto4param){
    $this->desconto4 = $desconto4param;
}

public function getDescontar4(){
    echo"Salario Liquido: ".($this->getSalario() - ($this->getSalario() / 100 * $this->desconto4))."<br>";

}

public function descontar(){
    echo "Descontado 5% do Salario";
}

}
?>