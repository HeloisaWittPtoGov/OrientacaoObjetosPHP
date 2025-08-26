<?php

class Banco{

  private  $Contas = [];

  private $contador = 0;

  public function NovaConta($conta){
    $this->Contas[] = $conta;
  }

  public function exibeContas(){
   echo '<ul>';
   print_r($this->Contas);
   echo '</ul>';
  }

  public function buscaContaNumero($nrconta){
    foreach( $this->Contas as $conta){
      if($conta->getNrConta() == $nrconta){
        echo $conta."<br>";
        return $conta;
      }
    }
  }

  public function sacarValor($nrConta,$valor){
    $conta = $this->buscaContaNumero($nrConta);
    if($conta){
      $blSucesso = $conta->saque($valor);
      if($blSucesso){
        $this->contador++;
      }
    }
    
  }

  public function calculaTarifas(){
    $totalTarifa = $this->contador * 2;
    echo $totalTarifa;
  }

  public function transferirValores($ContaOrigem, $contaDestino, $vlTransferir){
    if($ContaOrigem->sacarValor($vlTransferir)){
      $contaDestino->depositarValor($vlTransferir);
      echo "Transferencia realizada com sucesso!";
    }
  }

  public function relatorio(){
    foreach( $this->Contas as $conta){
      echo '<li>'.$conta.'</li>';
    }
  }  

  public function menorMaiorSaldo(){
    $menor = $this->Contas[0];
    $maior = $this->exibeContas = [0];
    foreach( $this->Contas as $conta){
      if($conta->getVlSaldo() < $menor->getVlSaldo()){
          $menor = $conta;
      }
      if($conta->getVlSaldo() > $maior->getVlSaldo()){
          $maior = $conta;
      }    
    }
    echo $maior;
    echo $menor;
  }  
}
