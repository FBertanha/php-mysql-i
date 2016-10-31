<?php
  include('header.php');
  include('conecta.php');
  include('banco-produto.php');
?>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h3 class="">Lista de Produtos</h3>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>Id</th>
              <th>Produto</th>
              <th>Preço</th>
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
