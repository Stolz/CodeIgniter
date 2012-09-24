<hr/>
<a name="reveal"></a>
<div class="row">
	<h2>Reveal</h2>
	<h3 class="subheader">Modal dialogs / pop-up windows</h3>

	<ul class="button-group radius">
		<?php
			$modal_sizes = array('small', 'medium', 'large', 'xlarge', 'expand'); foreach($modal_sizes as $size) : ?>
			<li><a class="button" data-reveal-id="reveal_<?=$size?>"><?=$size?></a></li>
			<?php endforeach ?>
	</ul>
</div>

<?php foreach($modal_sizes as $size) : ?>
<div id="reveal_<?=$size?>" class="reveal-modal <?=$size?>">
	<h2><?=ucfirst($size)?></h2>
	<p class="lead">This modal has <?=$size?> size</p>
	<p>Clicking the background will close it</p>
	<div class="left"><a onclick="$('.reveal-modal.open').trigger('reveal:close')" class="secondary radius button">Cancel</a></div>
	<div class="right"><a class="button radius">Accept</a></div>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php endforeach ?>
