<?php
require_once "Banco.php";
require_once "contaBancaria";

$banco = new Banco();

$conta1 = new contaBancaria(123,"Heloisa",200.00, true);
$conta2 = new contaBancaria(456,"Maria",200.00,false);

$banco->novaConta($conta1);
$banco->novaConta($conta2);

$conta1->depositarValor(100);
$conta2->depositarValor(200);

$conta1->sacarValor(350);
$conta2->sacarValor(100);

$banco->exibeContas();

$banco->relatorio();




