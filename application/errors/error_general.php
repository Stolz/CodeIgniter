<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=  $heading; ?> :(</title>
		<meta name="author" content="Javi (twitter: @Stolz)" /><!--to-do set your name-->
		<link type="text/plain" rel="author" href="<?= ASSETS ?>humans.txt" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><!--Force latest IE rendering engine (& Chrome Frame if installed)-->

		<!-- Favicon -->
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS ?>images/favicons/apple-touch-icon-144x144-precomposed.png"/>
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS ?>images/favicons/apple-touch-icon-114x114-precomposed.png"/>
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS ?>images/favicons/apple-touch-icon-72x72-precomposed.png"/>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?= ASSETS ?>images/favicons/apple-touch-icon-57x57-precomposed.png"/>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="icon" href="<?= ASSETS ?>images/favicons/favicon.ico" type="image/x-icon" />

		<!-- Mobile -->
		<meta name="HandheldFriendly" content="True" /><!--BlackBerry-->
		<meta name="MobileOptimized" content="960" /><!--Windows Mobile-->
		<meta http-equiv="cleartype" content="on" /><!--Windows Mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><!--Webkit-->

		<style>
			::-moz-selection {
				background: #b3d4fc;
				text-shadow: none;
			}

			::selection {
				background: #b3d4fc;
				text-shadow: none;
			}

			html {
				padding: 30px 10px;
				font-size: 20px;
				line-height: 1.4;
				color: #737373;
				background: #f0f0f0;
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}

			html,
			input {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			}

			.container {
				max-width: 600px;
				_width: 600px;
				padding: 30px 20px 50px;
				border: 1px solid #b3b3b3;
				border-radius: 4px;
				margin: 0 auto;
				box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
				background: #fcfcfc;
			}

			h1 {
				margin: 0 10px;
				font-size: 50px;
				text-align: center;
			}

			h1 span {
				color: #bbb;
			}

			h3 {
				margin: 1.5em 0 0.5em;text-align: center;
			}

			.msg {
				max-width: 500px;
				_width: 500px;
				margin: 0 auto;
			}

			pre{
				font-size:10px;
				margin:auto 5em;
				margin-top:2em;
			}

		</style>
	</head>
	<body>
		<div class="container">
			<div class="msg">
				<h1><?=  $heading; ?> <span>:(</span></h1>
				<h3><?=  $message; ?></h3>

				<h1><a href="<?= site_url() ?>">Go to main page</a></h1>
			</div>
		</div>
		<?php if(ENVIRONMENT == 'development') : ?>
		<pre>BACKTRACE (limited to 25 hops):<br/><?php debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 25); ?></pre>
		<?php endif ?>
	</body>
</html>
