<?php
include('conecta.php');

  function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "SELECT * FROM produtos");
    while($produto = mysqli_fetch_array($resultado)) {
      array_push($produtos, $produto);
    };
    return $produtos;
  };

  function insereProduto($conexao, $produto, $preco, $descricao) {
    $query = "INSERT INTO produtos (nome_produto, preco_produto, descricao_produto) VALUES ('{$produto}', '{$preco}', '{$descricao}')";
    return mysqli_query($conexao, $query);
  };

  function removeProduto($conexao, $id) {
    $query = "DELETE FROM produtos WHERE id_produto = '{$id}'";
    return mysqli_query($conexao, $query);
  };
