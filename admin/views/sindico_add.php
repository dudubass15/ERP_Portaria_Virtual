<div class="right_col" role="main">
  <div class="">
      <div class="row top_tiles">
            
          <div class="col-md-12">
            <h1 class="page-header">Novo Síndico</h1>
          </div>

          <div class= "col-md-12">
            <form method="POST" data-toggle="validator" role="form">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="...">
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="...">
                  </div>
                </div>

                <div class="col-md-2">
                   <div class="form-group">
                        <label for="apartamento">Apartamento:</label>
                        <input type="text" class="form-control" name="apartamento" placeholder="...">
                    </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Condominio">Condominio:</label>
                      <select name="condominio" class="form-control" required>
                        <option value="0"> --- </option>
                        <option value="1">Oxford</option>
                        <option value="2">Jardim Noah</option>
                        <option value="3">Ocean View</option>
                        <option value="4">Monte Horebe</option>
                        <option value="5">Spazzio</option>
                      </select>
                    </label>
                  </div>
                </div>

                <div class="col-md-3">
                   <div class="form-group">
                        <label for="telefone">Telefones:</label>
                        <input type="text" class="form-control" name="telefone" placeholder="(  ) 0000 - 0000 / (  ) 0000 - 0000">
                    </div>
                </div>

                <div class="col-md-4">
                   <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" class="form-control" name="email" placeholder="...">
                    </div>
                </div>

                <div class= "col-md-12">
                  <label for="observacao">Observações:</label>
                  <textarea class="form-control" rows="3" name="observacao"></textarea>
                </div>

                <div class="checkbox col-md-12">
                    <label>
                        <input type="checkbox" value="">
                            Síndico interno.
                    </label>
                </div>

                <div class="checkbox col-md-12">
                    <label>
                        <input type="checkbox" value="">
                            Síndico externo.
                    </label>
                </div>


                 <div class= "col-md-12">
                  <div class="botao-sindico">
                    <button type="submit" name="enviar" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </form>
            </div>
      </div>
  </div>
</div>