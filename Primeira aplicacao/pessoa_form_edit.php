<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" media="screen">
    <title>Cadastro de pessoa</title>
  </head>
  <?php
    if (!empty($_GET['id'])) {
      $conn = mysqli_connect('localhost', 'root', '', 'livro');
      $id = (int) $_GET['id'];
      $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='{$id}'");
      $row = mysqli_fetch_assoc($result);

      $id = $row['id'];
      $nome = $row['nome'];
      $endereco = $row['endereco'];
      $bairro = $row['bairro'];
      $telefone = $row['telefone'];
      $email = $row['email'];
      $id_cidade = $row['id_cidade'];
    }
   ?>
  <body>
    <form enctype="multipart/form-data" action="pessoa_save_update.php" method="post">
      <label>Código</label>
      <input type="text" name="id" readonly="1" style="width= 30%" value="<?=$id?>">
      <label>Nome</label>
      <input type="text" name="nome" style="width= 50%" value="<?=$nome?>">
      <label>Endereço</label>
      <input type="text" name="endereco" style="width= 50%" value="<?=$endereco?>">
      <label>Bairro</label>
      <input type="text" name="bairro" style="width= 25%" value="<?=$bairro?>">
      <label>Telefone</label>
      <input type="text" name="telefone" style="width= 25%" value="<?=$telefone?>">
      <label>Email</label>
      <input type="text" name="email" style="width= 25%" value="<?=$email?>">
      <label>Cidade</label>
      <select name="id_cidade" style="width= 25%">
        <?php
          require_once 'lista_combo_cidades.php';
          print lista_combo_cidades($id_cidade);
         ?>
      </select>
      <input type="submit">
    </form>
  </body>
</html>
