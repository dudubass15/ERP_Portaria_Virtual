<div class="right_col" role="main">
  <div class="">
      <div class="row top_tiles">
              
            <div class="col-md-12">
              <h1 class="page-header">Novo Morador</h1>
            </div>

            <!-- COMEÇA ABAIXO O CORPO DA PÁGINA COM FORMULÁRIO PARA ENVIO.. -->

            <div class= "col-md-12">
              <form action="" method="post" data-toggle="validator" role="form">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="..." data-error="Por favor, digite o nome correto!" required value="<?php echo $morador_info['nome']; ?>">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="sobrenome">Sobrenome:</label>
                      <input type="text" class="form-control" name="sobrenome" placeholder="..." data-error="Digite um sobrenome válido!" required value="<?php echo $morador_info['sobrenome']; ?>">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>


                  <div class="col-md-1">
                     <div class="form-group">
                          <label for="apartamento">Apt.:</label>
                          <input type="text" class="form-control" name="apartamento" placeholder="..." data-error="Por favor, digite um número de apartamento correto!" required value="<?php echo $morador_info['apartamento']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>

                  <div class="col-md-3">
                    <label for="Condominio">Condominio:</label>
                      <select name="condominio" class="form-control" required value="<?php echo $morador_info['condominio']; ?>">
                        <option value="0"> --- </option>
                        <option value="1">Oxford</option>
                        <option value="2">Jardim Noah</option>
                        <option value="3">Ocean View</option>
                        <option value="4">Monte Horebe</option>
                        <option value="5">Spazzio</option>
                      </select>
                    </label>
                    <div class="help-block with-errors"></div>
                  </div>

                   <div class="col-md-4">
                     <div class="form-group">
                          <label for="telefones">Telefones:</label>
                          <input type="text" class="form-control" name="telefones" placeholder="(  ) 0000 - 0000" data-error="Por favor, digite número de telefone correto!" required value="<?php echo $morador_info['telefones']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>

                  <div class="col-md-4">
                     <div class="form-group">
                          <label for="cidade/es">Cidade/ES:</label>
                          <input type="text" class="form-control" name="cidade" placeholder="..." data-error="Por favor, digite um nome de cidade correto!" required value="<?php echo $morador_info['cidade']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>


                  <div class="col-md-4">
                     <div class="form-group">
                          <label for="veiculo">Veículo:</label>
                          <input type="text" class="form-control" name="veiculo" placeholder="..." value="<?php echo $morador_info['veiculo']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>


                  <div class="col-md-4">
                     <div class="form-group">
                          <label for="placa">Placa:</label>
                          <input type="text" class="form-control" name="placa" placeholder="..." value="<?php echo $morador_info['placa']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>


                  <div class="col-md-4">
                     <div class="form-group">
                          <label for="cor">Cor:</label>
                          <input type="text" class="form-control" name="cor" placeholder="..." value="<?php echo $morador_info['cor']; ?>">
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>

                  <div class= "col-md-12">
                    <label for="observacao">Observações:</label>
                    <textarea class="form-control" name="observacao" rows="3"><?php echo $morador_info['observacao']; ?></textarea>
                  </div>


                   <div class= "col-md-12">
                   <div class="botao-sindico">
                      <button type="submit" class="btn btn-primary btn btn-success">Atualizar</button>
                    </div>
                  </div>
                </form>
              </div>
      </div>
  </div>
</div>
