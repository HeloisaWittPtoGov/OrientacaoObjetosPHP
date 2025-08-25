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

  public function setNrConta($nrConta){
      if($nrConta != null){
        $this->nrConta = $nrConta;
    } else{
      echo "Informe o numero da conta";
    }
  } 

  public function getNmTitular(){
    return $this->nmTitular;
  }

  public function setNmTitular($nmTitular){
      if($nmTitular != null){
        $this->nmTitular = $nmTitular;
    } else{
      echo "Informe um nome";
    }
  } 

  public function getVlSaldo(){
    return $this->vlSaldo;
  }

  public function setVlSaldo($vlSaldo){
    if($vlSaldo != null){
      $this->vlSaldo = $vlSaldo;
    }else{
      echo "Informe o saldo da conta";
    }

  }

  public function depositarValor($vlSaldo){
    $vlDeposito = 0;
    if($vlDeposito > 0){
      $this->$vlSaldo += $vlDeposito;
    } else{
      echo "Informe um valor de depósito ";
    }
  }

  public function sacarValor($vlSaldo){
      $vlSacar = 0;
      if($vlSacar > 0){
        $vlSacar = $vlSacar - $vlSacar;
    } else {
      echo "Informe o valor a ser sacado";
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
