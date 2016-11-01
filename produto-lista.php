<?php
  include('header.php');
  include('conecta.php');
  include('banco-produto.php');
?>
  <div class="row">
    <?php if(array_key_exists("removido", $_GET) && $_GET["removido"] == true) { ?>
    <div class="col-md-4 col-md-offset-4">
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sucesso!</strong> Produto <?=$_GET['produto_id']?> removido!
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h3 class="">Lista de Produtos</h3>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>Id</th>
              <th>Produto</th>
              <th>Preço</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $produtos = listaProdutos($conexao);
              foreach($produtos as $produto) {
            ?>
              <tr>
                <td><?=$produto[0];?></td>
                <td><?=$produto[1];?></td>
                <td><?=$produto[2];?></td>
                <td><a href="remove-produto.php?id=<?=$produto[0]?>"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
              </tr>
            <?php
              };
            ?>
          </tbody>
        </table>
    </div>
  </div>

<?php
  include('footer.php');
?>
