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

  function insereProduto($conexao, $produto, $preco) {
    $query = "INSERT INTO produtos (nome_produto, preco_produto) VALUES ('{$produto}', '{$preco}')";
    return mysqli_query($conexao, $query);
  };
