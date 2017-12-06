<div class="right_col" role="main">
	<div class="">
	    <div class="row top_tiles">
		    
	    	<div class="col-lg-12">
	    		<h1 class="page-header">Bem Vindo</h1>
	    	</div>
	    </div><!--/.row-->
			
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="panel panel-blue panel-widget ">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">0</div>
								<div class="text-muted">Condomínios</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">0</div>
								<div class="text-muted">Solicitações</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="panel panel-teal panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">0</div>
								<div class="text-muted">Suporte Técnico</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="panel panel-red panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg>

							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">0</div>
								<div class="text-muted">Manutenção</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.row -->

			<br>
			<br>

			<!-- Gráficos contendo as informações -->
			<style>
				.easypiechart-panel {
					text-align: center;
					padding: 1px 0;
					margin-bottom: 20px;
				}

				.easypiechart .percent {
					display: block;
					position: absolute;
					font-size: 26px;
					top: 0px;
					width: 120px;
				}

				#easypiechart-blue .percent { 
					color: #30a5ff;
				}
				#easypiechart-teal .percent { 
					color: #1ebfae;
				}
				#easypiechart-orange .percent { 
					color: #ffb53e;
				}
				#easypiechart-red .percent { 
					color: #ef4040;
				}
			</style>

			<div class="row">
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Condomínios:</h4>
							<div class="easypiechart" id="easypiechart-blue" data-percent="0" ><span class="percent">0</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Solicitações:</h4>
							<div class="easypiechart" id="easypiechart-orange" data-percent="0" ><span class="percent">0</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Suporte Técnico:</h4>
							<div class="easypiechart" id="easypiechart-teal" data-percent="0" ><span class="percent">0</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3">
					<div class="panel panel-default">
						<div class="panel-body easypiechart-panel">
							<h4>Manutenções:</h4>
							<div class="easypiechart" id="easypiechart-red" data-percent="0" ><span class="percent">0</span>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
	    </div>
	</div>
</div>	