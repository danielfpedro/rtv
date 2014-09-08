<div class="container">
	<div class="row">
		<div class="col-md-2">
			<?php echo $this->element('Dashboard/header'); ?>

			<?php echo $this->element('Dashboard/side_menu'); ?>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<h4 class="sector-title">Seguindo</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-12 text-right">
							<input type="text" class="form-control" style="width: 300px;" placeholder="Pesquisar em 34 vídeos de Foobar">
						</div>

						<?php foreach ($videos as $video): ?>
							<div class="col-md-4">
								<?php echo $this->element('profile_popover'); ?>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>