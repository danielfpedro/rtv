<div class="my-media">
	<div class="my-media-cover">
		<?=$this->Html->image('placeholder.jpg', array('url'=> ['action'=> 'player'] ,'class'=> 'img-responsive')); ?>
	</div>
	<div class="my-media-body">
		<?php echo $this->Html->link('Not Afraid', array('action'=> 'player'), array('class'=> 'my-media-title')) ?>
		<br>
		<?php echo $this->Html->link('Eminem', array('action'=> 'profile'), array('class'=> 'my-media-artist-name')) ?>
		<div class="my-media-footer">
			<span class="my-media-views text-muted">123 Mil visualizações</span>
			
			<div class="pull-right">
				<button class="my-media-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
					<span class="glyphicon glyphicon-chevron-down text-shadow-dark-half"></span>	
				</button>
				<ul class="my-media-list-options dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
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
	</div>
</div>