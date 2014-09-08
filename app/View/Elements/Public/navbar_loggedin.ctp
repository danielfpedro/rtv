<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
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

	<div class="container">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<form class="navbar-form navbar-left" role="Pesquisar">
				<div class="form-group">
					<input type="text" class="form-control my-navbar-search" placeholder="Pesquisar">
				</div>
				<button type="submit" class="my-navbar-submit-btn">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</form>

			<div class="pull-right">
				<button type="button" class="btn btn-default btn-sm navbar-btn">Entrar</button>
				<button type="button" class="btn btn-danger btn-sm navbar-btn">Criar conta</button>
			</div>

		</div><!-- /.navbar-collapse -->
	</div>
  </div><!-- /.container-fluid -->
</nav>