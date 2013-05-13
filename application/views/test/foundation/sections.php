<a name="sections"></a>

<div class="row">
	<div class="large-12 columns">

		<h2>Sections</h2>

		<a name="sections_default"></a>
		<p>This is the markup</p>

		<pre class="panel">
&lt;div class="section-container <span style="color:red">TYPE</span>" data-section&gt;
	&lt;div class="section"&gt;

		&lt;p class="title"&gt;&lt;a href="#panel1"&gt;Section 1&lt;/a&gt;&lt;/p&gt;

		&lt;div class="content"&gt;
			&lt;p&gt;Content of section 1.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>

		Where <span style="color:red">TYPE</span> is one of:
		<ul class="circle">
			<li><code>auto</code>: tabs on large screens and accordion on small screens.</li>
			<li><code>accordion</code>: accordion on both small and large screens.</li>
			<li><code>tabs</code>: tabs on both small and large screens.</li>
			<li><code>vertical-nav</code>: vertical navigation elements on large screens and show an accordion on small screens.</li>
			<li><code>horizontal-nav</code>:horizontal navigation elements on large screens and show an accordion on small screens.</li>
			<li><code>vertical-tabs</code>: no docs.</li>
		</ul>

		<p>If you want to force a particular format on small screens you will need to set <code>data-section="TYPE"</code>.</p>

		<p>If you want visitors to be able to visit a predefined URL with a hash that points to a particular section of the content (known as "Deep linking") then just add <code>data-options="deep_linking: true"</code> to the main container.
		Deep linking also requires a matching <code>data-slug</code> on the content section that the hash should point to, without the pound (#) sign.</p>

		<p><b>You can infinitely nest Section elements to create more complicated Section layouts.</b></p>

		<?php $n=0; foreach(array('auto', 'accordion', 'tabs', 'vertical-tabs', 'vertical-nav', 'horizontal-nav') as $type) : ?>

		<hr/>

		<a name="sections_<?=$type?>"></a>
		<h4>Type <code><?=$type?></code> <small>Deep-linking enabled</small></h4>
		<div class="section-container <?=$type?>" data-section data-options="deep_linking: true">
			<?php for($i = 1; $i <= 5; $i++) : $n++; ?>
			<div class="section">
				<p class="title"><a href="<?=$current_url?>#panel<?=$n?>">Section <?=$n?></a> </p>
				<div class="content" data-slug="panel<?=$n?>">
					<p>Content of section <?=$n?>.</p>
					Lorem ipsum dolor sit amet, <?=$n?> consectetur adipisicing elit, <?=$n?> sed do eiusmod tempor <?=$n?> incididunt ut <?=$n?> labore et dolore magna aliqua. <?=$n?> Ut enim ad minim veniam, quis nostrud  <?=$n?> exercitation ullamco laboris nisi ut aliquip ex  <?=$n?> ea commodo consequat.
				</div>
			</div>
			<?php endfor ?>
		</div>

		<h4>Type <code><?=$type?></code> forced for small screens <small>Deep-linking enabled</small></h4>
		<div class="section-container <?=$type?>" data-section="<?=$type?>" data-options="deep_linking: true">
			<?php for($i = 1; $i <= 5; $i++) : $n++; ?>
			<div class="section">
				<p class="title"><a href="<?=$current_url?>#panel<?=$n?>">Section <?=$n?></a> </p>
				<div class="content" data-slug="panel<?=$n?>">
					<p>Content of section <?=$n?>.</p>
					Lorem ipsum dolor sit amet, <?=$n?> consectetur adipisicing elit, <?=$n?> sed do eiusmod tempor <?=$n?> incididunt ut <?=$n?> labore et dolore magna aliqua. <?=$n?> Ut enim ad minim veniam, quis nostrud  <?=$n?> exercitation ullamco laboris nisi ut aliquip ex  <?=$n?> ea commodo consequat.
				</div>
			</div>
			<?php endfor ?>
		</div>
		<?php endforeach ?>

	</div>
</div>
