<div class="profile-cover">
	
</div>

<div class="container">

	<div class="row">
		<div class="col-md-2">
			<div class="row" style="margin-top: -80px;">
				<div class="col-md-12">
					<?php echo $this->Html->image('placeholder_squared.png', array('class'=> 'img-thumbnail img-responsive', 'width'=> '100%')) ?>
				</div>
			</div>
			<h1>Foobar</h1>
			<?php foreach ($links as $link): ?>
				<span><?php echo $this->Html->link($link['label'], $link['url']); ?></span>
			<?php endforeach ?>

			<h5 class="sector-title">Artistas relacionados</h5>
			<div class="artists-related-container">
				<?php foreach ($artistas_relacionados as $artista): ?>
					<div class="artists-related-thumb">
						<?php echo $this->Html->image('placeholder_squared.png', array('url'=> '#','class'=> 'img-circle', 'width'=> '100%')); ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-10">

			<div class="row">
				<div class="col-md-8">
					<h2 class="sector-title">328 vídeos</h2>		
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Pesquisar em vídeos de Foobar">		
				</div>
			</div>
			
			<div class="row">
				<?php foreach ($videos_list as $video): ?>
					<?php
						$url_player = array('action'=> 'player');
						$url_profile = array('action'=> 'profile');
					?>
					<div class="col-md-3">
						<?php echo $this->element('video_presentation'); ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div>
