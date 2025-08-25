<?php
class contaBancaria{

  private $nrConta;
  private $nmTitular;
  private $vlSaldo;

  public function __construct($nrConta, $nmTitular, $vlSaldo){
    $this->nrConta = $nrConta;
    $this->nmTitular = $nmTitular;
    $this->vlSaldo = $vlSaldo;
  }
  public function getNrConta(){
    return $this->nrConta;
  }

  public function getNmTitular(){
    return $this->nmTitular;
  }

  public function setNmTitular($nmTitular){
    $this->nmTitular = $nmTitular;
  } 

  public function getVlSaldo(){
    return $this->vlSaldo;
  }

  public function setVlSaldo($vlSaldo){
    $this->vlSaldo = $vlSaldo;
  }

  public function depositarValor($vlSaldo){
    $vlTransferir = 0;
    if($vlTransferir > 0){
      $this->$vlSaldo += $vlTransferir;
    } else{
      echo "Informe um valor de depósito ";
    }
  }

  public function sacarValor($vlSaldo){
    $vlTransferir = 0;
    if($vlTransferir > 0){
      if($vlSaldo >= $vlTransferir){
        $vlSaldo = $vlSaldo- $vlTransferir;
      } else {
        echo "Informe o valor a ser sacado";
      }
    } 
  }  

  public function exibeSaldo($vlSaldo){
      echo $this->$vlSaldo;
  }

  public function __toString()
  {
    return "Numero da conta: ".$this->$nrConta.
    " Nome do titular: ".$this->$nmTitular.
    " Saldo: ".$this->$vlSaldo;
  }
}
