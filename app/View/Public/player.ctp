<?php echo $this->Html->script('Public/player', array('inline'=> false)); ?>

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
				<?php echo $this->element('video_presentation'); ?>
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
				<?php echo $this->element('video_presentation'); ?>
			</div>
		<?php endforeach ?>
	</div>
</div>