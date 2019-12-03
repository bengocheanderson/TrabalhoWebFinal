<?php

abstract class ClassConexao{

  #Fazer a conexao
  protected function conectaDB ()
  {
      try{
        $Con = new PDO("mysql:host=localhost;dbname=gtfs tfinal","root","");
        return $Con;
      }catch (PDOException $Erro){
        return $Erro->getMessage();
      }
    }
}

?>
