<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema Web - Tattica Segurança </title>

    <!-- Bootstrap -->
    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo URL; ?>/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Carrega botão CSS Login -->
    <link href="<?php echo URL; ?>/assets/css/style-login.css" rel="stylesheet">

    <!-- Carrega CSS página Condomínios -->
    <link href="<?php echo URL; ?>/assets/css/condominio.css" rel="stylesheet">

    <!-- CSS da página inicial do home -->
    <link href="<?php echo URL; ?>/assets/css/styles.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="<?php echo URL; ?>/assets/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo URL; ?>/assets/css/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo URL; ?>/assets/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo URL; ?>/assets/css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo URL; ?>/assets/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo URL; ?>/assets/css/custom.min.css" rel="stylesheet">

    <!--Icons-->
    <script src="<?php echo URL; ?>/assets/js/lumino.glyphs.js"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo URL; ?>/home"><i class="glyphicon glyphicon-home"></i> Ínicio</a>
                  </li>
                  <li><a><i class="glyphicon glyphicon-plus"></i> Cadastros <span></span></a>
                    <ul class="nav child_menu">
                        <li>
                            <a href="<?php echo URL; ?>/condominio/add">Condomínios</a>
                        </li>
                      <li><a href="<?php echo URL; ?>/morador/add">Moradores</a></li>
                      <li><a href="<?php echo URL; ?>/prestador/add"">Prestadores de Serviços</a></li>
                      <li><a href="<?php echo URL; ?>/sindico/add">Síndico</a></li>
                      <li><a href="<?php echo URL; ?>/reservas/add">Reservas</a></li>
                      <li><a href="<?php echo URL; ?>/chaveiros/add">Chaveiros</a></li>
                      <li><a href="<?php echo URL; ?>/controle/add">Controle de Garagem</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-th-list"></i> Visualizar Cadastrados <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/condominio">Condomínios</a></li>
                      <li><a href="<?php echo URL; ?>/morador">Moradores</a></li>
                      <li><a href="<?php echo URL; ?>/prestador">Prestadores</a></li>
                      <li><a href="<?php echo URL; ?>/sindico">Síndico</a></li>
                      <li><a href="<?php echo URL; ?>/reservas">Reservas</a></li>
                      <li><a href="<?php echo URL; ?>/chaveiros">Chaveiros</a></li>
                      <li><a href="<?php echo URL; ?>/controle">Controles</a></li>
                    </ul>
                  </li>

                  <li><a href="<?php echo URL; ?>/anotacoes"><i class="glyphicon glyphicon-text-color"></i> Anotações <span></span></a>
                  </li>

                  <li><a><i class="glyphicon glyphicon-earphone"></i> Telefones <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Fixed Sidebar</a></li>
                      <li><a href="#">Fixed Footer</a></li>
                    </ul>
                  </li>

                  <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Webmail <span></span></a>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Sistema</h3>
                <ul class="nav side-menu">
                  <li><a><i class="glyphicon glyphicon-list-alt"></i> Relatórios <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Chaveiros</a></li>
                      <li><a href="#">Controle de Garagem</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-stats"></i> Indicadores <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Desenvolvimento</a></li>
                      <li><a href="#">Desenvolvimento</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-copy"></i> Suporte Técnico <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Desenvolvimento</a></li>
                      <li><a href="#">Desenvolvimento</a></li>
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-plus-sign"></i> Usuários <span></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo URL; ?>/usuarios">Visualizar</a></li>
                      <li><a href="<?php echo URL; ?>/usuarios/add">Cadastrar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>              
            </ul>
          </div>

        </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configurações">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Bloqueio">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="<?php echo URL; ?>/login/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['nome']; ?>
                    <span class="glyphicon glyphicon-menu-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configurações</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo URL; ?>/login/logout"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="glyphicon glyphicon-bell"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span /></span>
                        <span>
                          <span>Admin</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                        ...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Todos os alertas</strong>
                          <i></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!--<div class="right_col" role="main">
            <div class="">
                <div class="row top_tiles">
                        <center>
                            <h1>Página em desenvolvimento</h1>
                        </center>
                </div>
            </div>
        </div>-->

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


    <!-- jQuery -->
    <script src="<?php echo URL; ?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo URL; ?>/assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo URL; ?>/assets/js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo URL; ?>/assets/js/Chart.min.js"></script>
    <!-- Chart-data.js -->
    <script src="<?php echo URL; ?>/assets/js/chart-data.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo URL; ?>/assets/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo URL; ?>/assets/js/bootstrap-progressbar.min.js"></script>

    <script src="<?php echo URL; ?>/assets/js/easypiechart.js"></script>

    <script src="<?php echo URL; ?>/assets/js/easypiechart-data.js"></script>

    <script src="<?php echo URL; ?>/assets/js/bootstrap-datepicker.js"></script>
    <!-- iCheck -->
    <script src="<?php echo URL; ?>/assets/js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo URL; ?>/assets/js/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.pie.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.time.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.stack.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo URL; ?>/assets/js/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo URL; ?>/assets/js/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo URL; ?>/assets/js/jquery.vmap.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.vmap.world.js"></script>
    <script src="<?php echo URL; ?>/assets/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo URL; ?>/assets/js/moment.min.js"></script>
    <script src="<?php echo URL; ?>/assets/js/daterangepicker.js"></script>

    <script src="<?php echo URL; ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <script src="<?php echo URL; ?>/assets/js/validator.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo URL; ?>/assets/js/custom.min.js"></script>

    <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
	
  </body>
</html>
