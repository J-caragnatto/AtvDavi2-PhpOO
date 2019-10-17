<?php
require ("Funcionario.php");
require ("Gerente.php");
require ("Programador.php");
require ("Faxineira.php");
require ("Vendedor.php");


$gerente = new Gerente ("Maciel", "853.431.523-53", 3400, " Gerente");
$gerente->getNome();
$gerente->getCpf();
    
    echo "Salario: ".$gerente->getSalario()."<br>";

$gerente->getCargo();
$gerente->setDescontar1(20);
$gerente->getDescontar1();
$gerente->descontar();

echo "<br>"."<br>";

$vendedor = new Vendedor ("Aldenice", "145.456.459-03", 2300, " Vendedora");
$vendedor->getNome();
$vendedor->getCpf();

    echo "Salario: ".$vendedor->getSalario()."<br>";

$vendedor->getCargo();
$vendedor->setDescontar2(10);
$vendedor->getDescontar2();
$vendedor->descontar();

echo "<br>"."<br>";

$programador = new Programador ("Wallafer", "130.228.712-36", 3500, " Programador");
$programador->getNome();
$programador->getCpf();

    echo "Salario: ".$programador->getSalario()."<br>";

$programador->getCargo();
$programador->setDescontar4(5);
$programador->getDescontar4();
$programador->descontar();


echo "<br>"."<br>";

$faxineira = new Faxineira ("Adriana", "345.007.132-60", 1050, " Faxineira");
$faxineira->getNome();
$faxineira->getCpf();

    echo "Salario: ".$faxineira->getSalario()."<br>";

$faxineira->getCargo();
$faxineira->setDescontar3(5);
$faxineira->getDescontar3();
$faxineira->descontar()."<br>";

?>