<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/form.css" media="screen">
    <title>Cadastro de pessoa</title>
  </head>
  <?php
    $id = $nome = $endereco = $bairro = $telefone = $email = $id_cidade = '';

    if (!empty($_REQUEST['action'])) {
      $conn = mysqli_connect('localhost', 'root', '', 'livro');
      if ($_REQUEST['action'] == 'edit') {
        $id = (int) $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id='{$id}'");
        if ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $nome = $row['nome'];
          $endereco = $row['endereco'];
          $bairro = $row['bairro'];
          $telefone = $row['telefone'];
          $email = $row['email'];
          $id_cidade = $row['id_cidade'];
        }
      }
      elseif ($_REQUEST['action'] == 'save') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $id_cidade = $_POST['id_cidade'];
        if (empty($_POST['id'])) {
          $result = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");
          $next = (int) mysqli_fetch_assoc($result)['next'] +1;
          $sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone,
                                      email, id_cidade)
                                  VALUES('{$next}', '{$nome}', '{$endereco}',
                                          '{$bairro}', '{$telefone}', '{$email}',
                                          '{$id_cidade}')";
          $result = mysqli_query($conn, $sql);
        }
        else {
          $sql = "UPDATE pessoa SET nome = '{$nome}',
                                    endereco = '{$endereco}',
                                    bairro = '{$bairro}',
                                    telefone = '{$telefone}',
                                    email = '{$email}',
                                    id_cidade = '{$id_cidade}'
                                WHERE id='{$id}'";
          $result = mysqli_query($conn, $sql);
        }
        print ($result) ? 'Registro salvo com sucesso' : mysqli_last_error($conn);
        mysqli_close($conn);
      }
    }
   ?>
  <body>
    <form enctype="multipart/form-data" action="pessoa_form.php?action=save" method="post">
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
          require_once '../lista_combo_cidades.php';
          print lista_combo_cidades($id_cidade);
         ?>
      </select>
      <input type="submit">
    </form>
  </body>
</html>
