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
              <input type="text" class="form-control" name="nome" placeholder="..." data-error="Por favor, digite o nome correto!" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" class="form-control" name="sobrenome" placeholder="..." data-error="Digite um sobrenome válido!" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>


          <div class="col-md-1">
             <div class="form-group">
                  <label for="apartamento">Apt.:</label>
                  <input type="text" class="form-control" name="apartamento" placeholder="..." data-error="Por favor, digite um número de apartamento correto!" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="col-md-3">
            <label for="Condominio">Condominio:</label>
              <select class="form-control" name="condominio" required>
                <option>---</option>
                <option>Oxford</option>
                <option>Jardim Noah</option>
                <option>Ocean View</option>
                <option>Monte Horebe</option>
                <option>Spazzio</option>
              </select>
            </label>
            <div class="help-block with-errors"></div>
          </div>

           <div class="col-md-4">
             <div class="form-group">
                  <label for="telefones">Telefones:</label>
                  <input type="text" class="form-control" name="telefones" placeholder="(  ) 0000 - 0000" data-error="Por favor, digite número de telefone correto!" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="col-md-4">
             <div class="form-group">
                  <label for="cidade/es">Cidade/ES:</label>
                  <input type="text" class="form-control" name="cidade" placeholder="..." data-error="Por favor, digite um nome de cidade correto!" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>


          <div class="col-md-4">
             <div class="form-group">
                  <label for="veiculo">Veículo:</label>
                  <input type="text" class="form-control" name="veiculo" placeholder="...">
                  <div class="help-block with-errors"></div>
              </div>
          </div>


          <div class="col-md-4">
             <div class="form-group">
                  <label for="placa">Placa:</label>
                  <input type="text" class="form-control" name="placa" placeholder="...">
                  <div class="help-block with-errors"></div>
              </div>
          </div>


          <div class="col-md-4">
             <div class="form-group">
                  <label for="cor">Cor:</label>
                  <input type="text" class="form-control" name="cor" placeholder="...">
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class= "col-md-12">
            <label for="observacao">Observações:</label>
            <textarea class="form-control" name="observacao" rows="3"></textarea>
          </div>


           <div class= "col-md-12">
            <div class="botao-sindico">
              <button type="enviar" name="enviar" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>