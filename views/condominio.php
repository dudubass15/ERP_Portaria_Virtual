<html>
<!-- Parâmetros CSS apenas para teste e estilização da página .. -->
	<style type="text/css">
			tbody, tr, td {
				text-align: center;
				width: 500px;
				position: relative;
				top: 15px;
			}
	</style>

	<body>
		<?php foreach ($condominio_info as $b): ?>
			<h1 style="text-align: center;"><?php echo $b['nome'] ?></h1>
		<?php endforeach; ?>

	<br>
		<div>
			<table class="table table-hover table-condensed">
				<thead class="titulo-table">
					<tr>
						<th class="titulo-table">Apt.:</th>
						<th class="titulo-table">Nome:</th>
						<th class="titulo-table">Telefones:</th>
						<th class="titulo-table">Veiculo:</th>
						<th class="titulo-table">Placa:</th>
						<th class="titulo-table">Cor:</th>
						<th class="titulo-table">Observação:</th>
						<th class="titulo-table">Ações:</th>
					</tr>
				</thead>
				<tbody class="table table-bordered">
				<?php foreach ($morador_info as $c): ?>
					<tr>
						<td><?php echo $c['apartamento']; ?></td>
						<td><?php echo $c['nome']; ?></td>
						<td><?php echo $c['telefones']; ?></td>
						<td><?php echo $c['veiculo']; ?></td>
						<td><?php echo $c['placa']; ?></td>
						<td><?php echo $c['cor']; ?></td>
						<td><?php echo $c['observacao']; ?></td>
						<td>
							<a href="#">
								<input type="submit" name="visualizar" value="visualizar" class="btn btn-default">
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</body>
</html>


<!-- 
<td><?php echo $c['nome'] ?></td>
<td><?php echo $c['sindico'] ?></td>
<td><?php echo $c['cep'] ?></td>
<td><?php echo $c['endereco'] ?></td>
<td><?php echo $c['cnpj'] ?></td>
<td><?php echo $c['telefone'] ?></td>
<td><?php echo $c['zelador'] ?></td>
<td><?php echo $c['observacao'] ?></td>
-->