<div class="profile-cover">
	
</div>

<div class="container">

	<div class="row">
		<div class="col-md-3">
			<div class="row" style="margin-top: -50%;">
				<div class="col-md-12">
					<?php echo $this->Html->image('eminem-squared.jpg', array('class'=> 'img-thumbnail img-responsive', 'width'=> '80%')) ?>
				</div>
			</div>
			<h1 class="profile-artist-name" style="margin-bottom: 25px;">Eminem</h1>
			<?php foreach ($links as $link): ?>
				<div class="profile-links">
					<i class="fa <?php echo $link['icon']?>"></i> <?php echo $this->Html->link($link['label'], $link['url']); ?>
				</div>
			<?php endforeach ?>

			<div class="sector-title sector-title-sm">
				Artistas relacionados
			</div>
			<div class="artists-related-container">
				<?php foreach ($artistas_relacionados as $artista): ?>
					<div class="artists-related-thumb">
						<?php echo $this->Html->image('eminem-squared.jpg', array('url'=> '#','class'=> 'img-circle', 'width'=> '100%')); ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-9">

			<div class="row" style="margin-top: 40px;margin-bottom: 40px;">
				<div class="col-md-5 col-md-offset-7 text-right">
					<form class="" role="Pesquisar">
						<div class="input-group">
							<input type="text" class="form-control search-input" placeholder="Pesquisar">
							<span class="input-group-btn">
								<button class="btn btn-default search-btn" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div><!-- /input-group -->
					</form><!-- /form -->
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
