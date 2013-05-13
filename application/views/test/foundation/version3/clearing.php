<hr/>
<a name="clearing"></a>
<div class="row">
	<h2>Clearing <small>Image gallery with lightbox</small></h2>
	<h3 class="subheader">For different size content</h3>

	<ul class="block-grid five-up mobile-two-up" data-clearing>
		<?php for($i = 1 ; $i <= 15; $i++) : $color = sprintf("%02X%02X%02X", mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); ?>
		<li>
			<a href="http://placehold.it/600x400/<?=$color?>/&amp;text=<?=$i?>">
				<img src="http://placehold.it/200x150/<?=$color?>/&amp;text=<?=$i?>" alt="<?=$i?>.jpg" data-caption="Caption <?=$i?>" />
			</a>
		</li>
		<?php endfor ?>
	</ul>
</div>


