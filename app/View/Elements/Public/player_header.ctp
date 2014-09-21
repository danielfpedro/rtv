<div class="player-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9 player-wrap">
					<div class="playlist-title hidden-xs">
						<div>
							<button class="btn btn-default btn-xs pull-right" id="btn-playlist-collapse" data-expanded="1">
								<span class="glyphicon glyphicon-chevron-down"></span>
							</button>
							<h6>Playlist</h6>
							<h1>Ouvir na Loja</h1>
						</div>
					</div>
					<div class="playlist-content hidden-xs" data-hidden="0">
						<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $video): ?>
								<div class="media">
									<a class="pull-left" href="#">
										<?php
											echo $this->Html->image(
												'placeholder.jpg',
												array('class'=> 'media-object', 'width'=> '70px', 'height'=> '50px'));
										?>
									</a>
									<div class="media-body playlist-body">
										<span>
											<?php
												echo $this->Html->link('Foobar', array('controller'=> '', 'action'=> ''),
													array('class'=> 'text-shadow-dark-full')); ?>
										</span>
										<br>
										<span>
											<?php echo $this->Html->link('Foo Song name', array('controller'=> '', 'action'=> ''), array('class'=> 'text-shadow-dark-full')); ?>
										</span>
										<button type="button" class="playlist-btn-action pull-right">
											<span class="glyphicon glyphicon-remove text-shadow-dark-full"></span>
										</button>
									</div>
								</div>
							<?php endforeach ?>
					</div>
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/RubBzkZzpUA?rel=0&showinfo=0"></iframe>
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

	<hr>

</div>