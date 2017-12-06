<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      
      <div class="col-lg-4" style="float: right;">
        <form method="POST">
          <div class="input-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar nome ...">
              <span class="input-group-btn">
                <input type="submit" name="btn-pesquisar" class="btn btn-primary" value="pesquisar">
              </span>
          </div><!-- /input-group -->
        </form>
      </div>

      <!-- Termina barra de pesquisa -->

        <table class="table table-hover table-condensed">
          <thead class="titulo-table">
            <tr>
              <th class="titulo-table">Nome:</th>
              <th class="titulo-table">Apt.:</th>
              <th class="titulo-table">Condomínio:</th>
              <th class="titulo-table">Quantidade:</th>
              <th class="titulo-table">E-mail:</th>
              <th class="titulo-table">Data:</th>
              <th class="titulo-table">Observações:</th>
              <th class="titulo-table">Ações:</th>
            </tr>
          </thead>
          <tbody class="conteudo-table">
            <?php foreach($lista_controle as $c): ?> 
              <tr class="info">
                <td style="padding-top: 30px"><?php echo $c['nome']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['apartamento']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['condominio']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['quantidade']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['email']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['data']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['observacoes']; ?></td>
                <td>
                  <a href="<?php echo URL; ?>/controle/edit/<?php echo $c['id']; ?>" class="btn btn-success" role="button" style="width: 100px;">Editar</a>
                  <a href="<?php echo URL; ?>/controle/del/<?php echo $c['id']; ?>" class="btn btn-danger" role="button" style="width: 100px;">Deletar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>                  

  
    </div>
  </div>
</div>