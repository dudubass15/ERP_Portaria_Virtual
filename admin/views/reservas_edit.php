<div class="right_col" role="main">
  <div class="">
      <div class="row top_tiles">

         <div class="col-md-12">
            <h1 class="page-header">Cadastro Reservas</h1>
          </div>

          <!-- COMEÇA ABAIXO O CORPO DA PÁGINA COM FORMULÁRIO PARA ENVIO.. -->

          <div class= "col-md-12">
            <form method="POST" data-toggle="validator" role="form">
              <div class="row">
              <div class="col-md-1">
                   <div class="form-group">
                        <label for="apartamento">Apt.:</label>
                        <input type="text" class="form-control" name="apartamento" placeholder="..." data-error="Por favor, digite um número de apartamento correto!" required value="<?php echo $reservas_info['apartamento']; ?>">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label for="nome">Nome do Morador:</label>
                    <input type="text" class="form-control" name="nome" placeholder="..." data-error="Por favor, digite o nome correto!" required value="<?php echo $reservas_info['nome']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="responsaveis">Responsáveis pelo evento:</label>
                    <input type="text" class="form-control" id="responsaveis" name="responsaveis" placeholder="Nome dos Responsáveis" data-error="Por favor, informe um nome responsável pelo apartamento!" required value="<?php echo $reservas_info['responsaveis']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>


                <div class="col-md-2">
                  <div class="form-group">
                    <label for="data">Data da Reserva:</label>
                    <input type="text" class="form-control" name="data" placeholder="..." data-error="Digite uma data correta!" required value="<?php echo $reservas_info['data']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-md-3">
                   <div class="form-group">
                        <label for="local">Local Reservado:</label>
                        <input type="text" class="form-control" name="local" placeholder="..." data-error="Por favor, digite um nome correto!" required value="<?php echo $reservas_info['local']; ?>">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-3">
                  <label for="Condominio">Condominio:</label>
                  <input type="text" name="condominio" class="form-control" placeholder="..." data-error="Por favor digite um condomínio válido !" required value="<?php echo $reservas_info['condominio']; ?>">
                  <div class="help-block with-errors"></div>
                </div>

                 <div class="col-md-4">
                   <div class="form-group">
                        <label for="telefone">Telefones:</label>
                        <input type="text" class="form-control" name="telefone" placeholder="(  ) 0000 - 0000" data-error="Por favor, digite número de telefone correto!" required value="<?php echo $reservas_info['telefone']; ?>">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class= "col-md-12">
                  <label for="convidados">Lista de Convidados:</label>
                  <textarea class="form-control" name="convidados" rows="3"><?php echo $reservas_info['convidados']; ?>"</textarea>
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