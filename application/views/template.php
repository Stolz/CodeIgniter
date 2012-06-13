<?php
	$is_mobile = $this->agent->is_mobile();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?= $title ?> | <?= PROJECT_NAME ?></title>
	<base href="<?= config_item('base_url') ?>" />

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Stolz" />
	<meta name="description" content="to-do" />

	<?php if($is_mobile) : ?>
	<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
	<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
	<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->
	<?php endif ?>

	<link type="text/css" rel="stylesheet" href="application/htdocs/css/style.css" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">if (typeof jQuery == 'undefined')document.write(unescape("%3Cscript src='application/htdocs/js/jquery.js' type='text/javascript'%3E%3C/script%3E"));</script>
	<!--<script type="text/javascript" src="application/htdocs/js/js/ready.js"></script>-->
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
</body>
</html>