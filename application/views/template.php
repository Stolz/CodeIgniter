<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?= $title ?> | <?= PROJECT_NAME ?></title>
		<base href="<?= config_item('base_url') ?>" />

		<!-- Meta -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="to-do set your description" />
		<meta name="author" content="Javi (twitter: @Stolz)" /><!--to-do set your name-->
		<link type="text/plain" rel="author" href="<?= ASSETS ?>humans.txt" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><!--Force latest IE rendering engine (& Chrome Frame if is installed)-->

		<!-- Mobile -->
		<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
		<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
		<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->

		<!-- Favicon -->
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS ?>images/favicons/apple-touch-icon-144x144-precomposed.png"/> -->
		<!-- For iPhone with high-resolution Retina display: -->
		<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS ?>images/favicons/apple-touch-icon-114x114-precomposed.png"/> -->
		<!-- For first- and second-generation iPad: -->
		<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS ?>images/favicons/apple-touch-icon-72x72-precomposed.png"/> -->
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<!-- <link rel="apple-touch-icon-precomposed" href="<?= ASSETS ?>images/favicons/apple-touch-icon-57x57-precomposed.png"/> -->
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="icon" href="<?= ASSETS ?>images/favicons/favicon.ico" type="image/x-icon" />

		<!-- RSS -->
		<!--<link rel="alternate" type="application/rss+xml" title="<?= _('News') ?>" href="<?= site_url('feed/news') ?>" /> -->

		<!-- CSS -->
		<?php if( ! empty($this->assets)) echo $this->assets->build_css(); ?>
	</head>
	<body>
		<?php if(isset($views) AND is_array($views))
			foreach($views as $key => $view)
				if($key < 0)
					echo $view;
				else
					$this->load->view($view);

		if(ENVIRONMENT != 'production')
			$this->output->enable_profiler(TRUE); ?>
		<!-- JavaScript -->
		<?php if( ! empty($this->assets)) echo $this->assets->build_js(); ?>
	</body>
</html>