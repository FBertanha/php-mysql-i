<?php
  include('header.php');
  include('conecta.php');
  include('banco-produto.php');

  $produto = $_GET['produto'];
  $preco = $_GET['preco'];

  if(insereProduto($conexao, $produto, $preco)) {
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
