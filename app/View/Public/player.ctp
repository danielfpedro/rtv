<?php echo $this->element('Public/player_header'); ?>

<div class="container">
	<h4 class="sector-title">Um pouco mais de Foobar</h4>
	<div class="row">
		<?php foreach ([0, 0, 0, 0] as $video): ?>
			<?php
				$url_player = array('action'=> 'player');
				$url_profile = array('action'=> 'profile');
			?>
			<div class="col-md-3">
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
	<h4 class="sector-title">Descubra outros vídeos</h4>
	<div class="row">
		<?php foreach ($videos_list as $video): ?>
			<?php
				$url_player = array('action'=> 'player');
				$url_profile = array('action'=> 'profile');
			?>
			<div class="col-md-3">
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