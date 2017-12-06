<div class="right_col" role="main">
    <div class="">
        <div class="row top_tiles">
                        
            <form method="POST" data-toggle="validator" role="form">
		        <div class="col-md-12">
		          <h1 class="page-header">Novo Condominio</h1>
		        </div>
					        
		        <!-- COMECA CORPO DENTRO DO BODY E DO LADO DO MENU LATERAL -->
		        
		        <div class="row">
			        <div class= "col-md-12">
			        	<div class= "col-md-2">
			              <label for="ramal">Ramal:</label>
			                <input type="text" class="form-control" name="ramal" placeholder="---" data-error="Por favor, informe um número de ramal válido!" required>
			                <div class="help-block with-errors"></div>
			            </div>

			            <div class= "col-md-5">
			            	<div class="form-group">
			            		<label for="nome">Condomínio:</label>
			            		<input type="text" class="form-control" name="nome" placeholder="---" data-error="Por favor, digite nome de condomínio correto!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>


			            <div class="col-md-5">
			            	<div class="form-group">
			            		<label for="sindico">Síndico:</label>
			            		<input type="text" class="form-control" name="sindico" placeholder="---" data-error="Digite um nome válido!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

						            
			            <div class="col-md-5">
			            	<div class="form-group">
			            		<label for="cep">CEP:</label>
			            		<input type="text" class="form-control" name="cep" placeholder="---" data-error="Digite um nome de Cep válido!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

			            <div class="col-md-7">
			            	<div class="form-group">
			            		<label for="endereco">Endereço:</label>
			            		<input type="text" class="form-control" name="endereco" placeholder="---" data-error="Verifique o Endereço." required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

			            <div class="col-md-5">
			            	<div class="form-group">
			            		<label for="cnpj">CNPJ:</label>
			            		<input type="text" class="form-control" name="cnpj" placeholder="---" data-error="Digite um nome de CNPJ válido!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group">
			            		<label for="telefone">Telefones:</label>
			            		<input type="text" class="form-control" name="telefone" placeholder="---" data-error="Verifique o número digitado e tente novamente!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

			            <div class="col-md-4">
			            	<div class="form-group">
			            		<label for="zelador">Zelador(a):</label>
			            		<input type="text" class="form-control" name="zelador" placeholder="---" data-error="Digite um nome válido!" required>
			            		<div class="help-block with-errors"></div>
			            	</div>
			            </div>

			            <div class="col-md-12">
			            	<label for="observacao">Regimento Interno:</label>
			            	<textarea class="form-control" name="observacao" rows="3" required></textarea>
			            	<div class="help-block with-errors"></div>
			            </div>

			            <div class="col-md-12">
			            	<div class="botao-sindico">
			            		<button type="enviar" class="btn btn-primary" onclick="alert('Condomínio salvo com sucesso !')">Salvar</button>
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
		</form>
	</div>
</div>