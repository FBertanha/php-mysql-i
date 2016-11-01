<?php
  include('header.php'); ?>
  <div class="row">
    <div class="col-md-3 col-md-offset-4">
      <form class="form-horizontal" action="adiciona-produto.php" method="post">
        <fieldset>
        <legend>Cadastro de Produtos</legend>
        <input class="form-control" type="text" name="produto" placeholder="Produto">
        <input class="form-control" type="text" name="preco" placeholder="Preço R$">
        <textarea class="form-control" rows="3" name="descricao" id="textArea" placeholder="Descrição"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
        <button class="btn btn-block btn-primary" type="submit">Salvar</button>
      </form>
    </div>
  </div>

<?php
  include('footer.php');
?>
