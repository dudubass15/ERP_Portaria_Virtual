<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login - Tattica Segurança</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/assets/css/login.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  </head>

  <body>
    <div class="login">
      <h1>Sistema Tattica</h1>
        <form method="POST">
         	<input type="email" name="email" placeholder="E-mail" required="required" />
          <input type="password" name="senha" placeholder="Senha" required="required" />
         <input type="submit" value="Entrar" class="btn btn-primary btn-block btn-large">
        </form>
    </div>
    
    <script src="js/index.js"></script>

  </body>
</html>
