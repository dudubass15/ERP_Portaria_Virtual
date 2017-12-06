 <div class="col-sm-6 col-sm-offset-3 col-md-5col-md-offset-2 main">
        <div class="col-md-12">
            <h1 class="page-header">Solicitação Chaveiros</h1>
        </div>
        <!-- COMECA CORPO DENTRO DO BODY E DO LADO DO MENU LATERAL -->
        <div class= "col-md-14">
            <form method="POST" data-toggle="validator" role="form">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="nome" >Nome completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required placeholder="" class="alert alert-danger" role="alert">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="apartamento">Apt.:</label>
                                <input type="text" class="form-control" id="apartamento" name="apartamento" placeholder="" data-error="Por favor, informe um número de apartamento válido!" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                       <div class="col-md-4">
                          <div class="form-group">
                            <label for="condominio">Condomínio:</label>
                            <input type="text" class="form-control" id="condominio" name="condominio" placeholder="" data-error="Por favor, informe um nome válido!" required>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="quantidade">Quantidade:</label>
                            <select name="quantidade" class="form-control">
                              <option value=""> --- </option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </label>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" data-error="Por favor, informe um e-mail válido!" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class= "col-md-12">
                          <label for="observacao">Observações:</label>
                          <textarea class="form-control" name="observacoes" rows="3"></textarea>
                        </div>
                        <div class= "col-md-12">
                          <div class="butoes">
                            <input type="submit" name="enviar" class="btn btn-primary btn-primary">
                            <input type="reset" name="cancelar" class="btn btn-primary btn-danger">
                            <!--<button type="submit" class="btn btn-primary btn btn-success">Atualizar</button>-->
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>