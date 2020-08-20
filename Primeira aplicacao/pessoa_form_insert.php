<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" media="screen">
    <title>Cadastro de pessoa</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="pessoa_save_insert.php" method="post">
      <label>Código</label>
      <input type="text" name="id" readonly="1" style="width= 30%">
      <label>Nome</label>
      <input type="text" name="nome" style="width= 50%">
      <label>Endereço</label>
      <input type="text" name="endereco" style="width= 50%">
      <label>Bairro</label>
      <input type="text" name="bairro" style="width= 25%">
      <label>Telefone</label>
      <input type="text" name="telefone" style="width= 25%">
      <label>Email</label>
      <input type="text" name="email" style="width= 25%">
      <label>Cidade</label>
      <select name="id_cidade" style="width= 25%">
        <?php
          require_once 'lista_combo_cidades.php';
          print lista_combo_cidades();
         ?>
      </select>
      <input type="submit">
    </form>
  </body>
</html>
