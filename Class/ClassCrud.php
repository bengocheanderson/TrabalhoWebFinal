<?php
include_once("ClassConexao.php");

class ClassCrud extends ClassConexao{

  #Atributos
  private $Crud;
  private $Contador;


  #Preparação das declarativas
  private function preparedStatements($Query, $Parametros)
  {
    $this->countParametros($Parametros);
    $this->Crud=$this->conectaDB()->prepare($Query);

    if($this->Contador > 0){
      for($I=1; $I <= $this->Contador; $I++){
          $this->Crud->bindValue($I,$Parametros[$I-1]);
      }
    }
    $this->Crud->execute();
  }

  #Conta $Parametros
  private function countParametros($Parametros)
  {
      $this->Contador=count($Parametros);
  }

  #Inserção no Banco
  public function insertDB($Tabela, $Condicao, $Parametros){
    $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Parametros);
    return $this->Crud;
  }

  #Selecao do Banco
  public function selectDB($Campos, $Tabela, $Condicao, $Parametros){
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
    return $this->Crud;
  }

  #Atualiza Banco
  public function updateDB($Tabela, $Set, $Condicao, $Parametros)
  {
    $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Parametros);
    return $this->Crud;
  }



}


 ?>
