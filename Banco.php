<?php
class Banco{

  private  $Contas = [];

  public function NovaConta(contaBancaria $nrconta){
    $this->Contas[] = $nrconta;
  }

  public function exibeContas(){
   echo '<ul>';
   print_r($this->Contas);
   echo '</ul>';
  }

  public function buscaContaNumero(contaBancaria $nrconta){
    foreach( $this->Contas as $conta){
      echo '<li>'.$conta.'<li>';
    }
  }

  public function transferirValores(contaBancaria $ContaOrigem, contaBancaria $contaDestino, $vlTransferir){
    if($ContaOrigem->sacar($vlTransferir)){
      $contaDestino->depositar($vlTransferir);
    }
  }

  public function relatorio(){
    foreach( $this->Contas as $conta){
      echo '<li>'._toString($conta).'</li>';
    }
  }  

  public function menorMaiorSaldo(){
    $menor = $this->contas[0];
    $maior = $this->contas = [0];
    foreach( $this->Contas as $conta){
      if($conta->getSaldo() < $menor->getSaldo()){
          $menor = $conta;
      }
      if($conta->getSaldo() > $maior->getSaldo()){
        $maior = $conta;
      }    
    }
    echo $maior;
    echo $menor;
  }  
}
