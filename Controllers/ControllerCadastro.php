
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

<div class="alert alert-primary" role="alert">
  Seu Cadastro em Nosso Sistema foi Realizado com Sucesso.
</div>
<a href="../Index.php">Voltar</a>

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
  Seu Cadastro em Nosso Sistema foi Editado com Sucesso.
</div>
<a href="../Index.php">Voltar</a>
