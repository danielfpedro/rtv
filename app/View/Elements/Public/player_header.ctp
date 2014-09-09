<div class="player-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9 player-wrap">
					
					<div class="playlist hidden-xs">
						<!-- <h6 class="pull-right " style="color: #FFF;padding-right: 5px;">Playlist</h6> -->
						<!-- <div class="sector-title">Ouvir na loja</div> -->
						<div class="playlist-title"><div>Ouvir na Loja</div></div>
						<div class="playlist-content">
							<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $video): ?>
								<div class="media">
									<a class="pull-left" href="#">
										<?php
											echo $this->Html->image(
												'placeholder.jpg',
												array('class'=> 'media-object', 'width'=> '70px', 'height'=> '50px'));
										?>
									</a>
									<div class="media-body">
										<span>
											<?php echo $this->Html->link('Foobar', array('controller'=> '', 'action'=> ''), array()); ?>
										</span>
										<br>
										<span>
											<?php echo $this->Html->link('Foo Song name', array('controller'=> '', 'action'=> ''), array()); ?>
										</span>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/7IbVoTS1WqU?rel=0&showinfo=0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h2 class="player-song-name">
				Not Afraid
				<small class="text-muted" style="font-size: 12px;">987 Visualizações</small>
			</h2>
			<h4 class="player-artist-name">
				<?php echo $this->Html->link('Eminem', array('action'=> 'profile'), array()); ?>
			</h4>
		</div>
		<div class="col-md-5 text-right">
			<div class="player-btns">
				<button type="button" class="btn btn-info player-btn-share">Compartilhar</button>
				<button type="button" class="btn btn-info player-btn-action"><span class="glyphicon glyphicon-plus"></span></button>
			</div>
		</div>
	</div>
</div>