<!-- Carrega botão CSS Login -->
<link href="<?php echo URL; ?>/assets/css/table.css" rel="stylesheet">

<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">

    <!-- Abaixo fica barra de pesquisa -->

      <div class="col-lg-4" style="float: right;">
        <form method="POST">
          <div class="input-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Nome do Morador ...">
              <span class="input-group-btn">
                <input type="submit" name="btn-pesquisar" class="btn btn-primary" value="pesquisar">
              </span>
          </div><!-- /input-group -->
        </form>
      </div>

      <!-- Termina barra de pesquisa -->
      <form role="form">
      <table class="table table-striped">
        <thead class="titulo-table">
          <tr>
            <th class="titulo-table">Apt.:</th>
            <th class="titulo-table">Nome.:</th>
            <th class="titulo-table">Sobrenome:</th>
            <th class="titulo-table">Condomínio:</th>
            <th class="titulo-table">Telefones:</th>
            <th class="titulo-table">Veículo:</th>
            <th class="titulo-table">Placa:</th>
            <th class="titulo-table">Observações:</th>
            <th class="titulo-table">Ações:</th>
          </tr>
        </thead>
        <tbody class="table table-striped">
          <?php foreach($lista_morador as $c): ?> 
            <tr class="info">
              <td style="padding-top: 30px"><?php echo $c['apartamento']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['nome']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['sobrenome']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['id_condominio']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['telefones']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['veiculo']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['placa']; ?></td>
              <td style="padding-top: 30px"><?php echo $c['observacao']; ?></td>
              <td>
                  <a href="<?php echo URL; ?>/morador/edit/<?php echo $c['id']; ?>" class="btn btn-success" role="button" style="width: 100px;">Editar</a>
                  <a href="<?php echo URL; ?>/morador/del/<?php echo $c['id']; ?>" class="btn btn-danger" role="button" style="width: 100px;">Deletar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </form>
    </div>
  </div>
</div>