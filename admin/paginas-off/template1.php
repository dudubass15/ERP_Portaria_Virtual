<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Administração - Tattica Seguranca</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Carrega botão CSS Login -->
    <link href="<?php echo URL; ?>/assets/css/style-login.css" rel="stylesheet">

    <!-- Carrega CSS página Condomínios -->
    <link href="<?php echo URL; ?>/assets/css/condominio.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <link href="<?php echo URL; ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="<?php echo URL; ?>/assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo URL; ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <script src="<?php echo URL; ?>/assets/js/validator.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

   <body>
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo URL;?>/condominio">Tattica Segurança</a>
	        </div>
	        
        <div class="collapse navbar-collapse" id="navegacao">
        	<ul class="nav navbar-nav">
            	<li class="">
            		<a href="<?php echo URL; ?>">Home<span class="sr-only">(current)</span></a>
            	</li>
            	<li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
                	<ul class="dropdown-menu">
                    	<li>
                    		<a href="<?php echo URL; ?>/condomínio">Condomínio</a>
                    	</li>
                    	<li>
                    		<a href="<?php echo URL; ?>/morador">Moradores</a>
                    	</li>
                    	<li>
                    		<a href="<?php echo URL; ?>/sindico">Síndico</a>
                    	</li>
                    	<li>
                    		<a href="<?php echo URL; ?>/prestador">Prestador de Serviço</a>
                    	</li>
                    	<li>
                    		<a href="<?php echo URL; ?>/reservas">Reservas</a>
                    	</li>
                    	<li>
                    		<a href="<?php echo URL; ?>/senhas">Senhas</a>
                    	</li>
                  	</ul>
                </li>
            	<li>
            		<a href="<?php echo URL; ?>/ocorrencia">Anotações</a>
            	</li>
            	<li>
            		<a href="<?php echo url; ?>">Telefones</a>
            	</li>
            	<li>
            		<a href="#">Webmail</a>
            	</li>
            	<li>
            		<a href="#">Indicadores</a>
            	</li>
            	<li>
            		<a href="#Telefones">Relatórios</a>
            	</li>
            	<li>
            		<a href="#Telefones">Telefones</a>
            	</li>
	            <div id="sair">
	              <button type="button" class="btn btn-sm btn-success"><a href="<?php echo URL; ?>/login/logout">Sair</a></button>
	            </div>
	          </ul>
	        </div>
	      </div>
	    </nav>
        <!-- FORMULÁRIO ABAIXO PARA CADASTROS E ENVIO PARA O SERVIDOR DE DADOS -->

        <!-- Bootstrap core JavaScript
		    ================================================== -->
		    <!-- Placed at the end of the document so the pages load faster -->
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
		    <script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
		    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
		    <script src="<?php echo URL; ?>/assets/js/vendor/holder.min.js"></script>
		    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		    <script src="<?php echo URL; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
	  
			<div class="container">
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			</div>
			<div class="rodape">
		</div>
	</body>
</html>