<div class="right_col" role="main">
  <div class="">
      <div class="row top_tiles"> 

      <!-- Aqui entra todo o conteúdo da página, ou seja, tudo dentro
      dessa div fica com a largura correta da página  -->

      <!-- Abaixo fica barra de pesquisa -->

      <div class="col-lg-4" style="float: right;">
        <form method="POST">
          <div class="input-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Nome do Prestador ...">
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
              <th class="titulo-table">Nome.:</th>
              <th class="titulo-table">CNPJ:</th>
              <th class="titulo-table">Telefones:</th>
              <th class="titulo-table">Email:</th>
              <th class="titulo-table">Endereço:</th>
              <th class="titulo-table">Observações:</th>
              <th class="titulo-table">Ações:</th>
            </tr>
          </thead>
          <tbody class="conteudo-table">
            <?php foreach($lista_prestador as $c): ?>
              <tr class="info">
                <td style="padding-top: 30px"><?php echo $c['razao']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['cnpj']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['telefone']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['email']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['endereco']; ?></td>
                <td style="padding-top: 30px"><?php echo $c['observacao']; ?></td>
                <td>
                  <a href="<?php echo URL; ?>/prestador/edit/<?php echo $c['id']; ?>" class="btn btn-success" role="button" style="width: 100px;">Editar
                  </a>
                  <a href="<?php echo URL; ?>/prestador/del/<?php echo $c['id']; ?>" class="btn btn-danger" role="button" style="width: 100px;">Deletar
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
