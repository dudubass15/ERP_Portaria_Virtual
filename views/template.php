<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Condomínios - Tattica Segurança</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/template.css">
		<!-- bootstrap core css -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/bootstrap.min.css">
		<!-- bootstrap theme -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/bootstrap-theme.min.css">

		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/starter-template.css">

	    <script src="<?php echo URL; ?>/assets/js/ie-emulation-modes-warning.js"></script>

	     <script src="<?php echo URL; ?>/assets/js/validator.min.js"></script>

	    <script type="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
		    	<div class="navbar-header">
		        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacao">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		        	</button>
		          	<a class="navbar-brand" href="<?php echo URL; ?>">Tattica Segurança</a>
		        </div>

		        <div class="collapse navbar-collapse" id="navegacao">
		        	<ul class="nav navbar-nav">
		            	<li class="">
		            		<a href="<?php echo URL; ?>">Home<span class="sr-only">(current)</span></a>
		            	</li>
		            	<li>
		            		<a href="<?php echo URL; ?>/morador">Moradores</a>
		            	</li>
		              	<li class="dropdown">
		                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitações <span class="caret"></span></a>

		                	<ul class="dropdown-menu">
		                    	<li>
		                    		<a href="<?php echo URL; ?>/chaveiro">Chaveiros</a>
		                    	</li>
		                    	<li>
		                    		<a href="<?php echo URL; ?>/controle">Controles de Portões</a>
		                    	</li>
		                    	<li>
		                    		<a href="<?php echo URL; ?>/reserva">Reservas</a>
		                    	</li>
		                    	<li>
		                    		<a href="<?php echo URL; ?>/senhas">Senhas</a>
		                    	</li>
		                  	</ul>
		                </li>
		                <!-- Aqui termina o dropdown -->
		            	<li>
		            		<a href="<?php echo URL; ?>/ocorrencia">Ocorrências</a>
		            	</li>
		            	<li>
		            		<a href="http://webmail.tatticaseguranca.com.br" target="blank">Webmail</a>
		            	</li>
		            	<li>
		            		<a href="#Correios">Correios</a>
		            	</li>
		            	<li>
		            		<a href="#Telefones">Telefones</a>
		            	</li>
		            	<div id="deslogar">
		                	<button type="button" class="btn btn-sm btn-success" id="btn-Sair"><a href="<?php echo URL; ?>/login/logout">Sair</a></button>
		              	</div>
		            </ul>
		        </div><!--/.nav-collapse -->
		    </div>
		</nav>

		<head>
			<nav>
				<div>
					<div class="container">
						<?php $this->loadViewInTemplate($viewName, $viewData); ?>
					</div>

					<div class="rodape">
						
					</div>
				</div>
			</nav>
		</head>

		 <!-- Bootstrap core JavaScript
   		================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="../../assets/js/jquery.min.js"><\/script>')</script>
	    <script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="<?php echo URL; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>