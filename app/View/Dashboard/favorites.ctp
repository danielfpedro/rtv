<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php echo $this->element('Dashboard/header'); ?>

			<?php echo $this->element('Dashboard/side_menu'); ?>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<h4 class="sector-title">Favoritos</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<li>
							<?php echo $this->Html->link('tey', array('')); ?>
						</li>
						<li class="active">
							<?php echo $this->Html->link('tey', array('')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('tey', array('')); ?>
						</li>
						<li>
							<?php echo $this->Html->link('tey', array('')); ?>
						</li>
					</ul>		
				</div>
				<div class="col-md-9">
					<div class="row">

						<div class="col-md-12 text-right">
							<input type="text" class="form-control" style="width: 300px;" placeholder="Pesquisar em 34 vídeos de Foobar">
						</div>

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