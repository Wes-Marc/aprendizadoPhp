<?php
require_once 'db/pessoa_db.php';

if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
  $id= (int) $_GET['id'];
  exclui_pessoa($id);
}

$pessoas = lista_pessoas();
$items = '';
if ($pessoas){
foreach ($pessoas as $pessoa) {
    $items = file_get_contents('htmls/item.html');
    $items = str_replace('{id}', $pessoa['id'], $items);
    $items = str_replace('{nome}', $pessoa['nome'], $items);
    $items = str_replace('{endereco}', $pessoa['endereco'], $items);
    $items = str_replace('{bairro}', $pessoa['bairro'], $items);
    $items = str_replace('{telefone}', $pessoa['telefone'], $items);

    $items .= $item;
  }
}
$list = file_get_contents('htmls/list.html');
$list = str_replace('{items}', $items, $list);
print $list;
