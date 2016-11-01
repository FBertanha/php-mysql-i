<?php
  include('header.php');
  include('conecta.php');
  include('banco-produto.php');

  $produto = $_POST['produto'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];

  if(insereProduto($conexao, $produto, $preco, $descricao)) {
?>
    <p class="text-success"> O Produto <?=$produto?> foi adicionado.</p>
    <?php } else {
      $msg = mysqli_error($conexao);
    ?>
      <p class="text-danger"> O Produto <?=$produto?> não foi adicionado. <?=$msg?> </p>
<?php
      }

  include('footer.php');
?>
