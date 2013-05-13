<hr/>
<a name="orbit"></a>
<div class="row">
	<h2>Orbit <small>Image slider</small></h2>
	<h3 class="subheader">For fixed-size content</h3>

	<div class="do-orbit text-center">
		<?php for($i = 1 ; $i <= 4; $i++) : ?>
		<img src="http://placehold.it/900x300/<?=sprintf("%02X%02X%02X", mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));?>/&amp;text=<?=$i?>" alt="<?=$i?>.jpg"/>
		<?php endfor ?>
	</div>

	<h5>Options</h5>
	<script src="https://gist.github.com/2960382.js"> </script>
</div>


