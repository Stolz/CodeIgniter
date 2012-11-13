<div id="<?= $id = uniqid('ci_php_error_') ?>" style="
margin:1px;
padding:4px;
float:left;
clear:left;
z-index:10000;
border:2px solid red;
color:black;
font-family: Sans-Serif;
text-align:center;
background-color: #fcc;
background-size: 80px 80px;
background-image: -webkit-gradient(linear, 0 0, 100% 100%,color-stop(.25, rgba(255, 255, 255, .5)), color-stop(.25, transparent),color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .5)),color-stop(.75, rgba(255, 255, 255, .5)), color-stop(.75, transparent),to(transparent));
background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, .5) 25%, transparent 25%,transparent 50%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, .5) 75%,transparent 75%, transparent);
background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, .5) 25%, transparent 25%,transparent 50%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, .5) 75%,transparent 75%, transparent);
background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, .5) 25%, transparent 25%,transparent 50%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, .5) 75%,transparent 75%, transparent);
background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, .5) 25%, transparent 25%,transparent 50%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, .5) 75%,transparent 75%, transparent);
background-image: linear-gradient(-45deg, rgba(255, 255, 255, .5) 25%, transparent 25%,transparent 50%, rgba(255, 255, 255, .5) 50%, rgba(255, 255, 255, .5) 75%,transparent 75%, transparent);
">

	<a style="float:right;cursor:pointer;color:blue;margin:-4px" onclick="document.getElementById('<?= $id ?>').style.visibility = 'hidden'">[x]</a>

	<div style="margin-bottom:3px">
		PHP <span style="color:red;font-weight:bold;"><?= strtolower($severity); ?></span> at
		<b><?= $filepath; ?></b> line
		<b><?= $line; ?></b>:
	</div>

	<i><?= $message; ?></i>
</div>