<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <?php echo $this->Html->link('Appname', array('controller'=> 'public', 'action'=> 'home'), array('class'=> 'navbar-brand')); ?>
	</div>


	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<form class="navbar-form navbar-left" role="Pesquisar">
			<div class="input-group">
				<input type="text" class="form-control search-input" placeholder="Pesquisar">
				<span class="input-group-btn">
					<button class="btn btn-default search-btn" type="button">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div><!-- /input-group -->
		</form>

		<div class="pull-right">
			<button type="button" class="btn btn-default btn-sm navbar-btn">Entrar</button>
			<button type="button" class="btn btn-danger btn-sm navbar-btn">Criar conta</button>
		</div>

	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>