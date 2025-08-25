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
}

