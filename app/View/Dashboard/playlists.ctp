<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php echo $this->element('Dashboard/header'); ?>

			<?php echo $this->element('Dashboard/side_menu'); ?>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
					<h4 class="sector-title">Playlists</h4>
					<ul class="nav nav-pills nav-stacked">
						<li>
							<?php echo $this->Html->link('Rap 90', array('')); ?>
						</li>
						<li class="active">
							<?php echo $this->Html->link('Rio de Janeiro', array('')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Antigos', array('')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Ver na loja', array('')); ?>
						</li>
					</ul>		
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<button class="my-media-btn dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown">
								<span class="glyphicon glyphicon-cog"></span>	
							</button>
							<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="#">
										<span class="glyphicon glyphicon-pencil"></span>
										Editar
									</a>
								</li>
								<li role="presentation" class="divider"></li>
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="#">
										<span class="glyphicon glyphicon-remove"></span>
										Excluir
									</a>
								</li>
							</ul>		
							<h4 class="sector-title clearfix">Anos 90</h4>
						</div>
					</div>
					
					<br style="clear: both">
					
					
					<div class="row">
						<?php foreach ($videos as $video): ?>
							<div class="col-md-3">
								<div class="my-media">
									<div class="my-media-cover">
										<?=$this->Html->image('placeholder.jpg', array('url'=> '#' ,'class'=> 'img-responsive')); ?>
									</div>
									<div class="my-media-body">
										<?php echo $this->Html->link('Eminem', array(), array('class'=> 'my-media-title')) ?>
										<br>
										<?php echo $this->Html->link('Not Afraid', array(), array('class'=> 'my-media-artist-name')) ?>
										<br>
										<span class="my-media-views">123 mil visualizações</span>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>