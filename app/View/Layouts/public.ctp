<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('/vendors/normalize.css/normalize');
			echo $this->Html->css('/vendors/bootstrap/dist/css/bootstrap.min');
			echo $this->Html->css('Public/main');
			

			echo $this->fetch('meta');
			echo $this->fetch('css');

			echo $this->Html->script('/vendors/modernizr/modernizr');
		?>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<?php echo $this->Session->flash(); ?>

		<div style="margin-bottom: 70px;">
			<?php echo $this->element('Public/navbar_not_loggedin'); ?>
		</div>

		<?php echo $this->fetch('content'); ?>

		<?php echo $this->element('Public/footer'); ?>

		
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<?php echo $this->Html->script('/vendors/jquery/dist/jquery.min') ?>
		<?php echo $this->Html->script('/vendors/bootstrap/dist/js/bootstrap.min'); ?>

		<?php echo $this->fetch('script'); ?>
		<?php echo $this->Html->script('Public/main') ?>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			// (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			// function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			// e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			// e.src='//www.google-analytics.com/analytics.js';
			// r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			// ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
