<!-- Precisa chamar o arquivo CSS para renderizar a página, nesse caso abaixo chama o assets/css/template.css -->
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">

<div class="container">
    <!--<h1 class="page-header">Exemplo <small>(Nome do Condomínio)</small></h1>-->
    <br> <!-- Espaçamento entre o menu e o conteúdo no body da página -->
      <div class="col-lg-4">
        <form method="POST">
          <div class="input-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisa nome ...">
            <span class="input-group-btn">
              <input type="submit" name="btn-pesquisar" class="btn btn-primary btn-primary" value="Pesquisar">
            </span>
          </div><!-- /input-group -->
        </form>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    <br>
      <br>
        <div class="table-responsive">
          <table class="table table-hover table-condensed">
            <thead class="titulo-table">
              <tr>
                <th class="titulo-table">Apt.:</th>
                <th class="titulo-table">Nome:</th>
                <th class="titulo-table">Veículos:</th>
                <th class="titulo-table">Placa:</th>
                <th class="titulo-table">Cor:</th>
                <th class="titulo-table">Condomínio:</th>
                <th class="titulo-table">Observações:</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($lista_morador as $m): ?>  
              <tr class="info">
                <td><?php echo $m['apartamento']; ?></td>
                <td><?php echo $m['nome']; ?></td>
                <td><?php echo $m['veiculo']; ?></td>
                <td><?php echo $m['placa']; ?></td>
                <td><?php echo $m['cor']; ?></td>
                <td><?php echo $m['id_condominio']; ?></td>
                <td><?php echo $m['observacao']; ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>