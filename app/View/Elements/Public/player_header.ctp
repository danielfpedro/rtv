<div class="player-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9 player-wrap">
					
					<div class="playlist hidden-xs">
						<!-- <h6 class="pull-right " style="color: #FFF;padding-right: 5px;">Playlist</h6> -->
						<!-- <div class="sector-title">Ouvir na loja</div> -->
						<div class="playlist-title">
							<h3>Ouvir na Loja</h3>
							<h6>Playlist</h6>
						</div>
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
										<button type="button" class="playlist-btn-action pull-right dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
											<span class="glyphicon glyphicon-chevron-down text-shadow-dark-full"></span>
										</button>
										<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">
													<span class="glyphicon glyphicon-heart"></span>
													<span class="glyphicon glyphicon-ok pull-right"></span>
													Favoritos
												</a>
											</li>
											<li role="presentation" class="divider"></li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">
													<span class="glyphicon glyphicon-share-alt"></span>
													Compartilhar
												</a>
											</li>
											<li role="presentation" class="divider"></li>
											<li role="presentation" class="dropdown-header">Playlists</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">
													<span class="glyphicon glyphicon-plus"></span>
													Criar uma nova playlist
												</a>
											</li>
											<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ouvir na loja</a></li>
											<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Anos 90</a></li>
											<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eminem e Dre</a></li>
										</ul>
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

	<hr>

</div>