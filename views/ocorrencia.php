<!-- Precisa chamar o arquivo CSS para renderizar a página, nesse caso abaixo chama o assets/css/template.css -->
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">

<div class="container">
    <!--<h1 class="page-header">Exemplo <small>(Nome do Condomínio)</small></h1>-->
    <br> <!-- Espaçamento entre o menu e o conteúdo no body da página -->
      <div class="col-lg-4">
        <form method="POST" data-toggle="validator" role="form">
          <div class="input-group">
            <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisa condominio ...">
            <span class="input-group-btn">
              <input type="submit" name="btn-pesquisar" class="btn btn-primary btn-primary">
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
                <th class="titulo-table">Morador:</th>
                <th class="titulo-table">Descrição:</th>
                <th class="titulo-table">Operador:</th>
                <th class="titulo-table">Data:</th>
                <th class="titulo-table">Hora:</th>
                <th class="titulo-table">Condomínio:</th>
                <th class="titulo-table">Status:</th>
                <th class="titulo-table">Ações:</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($lista_ocorrencia as $m): ?> 
              <tr class="info">
                <td><?php echo $m['apartamento']; ?></td>
                <td><?php echo $m['morador']; ?></td>
                <td><?php echo $m['descricao']; ?></td>
                <td><?php echo $m['operador']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($m['data'])); ?></td>
                <td><?php echo $m['hora']; ?></td>
                <td><?php echo $m['condominio']; ?></td>
                <td>
                  <label for="status"></label>
                      <select name="status">
                        <option value=""> --- </option>
                        <option value="1">Resolvido</option>
                        <option value="2">Pendente</option>
                      </select>
                    </label>
                </td>
                <td>
                  <a href="<?php echo URL; ?>/ocorrencia/edit/<?php echo $c['']; ?>">Salvar</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
    <!-- COMECA CORPO DENTRO DO BODY E DO LADO DO MENU LATERAL -->
    <!--<div class= "col-md-12">
      <form method="POST">
          <div class="form-group" class="alert alert-danger" role="alert" style="padding-left: 100px;">
            <div class="col-md-1">
              <label for="apartamento" >Apt.:</label>
                <input type="text" class="form-control" id="apartamento" name="apartamento" required placeholder="" class="alert alert-danger" role="alert">
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="morador">Morador:</label>
                  <input type="text" class="form-control" id="morador" name="morador" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="descricao">Descrição:</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="operador">Operador:</label>
                  <input type="text" class="form-control" id="operador" name="operador" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label for="data">Data:</label>
                  <input type="text" class="form-control" id="data" name="data" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label for="hora">Horário:</label>
                  <input type="text" class="form-control" id="hora" name="hora" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label for="condominio">Condomínio:</label>
                  <input type="text" class="form-control" id="condominio" name="condominio" placeholder="" class="alert alert-danger" role="alert">
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label for="status">Status:</label>
                  <select name="status" id="status" class="form-control" class="alert alert-danger" role="alert">
                    <option value=""> --- </option>
                    <option value="resolvido">Resolvido</option>
                    <option value="pendente">Pendente</option>
                </select>
              </div>
            </div>
            <div class= "col-md-12">
              <div class="butoes">
                <input type="submit" name="enviar" class="btn btn-primary btn-primary">
              </div>
            </div>
          </div>-->
        </div>
      </form>
    </div>