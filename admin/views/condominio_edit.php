<div class="right_col" role="main">
	<div class="">
	    <div class="row top_tiles">
	            
	    	<form method="POST">
	    		<div class="col-md-12">
	    			<h1 class="page-header">Editar Condominio</h1>
	    		</div>

	    		<!-- COMECA CORPO DENTRO DO BODY E DO LADO DO MENU LATERAL -->
	    		
	    		<div class="row">
	    			<div class= "col-md-12">
	    				<div class= "col-md-2">
	    					<label for="ramal">Ramal:</label>
	    					<input type="text" class="form-control" name="ramal" value="<?php echo $condominio_info['ramal']; ?>">
	    				</div>

	    				<div class= "col-md-5">
	    					<div class="form-group">
	    						<label for="nome">Nome do morador:</label>
	    						<input type="text" class="form-control" name="nome" value="<?php echo $condominio_info['nome']; ?>">
	    					</div>
	    				</div>


	    				<div class="col-md-5">
	    					<div class="form-group">
	    						<label for="sindico">Sindico:</label>
	    						<input type="text" class="form-control" name="sindico" value="<?php echo $condominio_info['sindico']; ?>">
	    					</div>
	    				</div>


	    				<div class="col-md-5">
	    					<div class="form-group">
	    						<label for="cep">CEP:</label>
	    						<input type="text" class="form-control" name="cep" value="<?php echo $condominio_info['cep']; ?>">
	    					</div>
	    				</div>

	    				<div class="col-md-7">
	    					<div class="form-group">
	    						<label for="endereco">Endereço:</label>
	    						<input type="text" class="form-control" name="endereco" value="<?php echo $condominio_info['endereco']; ?>">
	    					</div>
	    				</div>

	    				<div class="col-md-5">
	    					<div class="form-group">
	    						<label for="cnpj">CNPJ:</label>
	    						<input type="text" class="form-control" name="cnpj" value="<?php echo $condominio_info['cnpj']; ?>">
	    					</div>
	    				</div>

	    				<div class="col-md-3">
	    					<div class="form-group">
	    						<label for="telefone">Telefones:</label>
	    						<input type="text" class="form-control" name="telefone" value="<?php echo $condominio_info['telefone']; ?>">
	    					</div>
	    				</div>

	    				<div class="col-md-4">
	    					<div class="form-group">
	    						<label for="zelador">Zelador(a):</label>
	    						<input type="text" class="form-control" name="zelador" value="<?php echo $condominio_info['zelador']; ?>">
	    					</div>
	    				</div>

	    				<div class= "col-md-12">
	    					<label for="observacao">Observações:</label>
	    					<textarea class="form-control" name="observacao" rows="3"><?php echo $condominio_info['observacao']; ?></textarea>
	    				</div>

	    				<div class= "col-md-12">
	    					<div class="botao-sindico">
	    						<button type="submit" class="btn btn-primary btn btn-success">Atualizar</button>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </form>
	</div>
</div>