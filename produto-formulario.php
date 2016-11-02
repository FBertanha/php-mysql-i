<?php
  include('header.php');
  include('conecta.php');
  include('banco-categoria.php');
?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" action="adiciona-produto.php" method="post">
        <fieldset>
          <legend>Cadastro de Produtos</legend>
          <div class="form-group">
            <label for="inputNomeProduto" class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input type="text" name="produto" class="form-control" placeholder="Produto">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPrecoProduto" class="col-lg-2 control-label">Preço</label>
            <div class="col-lg-10">
              <input type="text" name="preco" class="form-control" placeholder="Valor R$">
            </div>
          </div>
          <div class="form-group">
            <label for="textAreaObsProduto" class="col-lg-2 control-label">Descrição</label>
            <div class="col-lg-10">
              <textarea class="form-control" name="descricao" rows="3" placeholder="Descrição..."></textarea>
              <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="usado" value="1"> Produto Usado
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Selects</label>
            <div class="col-lg-10">
              <select class="form-control" name="categoria_id">
                <?php
                  $categorias = listaCategoria($conexao);
                  foreach($categorias as $categoria) { ?>
                    <option value="<?=$categoria[0]?>"><?=$categoria[1]?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
          <!--
          <input class="form-control" type="text"  placeholder="Produto">
          <input class="form-control" type="text" name="preco" placeholder="Preço R$">

          <textarea class="form-control" rows="3" name="descricao" id="textArea" placeholder="Descrição"></textarea>
          <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
          <button class="btn btn-block btn-primary" type="submit">Salvar</button>
          -->
      </fieldset>
      </form>
    </div>
  </div>

<?php
  include('footer.php');
?>
