<?php
$dados = $_GET;
if (!empty($dados['id'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'livro');
  $sql = "DELETE FROM pessoa WHERE id= '{$dados['id']}'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    print 'Registro excluido com sucesso';
  }
  else {
    print mysqli_last_error($conn);
  }
  mysqli_close($conn);
}
