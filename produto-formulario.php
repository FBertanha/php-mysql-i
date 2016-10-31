<?php
  include('header.php'); ?>
  <div class="row">
    <div class="col-md-3 col-md-offset-4">
      <form class="form-horizontal" action="adiciona-produto.php" method="get">
        <fieldset>
        <legend>Cadastro de Produtos</legend>
        <input class="form-control" type="text" name="produto" placeholder="Produto">
        <input class="form-control" type="text" name="preco" placeholder="Preço R$">
        <button class="btn btn-block btn-primary" type="submit">Salvar</button>
      </form>
    </div>
  </div>

<?php
  include('footer.php');
?>
