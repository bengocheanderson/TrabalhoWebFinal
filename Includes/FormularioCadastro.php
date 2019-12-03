<?php

include("Class/ClassCrud.php");

  if(isset($_GET['id'])){
    $Acao="Editar";

    $Crud=new ClassCrud();
    $BFetch=$Crud->selectDB("*","Cadastro","where Id=?",array($_GET['id']));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    $Id=$Fetch['Id'];
    $Nome=$Fetch['Nome'];
    $Cidade=$Fetch['Cidade'];
    $Estado=$Fetch['Estado'];

  }else{
    $Acao="Cadastrar";
    $Id="";
    $Nome="";
    $Cidade="";
    $Estado="";
  }

 ?>

<div class="container">
<div class="p-3 mb-2 bg-light">

<h1>Realize o Cadastro</h1>

<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
  <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
  <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
<div class="row">
  <div class="col">
    <input type="text" id="Nome" class="form-control" placeholder="Nome" name="Nome" value="<?php echo $Nome; ?>">
  </div>
  <div class="col">
    <input type="text" id="Cidade" class="form-control" placeholder="Cidade" name="Cidade" value="<?php echo $Cidade; ?>">
  </div>
  <div class="col">
    <input type="text" id="Estado" class="form-control" placeholder="Estado" name="Estado" value="<?php echo $Estado; ?>">
  </div>
</div>
<div class="botoes">
    <center>
    <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
    </center>
</div>
</form>
</div>
</div>
