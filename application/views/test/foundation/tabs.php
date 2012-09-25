<a name="tabs"></a>
<hr/>
<div class="row">
	<h2>Tabs</h2>

	<p>If you want a tab group to act vertical on small devices, adding a class of "mobile" will switch them to full width nav bars on small screens. If you want your tabs to run the full width of their container evenly, you can add class of <code>.two-up</code>, <code>.three-up</code>, <code>.four-up</code>, and <code>.five-up</code> to them.</p>

	<dl class="tabs mobile">
		<dd class="active"><a href="<?=$current_url?>#simple1">Simple Tab 1</a></dd>
		<dd><a href="<?=$current_url?>#simple2">Simple Tab 2</a></dd>
		<dd><a href="<?=$current_url?>#simple3">Simple Tab 3</a></dd>
	</dl>
	<ul class="tabs-content">
		<li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
		<li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
		<li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
	</ul>

	<p>Add a class of <code>.contained</code> and then a <code>dt</code> element to have a title attached to each tab.</p>

	<dl class="tabs contained">
		<dt>Title 1</dt>
		<dd class="active"><a href="<?=$current_url?>#simpleContained1">Simple Tab 1</a></dd>
		<dd><a href="<?=$current_url?>#simpleContained2">Simple Tab 2</a></dd>
		<dt>Title 1</dt>
		<dd class="hide-on-phones"><a href="<?=$current_url?>#simpleContained3">Simple Tab 3</a></dd>
	</dl>
	<ul class="tabs-content contained">
		<li class="active" id="simpleContained1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
		<li id="simpleContained2Tab">This is simple tab 2's content. Now you see it!</li>
		<li id="simpleContained3Tab">This is simple tab 3's content. It's only okay.</li>
	</ul>



	<a name="philltabs"></a>
	<h3>Pill-Style Tabs</h3>
	<p>Usefull for filters or ordering</p>

	<dl class="tabs pill">
	<dd class="active"><a href="<?=$current_url?>#pillTab1">Pill Tab 1</a></dd>
	<dd><a href="<?=$current_url?>#pillTab2">Pill Tab 2</a></dd>
	<dd><a href="<?=$current_url?>#pillTab3">Pill Tab 3</a></dd>
	</dl>

	<a name="verticaltabs"></a>
	<h3>Vertical</h3>
	<p>Just add a class of <code>.vertical</code> to the <code>dl</code> element.</p>
	<dl class="nice vertical tabs">
		<dd class="active"><a href="<?=$current_url?>#vertical1">Vertical Tab 1</a></dd>
		<dd><a href="<?=$current_url?>#vertical2">Vertical Tab 2</a></dd>
	<dd><a href="<?=$current_url?>#vertical3">Vertical Tab 3</a></dd>
</dl>
</div>
