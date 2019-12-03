
<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){

$Crud->insertDB(
    "Cadastro",
    "?,?,?,?",
    array(
      $Id,
      $Nome,
      $Estado,
      $Cidade
    )
);
?>


<?php
}else{
  $Crud->updateDB(
    "Cadastro",
    "Nome=?,Cidade=?,Estado=?",
    "Id=?",
    array(
      $Nome,
      $Estado,
      $Cidade,
      $Id
    )
  );

}

?>

<div class="alert alert-primary" role="alert">
  Solicitação Realizada com Sucesso.
</div>
<a href="../Index.php">Voltar</a>
