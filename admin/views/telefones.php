<div class="right_col" role="main">
  <div class="">
      <div class="row top_tiles">
              <div class="col-md-12">
              <h1 class="page-header">Telefones Úteis</h1>
            </div>

        
            <button type="button" class="btn btn-primary" id="anotacao-button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Novo</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Cadastro Telefones</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" placeholder="...">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="recipient-name" class="control-label">Telefones:</label>
                            <input type="text" class="form-control" name="telefones" placeholder="(xxx) xxxx-xxxx / (xxx) xxxx-xxxx">
                          </div>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Button trigger modal -->
            <div class= "col-md-12">

              <br>
              <br>
                <div class="panel panel-primary">
                  <!-- Default panel contents -->
                  <div class="panel-heading"><center>Telefones Cadastrado</center></div>

                  <!-- Table -->
                  <table class="table" id="table-telefone">
                    <thead class="titulo-table">
                      <tr>
                        <th class="titulo-table">Nome:</th>
                        <th class="titulo-table">Telefone</th>
                      </tr>
                    </thead>
                    <tbody>  
                        <tr>
                          <td>Exemplo1</td>
                          <td>(27) 0000-0000</td>
                        </tr>
                      </tbody>
                  </table>
                </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
      </div>
  </div>
</div>