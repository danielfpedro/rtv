<?php echo $this->element('Public/home_header'); ?>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sector-title center-block">
					Outros destaques
				</div>
			</div>
		</div>
		<div class="row">
		<?php foreach ($destaques as $video): ?>
			<div class="col-md-4">
				<?php echo $this->element('video_presentation'); ?>
			</div>
		<?php endforeach ?>
	</div>

	<div class="row">
		<div class="col-md-12 ">
			<div class="artists-featured">
				<div class="row">
					<?php foreach ($artists_featured as $artist): ?>
						<div class="col-md-3">
							<div class="media">
								<?php
									$img = $this->Html->image('placeholder_squared.png', array('class'=> 'img-circle media-object'));
									echo $this->Html->link($img, array('action'=> 'profile'), array('class'=> 'pull-left', 'escape'=> false));
								?>
								<div class="media-body artists-featured-body">
									<span class="media-heading artists-featured-title">Cone Crew Diretoriad ds</span>
									<br>
<!-- 									<span class="label label-default" style="font-size: 10px;">12 Seguidores</span>
									<span class="label label-default" style="font-size: 10px;">12 Seguidores</span>
									<br> -->
									<button type="button" class="btn btn-primary btn-sm btn-xs" style="margin-top: 6px; padding: 0 15px;">
										Seguir
									</button>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="sector-title center-block">
				Descubra novos vídeos
			</div>
		</div>
	</div>
	<div class="row">
		<?php foreach ($videos_list as $video): ?>
			<div class="col-md-3">
				<?php echo $this->element('video_presentation'); ?>
			</div>
		<?php endforeach ?>
	</div>
</div>