<hr/>
<div class="row">
	<a name="buttons"></a>
	<h2>Buttons</h2>
	<h4 class="subheader">Button classes can also applied to anchor elements, button elements, as well as input type="submit" elements.</h4>
</div>

<div class="row text-center">
	<div class="six columns">
		<?php
		foreach(array('', 'success ') as $color)
			foreach(array('tiny ', 'small ', 'medium ', 'large ') as $size)
				foreach(array('', 'radius ', 'round ') as $key => $border) : ?>
					<a href="javascript:void(0)" class="<?=$color,$size,$border?> button">class="<?=$color,$size,$border?>button"</a><br/><br/>
		<?php if($key == 2) echo '<hr/>' ?>
		<?php endforeach; ?>
	</div>

	<div class="six columns">
		<?php
		foreach(array('alert ', 'secondary ') as $color)
			foreach(array('tiny ', 'small ', 'medium ', 'large ') as $size)
				foreach(array('', 'radius ', 'round ') as $key => $border) : ?>
					<a href="javascript:void(0)" class="<?=$color,$size,$border?> button">class="<?=$color,$size,$border?>button"</a><br/><br/>
		<?php if($key == 2) echo '<hr/>' ?>
		<?php endforeach; ?>
	</div>


</div>


<div class="row">
	<a name="buttons_groups"></a>
	<h4>Buttons groups</h4>
	<div class="six columns">
		<ul class="button-group">
			<li><a href="javascript:void(0)" class="button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="success button">Button 2</a></li>
			<li><a href="javascript:void(0)" class="alert button">Button 3</a></li>
		</ul>
	</div>
	<div class="six columns">
		<ul class="button-group rounded">
			<li><a href="javascript:void(0)" class="success button">Button 1</a></li>
			<li><a href="javascript:void(0)" class=" button">Button 2</a></li>
			<li><a href="javascript:void(0)" class="secondary button">Button 3</a></li>
		</ul>
	</div>
	<div class="six columns">
		<ul class="button-group radius">
			<li><a href="javascript:void(0)" class="alert button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="button">Button 2</a></li>
			<li><a href="javascript:void(0)" class="success button">Button 3</a></li>
		</ul>
	</div>
	<div class="six columns">
		<ul class="button-group round">
			<li><a href="javascript:void(0)" class="secondary button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="secondary button">Button 2</a></li>
			<li><a href="javascript:void(0)" class="secondary button">Button 3</a></li>
		</ul>
	</div>
</div>


<div class="row">
	<a name="buttons_bar"></a>
	<h4>Buttons bar</h4>
	<div class="twelve columns button-bar">
		<ul class="button-group round">
			<li><a href="javascript:void(0)" class="button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="button">Button 2</a></li>
		</ul>
		<ul class="button-group round">
			<li><a href="javascript:void(0)" class="secondary button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="secondary button">Button 2</a></li>
		</ul>
		<ul class="button-group round">
			<li><a href="javascript:void(0)" class="alert button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="alert button">Button 2</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<a name="buttons_even"></a>
	<h4>Evenly sized (max: five-up)</h4>
	<div class="twelve columns">
		<ul class="button-group even three-up">
			<li><a href="javascript:void(0)" class="button">Button 1</a></li>
			<li><a href="javascript:void(0)" class="button">Button 2</a></li>
			<li><a href="javascript:void(0)" class="button">Button 3</a></li>
		</ul>
	</div>
</div>



<div class="row">
	<a name="buttons_drop"></a>
	<h4>Dropdown/up and split buttons</h4>
	<div class="four columns">
		<div href="javascript:void(0)" class="large button dropdown">
		Dropdown Button
		<ul>
			<li><a href="javascript:void(0)">Dropdown Item</a></li>
			<li><a href="javascript:void(0)">Another Dropdown Item</a></li>
			<li class="divider"></li>
			<li><a href="javascript:void(0)">Last Item</a></li>
		</ul>
		</div>
	</div>
	<div class="four columns">
		<div href="javascript:void(0)" class="large success button dropdown up">
		DropdUP Button
		<ul>
			<li><a href="javascript:void(0)">Dropdown Item</a></li>
			<li><a href="javascript:void(0)">Another Dropdown Item</a></li>
			<li class="divider"></li>
			<li><a href="javascript:void(0)">Last Item</a></li>
		</ul>
		</div>
	</div>
	<div class="four columns">
		<div href="javascript:void(0)" class="large alert button split dropdown">
		<a href="javascript:void(0)">Split Button</a>
		<span></span>
		<ul>
			<li><a href="javascript:void(0)">Dropdown Item</a></li>
			<li><a href="javascript:void(0)">Another Dropdown Item</a></li>
			<li class="divider"></li>
			<li><a href="javascript:void(0)">Last Item</a></li>
		</ul>
		</div>
	</div>
</div>
