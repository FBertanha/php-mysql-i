<?php
//include('conecta.php');

  function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "SELECT p.id_produto, p.nome_produto, p.preco_produto, p.descricao_produto, c.nome_categoria, IF(p.usado_produto = '1', 'Usado', 'Novo') FROM produtos AS p JOIN categorias AS c ON c.id_categoria = p.id_categoria ORDER BY p.id_produto");
    while($produto = mysqli_fetch_array($resultado)) {
      array_push($produtos, $produto);
    };
    return $produtos;
  };

  function insereProduto($conexao, $produto, $preco, $descricao, $categoria, $usado) {
    $query = "INSERT INTO produtos (nome_produto, preco_produto, descricao_produto, id_categoria, usado_produto) VALUES ('{$produto}', '{$preco}', '{$descricao}', '{$categoria}', '{$usado}')";
    echo $query;
    return mysqli_query($conexao, $query);
  };

  function removeProduto($conexao, $id) {
    $query = "DELETE FROM produtos WHERE id_produto = '{$id}'";
    return mysqli_query($conexao, $query);
  };
