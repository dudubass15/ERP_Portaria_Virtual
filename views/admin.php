<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Administração - Tattica Seguranca</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="#">Tattica Segurança</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Painel de Controle</a></li>
            <li><a href="#">Configuração</a></li>
            <li><a href="#">Perfil</a></li>
            <div id="sair">
              <button type="button" class="btn btn-sm btn-success">Sair</button>
            </div>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Pesquisar...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Novo Condomínio <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Novo Morador</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Novo Prestador de Serviço</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Novo Síndico</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span> Anotações</a></li>
            <li><a href=""><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefones</a></li>
            <li><a href="http://webmail.tatticaseguranca.com.br" target="blank"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Webmail</a></li>
            <li><a href=""><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Reservas</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Planilha Operação</a></li>
            <li><a href=""><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Indicadores</a></li>
            <li><a href=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Relatórios</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Importar</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Exportar</a></li>
          </ul>
        </div>

        <!-- FORMULÁRIO ABAIXO PARA CADASTROS E ENVIO PARA O SERVIDOR DE DADOS -->

   

         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
