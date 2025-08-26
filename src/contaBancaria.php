<?php
class ContaBancaria{

  private $nrConta;
  private $nmTitular;
  private $vlSaldo;
  private $blAtivo;

 
  public function __construct($nrConta, $nmTitular, $vlSaldo){
    $this->nrConta = $nrConta;
    $this->nmTitular = $nmTitular;
    $this->vlSaldo = $vlSaldo;
    $this->blAtivo = true;
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

  public function getBlAtivo(){
    return $this->blAtivo;
  }

  public function bloqueiaConta(){
    $this->blAtivo = false;
  }
  
  public function desbloqueiaConta(){
    $this->blAtivo = true;
  }

  public function depositarValor($vlTransferir){
    if($this->blAtivo){
      if($vlTransferir > 0){
        $this->vlSaldo += $vlTransferir;
      } else{
        echo "Informe um valor de depósito ";
      }
    } else{
      echo "Conta Bloqueada";
    }
  }

  public function exibeSaldo(){
      echo $this->vlSaldo;
  }

  public function saque($valor){
    if(!$this->getBlAtivo()){
      echo "Conta Bloqueada";
      return false;
    }
    if($valor <= 0){
      echo "Informe um valor de saque superior a 0,00";
      return false;
    }
    if($this->getVlSaldo() >= $valor){
      $this->getVlSaldo() - $valor;
      return true;
    } else{
      echo "Saldo Insuficiente";
      return false;
    }
  }

  public function __toString()
  {
    return "Numero da conta: ".$this->nrConta."\n".
    " Nome do titular: ".$this->nmTitular."\n".
    " Saldo: ".$this->vlSaldo."\n".
    " Ativo: ".$this->blAtivo;
  }
}
