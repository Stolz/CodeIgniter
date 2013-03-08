<hr/>
<a name="orbit"></a>
<div class="row">
	<h2>Orbit <small>Image slider</small></h2>
	<h3 class="subheader">For fixed-size content</h3>

	<div class="do-orbit text-center">
		<?php for($i = 1 ; $i <= 15; $i++) : ?>
		<img src="<?= ASSETS ?>images/liquids/large/<?=$i?>.jpg" alt="<?=$i?>.jpg"/>
		<?php endfor ?>
	</div>

	<h5>Options</h5>
	<script src="https://gist.github.com/2960382.js"> </script>
</div>


