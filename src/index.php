<?php

require_once "Banco.php";
require_once "contaBancaria.php";

$banco = new Banco();

$conta1 = new ContaBancaria(123,"Heloisa",200.00);
$conta2 = new ContaBancaria(456,"Maria",200.00);

$banco->novaConta($conta1);
$banco->novaConta($conta2);

$conta1->depositarValor(100);
$conta2->depositarValor(200);

$banco->sacarValor(123, 350);
$banco->sacarValor(456, 100);

$banco->buscaContaNumero(123);

$banco->exibeContas();

$banco->relatorio();

$banco->calculaTarifas();


