<?php
	$is_mobile = $this->agent->is_mobile();
	$foundation = isset($foundation);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?= $title ?> | <?= PROJECT_NAME ?></title>
	<base href="<?= config_item('base_url') ?>" />

	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="to-do set your description" />
	<meta name="author" content="Javi (@Stolz)" /><!--to-do set your name-->
	<link type="text/plain" rel="author" href="<?= ASSETS ?>humans.txt" />

	<!-- Favicon -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS ?>images/favicons/apple-touch-icon-144x144-precomposed.png"><!-- For third-generation iPad with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS ?>images/favicons/apple-touch-icon-114x114-precomposed.png"><!-- For iPhone with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS ?>images/favicons/apple-touch-icon-72x72-precomposed.png">	<!-- For first- and second-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?= ASSETS ?>images/favicons/apple-touch-icon-precomposed.png">	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="icon" href="<?= ASSETS ?>images/favicons/favicon.png" type="image/x-icon" />	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->

	<!-- Mobile -->
	<?php if($is_mobile) : ?>
	<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
	<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
	<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->
	<?php endif ?>

	<!-- CSS -->
	<?php if($foundation) : ?>
	<link type="text/css" rel="stylesheet" href="<?= ASSETS ?>css/foundation.min.css" />
	<?php endif; if(isset($css)) foreach($css as $file) : ?>
	<link type="text/css" rel="stylesheet" href="<?= ASSETS ?>css/<?= $file ?>.css" />
	<?php endforeach ?>
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

<!-- JavaScript -->
<?php if($foundation) : /* foundation.min.js includes jQuery and Modernizr*/?>
<script type="text/javascript" src="<?= ASSETS ?>js/foundation.min.js"></script>
<?php else : ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">if (typeof jQuery == 'undefined')document.write(unescape("%3Cscript src='<?= ASSETS ?>js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));</script>
<?php endif; if(isset($js)) foreach($js as $file) : ?>
<script type="text/javascript" src="<?= ASSETS ?>js/<?= $file ?>.js"></script>
<?php endforeach ?>
<script type="text/javascript" src="<?= ASSETS ?>js/app.js"></script>

</body>
</html>