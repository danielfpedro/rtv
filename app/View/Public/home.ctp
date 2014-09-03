<?php echo $this->element('Public/home_header'); ?>

<div class="container">
		<div class="row">
		<?php foreach ($destaques as $video): ?>
			<div class="col-md-4">
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
	<div class="row">
		<div class="col-md-12">
			<h2 class="sector-title">Conheça mais vídeos</h2>
		</div>
	</div>
	<div class="row">
		<?php foreach ($videos_list as $video): ?>
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