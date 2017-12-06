<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
                        
      <div class="col-md-12">
        <h1 class="page-header">Novo Prestador de Serviço</h1>
      </div>


      <div class= "col-md-12">
        <form method="POST" data-toggle="validator" role="form">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="razao">Razão Social:</label>
                <input type="text" class="form-control" name="razao" placeholder="..." data-error="Por favor, informe um nome válido!" required="" value="<?php echo $prestador_info['razao']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="fantasia">Nome Fantasia:</label>
                <input type="text" class="form-control" name="fantasia" placeholder="..." data-error="Por favor, informe o nome da empresa!" required="" value="<?php echo $prestador_info['fantasia']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" class="form-control" name="cnpj" placeholder="..." data-error="Por favor, informe o número do CNPJ válido!" required="" value="<?php echo $prestador_info['cnpj']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" name="telefone" placeholder="..." data-error="Por favor, informe pelo menos um número de telefone válido!" required="" value="<?php echo $prestador_info['telefone']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email" placeholder="..." value="<?php echo $prestador_info['email']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" name="endereco" placeholder="..." data-error="Por favor, informe um Endereço válido!" required="" value="<?php echo $prestador_info['endereco']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="referencia">Referência:</label>
                <input type="text" class="form-control" name="referencia" placeholder="..." data-error="Por favor, informe um ponto de Referência!" required="" value="<?php echo $prestador_info['referencia']; ?>">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class= "col-md-12">
              <label for="observacao">Observações:</label>
              <textarea class="form-control" name="observacao" rows="3" value="<?php echo $prestador_info['observacao']; ?>"></textarea>
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