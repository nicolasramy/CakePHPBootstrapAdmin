<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<?php echo $this->Html->charset(); ?>
		<title><?php echo $title_for_layout; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<?php echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min')); ?>
		<?php echo $this->Html->css(array('style')); ?>
		<?php echo $this->Html->script(array('jquery-1.7.2.min', 'bootstrap.min')); ?>


		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<!--
		<link rel="shortcut icon" href="img/favicon/favicon.ico">
		<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
		-->
	</head>

	<body id="top">

		<div class="container">
			<?php echo $session->flash(); ?>
			<?php echo $this->fetch('content'); ?>

			<?php echo $this->element('sql_dump'); ?>
		</div>


		<?php echo $this->Html->script(array('jquery.ui.totop')); ?>
		<?php echo $this->Html->script(array('components', 'events')); ?>


	</body>
</html>
