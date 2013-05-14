<div class="row">
	<div class="large-12 columns">
		<h3>Buttons</h3>

		<p>Button classes usally are applied to <code>anchor</code> elements, but they can also be applied to <code>button</code> elements, as well as <code>input type="submit"</code> elements. Add <code>class="expand"</code> to expand button to full width.</p>

		<div class="row text-center">
			<a href="javascript:void(0)" class="large radius button expand">large radius button expand</a>
			<?php foreach(array('', 'success ', 'alert ', 'secondary ') as $color) foreach(array('tiny ', 'small ', 'medium ', 'large ') as $size) foreach(array('', 'radius ', 'round ') as $key => $border) : ?>
			<div class="large-2 columns">
				<a href="javascript:void(0)" class="<?=$color,$size,$border?> button"><?=$color,$size,$border?>button</a><br/>
				<a href="javascript:void(0)" class="<?=$color,$size,$border?> disabled button"><?=$color,$size,$border?>disabled button</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
