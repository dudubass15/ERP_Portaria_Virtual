<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">

<div class="container">
	<div class="col-lg-4">
	</div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<h1>Nome do Condomínio</h1>

<br>
<div class="table-responsive">
	<table class="table table-hover table-condensed">
		<thead class="titulo-table">
			<tr>
				<th class="titulo-table">Apartamento:</th>
				<th class="titulo-table">Nome:</th>
				<th class="titulo-table">Visitantes:</th>
				<th class="titulo-table">Veículos:</th>
				<th class="titulo-table">Placa:</th>
				<th class="titulo-table">Cor:</th>
				<th class="titulo-table">Condomínio:</th>
				<th class="titulo-table">Observações:</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($moradorinfo_view as $c): ?>
			<tr class="info">
				<td><?php echo $c['apartamento']; ?></td>
				<td><?php echo $c['nome']; ?></td>
				<td><?php echo $c['sobrenome']; ?></td>
				<td><?php echo $c['veiculo']; ?></td>
				<td><?php echo $c['placa']; ?></td>
				<td><?php echo $c['cor']; ?></td>
				<td><?php echo $c['condominio']; ?></td>
				<td><?php echo $c['observacao']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>