<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="sector-title">Resultado da pesquisa para "Tey"</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h4 class="sector-title">Vídeos</h4>
				</div>
				<?php foreach ($videos_list as $video): ?>
					<?php
						$url_player = array('action'=> 'player');
						$url_profile = array('action'=> 'profile');
					?>
					<div class="col-md-4">
						<div class="my-media">
							<div class="my-media-cover">
								<?=$this->Html->image('placeholder.jpg', array('url'=> $url_player ,'class'=> 'img-responsive')); ?>
							</div>
							<div class="my-media-body">
								<?php echo $this->Html->link('Foobar', $url_player, array('class'=> 'my-media-title')) ?>
								<br>
								<?php echo $this->Html->link('Bar Song Name', $url_profile, array('class'=> 'my-media-artist-name')) ?>
								<br>
								<span class="my-media-views">123 mil visualizações</span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">
				<h4 class="sector-title">Playlists</h4>
				<?php foreach ($playlists as $playlist): ?>
					<span class="h5">
						<?php echo $this->Html->link('Foobar', array('action'=> 'profile')); ?>
					</span>
					<br>
					<span class="h6">
						<?php echo $this->Html->link('por Jhony', array()); ?>
					</span>
					<br>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-md-12">
					<h4 class="sector-title">Artistas</h4>
				</div>
				<?php foreach ($artists as $artist): ?>
					<div class="col-md-12">
						<div class="media">
							<?php
								$img = $this->Html->image('placeholder_squared.png', array('class'=> 'img-circle media-object'));
								echo $this->Html->link($img, array('action'=> 'profile'), array('class'=> 'pull-left', 'escape'=> false));
							?>
							<div class="media-body">
								<h5 class="media-heading">Foobar</h5>
								<h6 class="text-muted">123 Vídeos e 2134 seguidores</h6>
								<button type="button" class="btn btn-primary btn-xs btn-block">Seguir</button>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>