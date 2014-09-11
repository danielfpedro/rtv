
<div class="home-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- 16:9 aspect ratio -->
				<?php
					$url_player = array('action'=> 'player');
					$url_profile = array('action'=> 'profile');
				?>
				<div class="my-top-media-image-wrap">

					<?php
						echo $this->Html->image(
							'placeholder-snoop.jpg',
							array('url'=> $url_player, 'class'=> 'img-responsive my-top-media-image')); ?>

					<?php echo $this->Html->image('play.png', array('class'=> 'play-lg')); ?>
				</div>

				<span class="label label-danger" style="font-size: 13px;">Destaque</span>
				<br>
				<?php
					echo $this->Html->link(
						'Next Episode',
						$url_player,
						array('class'=> 'my-top-media-title text-shadow-light-full'))
				?>
				<br>
				<?php echo $this->Html->link('Snoop Dogg', $url_profile, array('class'=> 'my-top-media-artist text-shadow-light-full')) ?>
			</div>
		</div>
	</div>
</div>