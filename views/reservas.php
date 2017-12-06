    <title>Reservas - Tattica Seguranca</title>
  </head>

   <body>
    <div class="col-sm-9 col-sm-offset-3  col-md-offset-2 main">
      <div class="col-md-12">
        <h1 class="page-header">Reservas</h1>
      </div>
          <!-- COMECA CORPO DENTRO DO BODY E DO LADO DO MENU LATERAL -->

      <div class= "col-md-14">
        <form method="POST" data-toggle="validator" role="form">
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="apt">Apt.:</label>
                <input type="text" class="form-control" id="apt" name="apartamento" placeholder="Nº" data-error="Por favor, informe um número de apartamento válido!" required>
                <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-10">
            <div class="form-group">
              <label for="nome">Nome do Morador:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo do Morador" data-error="Por favor, informe nome correto!" required>
                <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-8">
            <div class="form-group">
              <label for="responsaveis">Responsáveis pelo evento:</label>
                <input type="text" class="form-control" id="responsaveis" name="responsaveis" placeholder="Nome dos Responsáveis" data-error="Por favor, informe um nome responsável pelo apartamento!" required>
                <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="local">Local do Evento:</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="Local do evento" data-error="Por favor, informe um nome correto !" required>
                <div class="help-block with-errors"></div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="condominio">Condomínio:</label>
                <input type="text" class="form-control" id="condominio" name="condominio" placeholder="Nome do Condomínio" data-error="Por favor, informe um Condomínio válido!" required>
                <div class="help-block with-errors"></div>
            </div>
          </div>

            <div class="col-md-2">
              <div class="form-group">
                <label for="data">Data do Evento:</label>
                <input type="text" class="form-control" id="data" name="data" placeholder="00/00/0000" data-error="Por favor, informe data do evento!" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="telefone">2 Telefones para contato:</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000 / (00) 00000-0000" data-error="Por favor, informe pelo menos um telefone válido!" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class= "col-md-12">
            <label for="convidados">Convidados:</label>
              <textarea class="form-control" rows="4" name="convidados" placeholder="Nome dos convidados para o evento ..." data-error="Por favor, informe lista de convidados!" required></textarea>
              <div class="help-block with-errors"></div>
          </div>

          <div class= "col-md-12">
            <div class="butoes">
              <input type="submit" name="enviar" class="btn btn-primary btn-primary">
              <input type="reset" name="cancelar" class="btn btn-primary btn-danger">
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>