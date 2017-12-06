<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">

      <div class="col-md-12">
        <h1 class="page-header">Novo Usuario</h1>
      </div>

      <!--ABAIXO COMECA O FORMULARIO PARA CADASTRAR UM NOVO USUARIO PARA ACESSAR O SISTEMA -->

      <?php if(!empty($error)): ?>
          <div class="warning"><?php echo $error; ?></div>
      <?php endif; ?>

      <div class= "col-md-12">
        <form method="POST">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="...">
              </div>
            </div>

            <div class="col-md-4">
              <label for="cargo">Cargo:</label>
              <select name="cargo" class="form-control">
                <?php foreach($lista_cargos as $chave => $cargos): ?>
                <option value="<?php echo $chave; ?>"><?php echo $cargos; ?></option>
                <?php endforeach; ?>
              </select>
            </label>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="text" class="form-control" name="email" placeholder="fulano@tatticaseguranca.com.br">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" name="senha" placeholder="Digite sua senha ..">
            </div>
          </div>

          <div class= "col-md-12">
            <div class="btn-usuario">
              <button type="submit" name="confirmar" class="btn btn-primary btn-md">Cadastrar</button>
            </div>
          </div>
        </div>
      </form>
    </div>  
  </div>
</div>