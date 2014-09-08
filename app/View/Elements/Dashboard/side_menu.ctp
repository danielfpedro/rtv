<ul class="nav nav-pills nav-stacked">
	<li>
		<?php echo $this->Html->link('Seguindo', array('action'=> 'following'), array()); ?>
	</li>
	<li>
		<?php echo $this->Html->link('Favoritos', array('action'=> 'favorites'), array()); ?>
	</li>
	<li class="active">
		<?php echo $this->Html->link('Playlists', array('action'=> 'playlists'), array()); ?>
	</li>
</ul>