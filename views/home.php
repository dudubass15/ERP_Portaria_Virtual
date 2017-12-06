<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>

	<body>

		<br>
		<br>

		<form>
			<?php foreach($lista_condominio as $e): ?>
				<button class="btn btn btn-warning" type="submit" style="width: 150px;">
					<a style="color: white; text-align: right;" href="<?php echo URL; ?>/morador_view">
						<?php echo $e['ramal']; ?> -
						<?php echo $e['nome']; ?>
					</a>
				</button>

				<br>
				<br>
			<?php endforeach; ?>
		</form>

	</body>
</html>