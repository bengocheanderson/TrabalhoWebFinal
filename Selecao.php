<?php
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>

  <div class="Content">
    <div class="container">
    <div class="p-3 mb-2 bg-light">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>

    <!--Looping-->
    <?php
      $Crud=new ClassCrud();
      $BFetch=$Crud->selectDB(
        "*",
        "Cadastro",
        "",
        array()
      );

      while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
      ?>
      <tr>
        <td><?php echo $Fetch['Nome']; ?></td>
        <td><?php echo $Fetch['Cidade']; ?></td>
        <td><?php echo $Fetch['Estado']; ?></td>
        <td>
            <!--<a href="Visualizar.php"><img src="Images/Visualizar.svg" width="20" height="20" alt="Visualizar"></a>-->
            <a href="<?php echo "Cadastro.php?id={$Fetch['Id']}"; ?>"><img src="Images/Update.webp" width="20" height="20" alt="Update"></a>
        </td>
      </tr>
      <?php
        }
       ?>

  </tbody>
</table>
  </div>
  </div>
  </div>

<?php include("Includes/Footer.php"); ?>
