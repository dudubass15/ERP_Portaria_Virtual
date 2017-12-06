<!-- Carrega botão CSS Login -->
<link href="<?php echo URL; ?>/assets/css/table.css" rel="stylesheet">

<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">

	    <form role="form">
			<div class="col-md-12">
			    <h1 class="page-header">Usuarios do Sistema</h1>
			</div>

		    <table class="table table-striped">
				<thead class="titulo-table">
					<tr>
						<th class="titulo-table">Nome:</th>
						<th class="titulo-table">Cargo:</th>
						<th class="titulo-table">E-mail:</th>
						<th class="titulo-table">Ações:</th>
					</tr>
				</thead>

				<tbody class="table table-striped"> 
				<?php foreach($lista_usuarios as $u): ?>
		              <tr class="info">
		                <td><?php echo $u['nome']; ?></td>
		                <td><?php echo $lista_cargos[$u['cargo']]; ?></td>
		                <td><?php echo $u['email']; ?></td>
		                <td>
	                		<a href="<?php echo URL; ?>/usuarios/edit/<?php echo $u['id']; ?>" class="btn btn-success" role="button">Editar
                  			</a>
                  			<a href="<?php echo URL; ?>/usuarios/del/<?php echo $u['id']; ?>" class="btn btn-danger" role="button">Deletar
                  			</a>
		                </td>
		              </tr>
              	<?php endforeach; ?>
		        </tbody>
			</table>
		</form>
    </div>  
  </div>
</div>