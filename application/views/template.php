<?php
	$assets = '/application/htdocs/';
	$is_mobile = $this->agent->is_mobile();
	$foundation = isset($foundation);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?= $title ?> | <?= PROJECT_NAME ?></title>
	<base href="<?= config_item('base_url') ?>" />

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="to-do set your description" />
	<meta name="author" content="Stolz to-do set your name" />
	<link type="text/plain" rel="author" href="<?= $assets ?>humans.txt" />
	<!--to-do favicon-->

	<?php if($is_mobile AND ! $foundation) : ?>
	<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
	<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
	<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->
	<?php endif ?>

	<?php if($foundation) : ?><link type="text/css" rel="stylesheet" href="<?= $assets ?>css/foundation.css" /><?php endif ?>
	<?php if(isset($css)) foreach($css as $file) : ?>
	<link type="text/css" rel="stylesheet" href="<?= $assets ?>css/<?= $file ?>.css" />
	<?php endforeach ?>

	<script type="text/javascript" src="<?= $assets ?>js/foundation/modernizr.foundation.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">if (typeof jQuery == 'undefined')document.write(unescape("%3Cscript src='<?= $assets ?>js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));</script>
</head>
<body>
<?php
	if(isset($views) AND is_array($views))
		foreach($views as $key => $view)
			if($key < 0)
				echo $view;
			else
				$this->load->view($view);

	if( ! $is_mobile AND ENVIRONMENT != 'production')
		$this->output->enable_profiler(TRUE);
?>

	<?php if($foundation) : ?>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/jquery.reveal.js"></script>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/jquery.orbit-1.4.0.js"></script>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/jquery.customforms.js"></script>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/jquery.tooltips.js"></script>
	<script type="text/javascript" src="<?= $assets ?>js/foundation/app.js"></script>
	<?php endif;if(isset($js)) foreach($js as $file) : ?>
	<script type="text/javascript" src="<?= $assets ?>js/<?= $file ?>.js"></script>
	<?php endforeach ?>
</body>
</html>