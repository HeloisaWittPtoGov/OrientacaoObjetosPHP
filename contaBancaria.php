<?php
class contaBancaria{

  private $nrConta;
  private $nmTitular;
  private $vlSaldo;
  private $ativo;

 
  public function __construct($nrConta, $nmTitular, $vlSaldo){
    $this->nrConta = $nrConta;
    $this->nmTitular = $nmTitular;
    $this->vlSaldo = $vlSaldo;
    $this->ativo = true;
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

  public function getAtivo(){
    return $this->ativo;
  }

  public function bloqueiaConta(){
    $this->ativo = false;
  }
  
  public function desbloqueiaConta(){
    $this->ativo = true;
  }

  public function depositarValor(){
    $vlTransferir = 0;
    if($ativo == true){
      if($vlTransferir > 0){
        $this->vlSaldo += $vlTransferir;
      } else{
        echo "Informe um valor de depósito ";
      }
    } else{
      echo "Conta Bloqueada";
    }
  }
  
  public function sacarValor(){
    $vlTransferir = 0;
    if($ativo == true){
      if($vlTransferir > 0){
        if($vlSaldo >= $vlTransferir){
          $vlSaldo = $vlSaldo- $vlTransferir;} 
      } else {
          echo "Informe o valor a ser sacado";
        }
    } else{
      echo "Conta Bloqueada";
    }
    self::$contador++;
  }  

  public function calcularTarifa(){
    $tarifa = self::$contador * 2;
    echo $tarifa;
  }

  public function exibeSaldo(){
      echo $this->vlSaldo;
  }

  public function __toString()
  {
    return "Numero da conta: ".$this->nrConta.
    " Nome do titular: ".$this->nmTitular.
    " Saldo: ".$this->vlSaldo.
    " Ativo: ".$this->Ativo;
  }
}
