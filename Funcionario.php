<?php

class Funcionario{

        private $nome;
        private $cpf;
        private $salario;
        private $cargo;


public function setNome($nomeparam){
        $this->nome = $nomeparam;
}
    
    

public function getNome(){
	   echo "Nome: ". $this->nome."<br>";

}
    
    

public function setCpf($cpfparam){
        $this->cpf = $cpfparam;
}
    

public function getCpf(){
	   echo "CPF: ".$this->cpf."<br>";

}
    
    
public function setSalario($salarioparam){
    $this->salario = $salarioparam;
}

public function getSalario(){
	return $this->salario;


}

public function setCargo($cargoparam){
    $this->cargo = $cargoparam;
}
    
public function getCargo(){
	echo "Cargo:".$this->cargo."<br>";

}

public function descontar (){

}

}

?>

