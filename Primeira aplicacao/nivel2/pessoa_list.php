<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/list.css" type="text/css" media="screen">
    <title>Listagem de pessoas</title>
  </head>
  <body>
    <?php
      $conn = mysqli_connect('localhost', 'root', '', 'livro');
      if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
        $id = (int) $_GET['id'];
        $result = mysqli($conn, "DELETE FROM pessoa WHERE id='{$id}'");
      }

      $result = mysqli_query($conn, "SELECT * FROM pessoa ORDER BY id");

      print '<table border=1>';
      print '<thead>';
      print '<tr>';
      print "<th> </th>";
      print "<th> </th>";
      print "<th> Id </th>";
      print "<th> Nome </th>";
      print "<th> Endereço </th>";
      print "<th> Bairro </th>";
      print "<th> Telefone </th>";
      print '</th>';
      print '</thead>';
      print '<tbody>';
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $id_cidade = $row['id_cidade'];

        print '<tr>';
        print "<td align='center'>
              <a href='../pessoa_form_edit.php?id={$id}'>
              <img src='../images/edit.png' style='width:17px'>
              </a></td>";
        print "<td align='center'>
              <a href='../pessoa_delete.php?id={$id}'>
              <img src='../images/remove.png' style='width:17px'>
              </a></td>";
        print "<td> {$id} </td>";
        print "<td> {$nome} </td>";
        print "<td> {$endereco} </td>";
        print "<td> {$bairro} </td>";
        print "<td> {$telefone} </td>";
        print '</tr>';
      }
      print '</tbody>';
      print '</table>';
     ?>
     <button onclick="window.locations='pessoa_form.php'">
       <img src='../images/insert.png' style="width:17px">Inserir
    </button>
  </body>
</html>
