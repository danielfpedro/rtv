<div class="player-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9 player-wrap">
					
					<div class="playlist hidden-xs">
						<h6 class="pull-right " style="color: #FFF;padding-right: 5px;">Playlist</h6>
						<h5 class="sector-title">Ouvir na loja</h5>
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
					<iframe class="embed-responsive-item" src="//www.youtube.com/embed/HkMNOlYcpHg?rel=0&showinfo=0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-1">
			123 Visualizações
		</div>
		<div class="col-md-8 text-right">
			<button type="button" class="btn btn-info">Compartilhar</button>
			<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button>
		</div>
	</div>
</div>