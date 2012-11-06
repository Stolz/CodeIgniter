<hr/>
<a name="clearing"></a>
<div class="row">
	<h2>Clearing <small>Image gallery with lightbox</small></h2>
	<h3 class="subheader">For different size content</h3>

	<ul class="block-grid five-up mobile-two-up" data-clearing>
		<?php for($i = 1 ; $i <= 15; $i++) : ?>
		<li>
			<a href="<?= ASSETS ?>images/liquids/large/<?=$i?>.jpg">
				<img data-caption="Caption <?=$i?>" src="<?= ASSETS ?>images/liquids/small/<?=$i?>.jpg"/>
			</a>
		</li>
		<?php endfor ?>
	</ul>
</div>
