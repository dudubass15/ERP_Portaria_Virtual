<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">

      <div class="col-md-12">
        <h1 class="page-header">Anotações
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo" style="float: right;">Novo</button>
        </h1>
      </div>
      

      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <div class= "col-md-12">
                <form method="POST" data-toggle="validator" role="form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="...">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Data:</label>
                      <input type="text" class="form-control" name="data" placeholder="...">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Horário:</label>
                      <input type="text" class="form-control" name="horario" placeholder="...">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Título:</label>
                      <input type="text" class="form-control" name="titulo" placeholder="...">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="message-text" class="control-label">Mensagem:</label>
                      <textarea class="form-control" name="mensagem"></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <div class= "col-md-12">
                <div class="botao-morador">
                  <button type="submit" class="btn btn-primary btn btn-primary">Salvar</button>
                  <button type="exit" class="btn btn-default">Fechar</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      

    <!-- Painel contendo as anotações
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Default Panel
        </div>
        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
        </div>
      </div>
    </div>-->

    </div>
  </div>
</div>