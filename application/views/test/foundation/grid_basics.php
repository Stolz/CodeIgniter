<style>
.example .row, .example .row .column, .example .row .columns { background: #eee; height: 32px; line-height: 32px; }
.example .row .column, .example .row .columns { background: #ccc; border: 1px solid #bbb; }
.example .row { margin-bottom: 10px; }
</style>


<a name="grid_basics"></a>

<div class="row">
	<div class="large-12 columns">
		<h2>The Grid</h2>

		<p>To create a grid (layout of rows and columns) you have to create a <code>&lt;div class=&quot;row&quot;&gt;&lt;/div&gt;</code> container. Each <code>.row</code> container can be divided in up to 12 columns using inside it a <code>&lt;div class=&quot;columns&quot;&gt;&lt;/div&gt;</code> container. The division may be different for devices with small or large screen. To set the with of the division for devices with small screen you have to use <code>small-#</code> and for large screen devices you use <code>large-#</code>. The breakpoint to swicth between both grids is set to 768px. The markup looks like this:</p>

		<pre><code>
		&lt;div class="row"&gt;
			&lt;div class="small-3 large-6 columns"&gt;&lt;/div&gt;
			&lt;div class="small-6 large-9 columns"&gt;&lt;/div&gt;
		&lt;/div&gt;
		</code></pre>

		<span class="radius label">Note:</span> <b>The grid is nestable</b>, you can add a grid inside a grid, inside a grid, ...
	</div>
</div>






<div class="row example">
	<div class="large-12 columns">
		<h4 class="subheader">Example</h4>
		<p>A grid with two sections. In large screens both have same width (6 columns) but for small devices the fist one is smaller (3 columns) than the second one (9 columns). Try to resize your screen and see how the grid dynamically changes when you reach the 768px breakpoint.</p>

		<div class="row">
			<div class="small-3 large-6 columns"><small>small-3.large-6.columns</small></div>
			<div class="small-9 large-6 columns"><small>small-9.large-6.columns</small></div>
		</div>

		<p>If you don't provide <code>small-#</code> then on small devices the grid collapses to stack all columns on top of each other.</p>

		<div class="row">
			<div class="large-6 columns"><small>stacked on small</small></div>
			<div class="large-6 columns"><small>stacked on small</small></div>
		</div>
	</div>
</div>








<div class="row example">
	<div class="large-12 columns">
		<h4 class="subheader">Example</h4>
		<p>A more complete example with opposite widths for small and large screens:</p>
		<div class="row">
			<div class="large-2 small-10 columns"><small>.large-2 .small-10</small></div>
			<div class="large-10 small-2 columns"><small>.large-10 .small-2</small></div>
		</div>
		<div class="row">
			<div class="large-3 small-9 columns"><small>.large-3 .small-9</small></div>
			<div class="large-9 small-3 columns"><small>.large-9 .small-3</small></div>
		</div>
		<div class="row">
			<div class="large-4 small-8 columns"><small>.large-4 .small-8</small></div>
			<div class="large-8 small-4 columns"><small>.large-8 .small-4</small></div>
		</div>
		<div class="row">
			<div class="large-5 small-7 columns"><small>.large-5 .small-7</small></div>
			<div class="large-7 small-5 columns"><small>.large-7 .small-5</small></div>
		</div>
		<div class="row">
			<div class="large-6 small-6 columns"><small>.large-6 .small-6</small></div>
			<div class="large-6 small-6 columns"><small>.large-6 .small-6</small></div>
		</div>
		<div class="row">
			<div class="large-7 small-5 columns"><small>.large-7 .small-5</small></div>
			<div class="large-5 small-7 columns"><small>.large-5 .small-7</small></div>
		</div>
		<div class="row">
			<div class="large-8 small-4 columns"><small>.large-8 .small-4</small></div>
			<div class="large-4 small-8 columns"><small>.large-4 .small-8</small></div>
		</div>
		<div class="row">
			<div class="large-9 small-3 columns"><small>.large-9 .small-3</small></div>
			<div class="large-3 small-9 columns"><small>.large-3 .small-9</small></div>
		</div>
		<div class="row">
			<div class="large-10 small-2 columns"><small>.large-10 .small-2</small></div>
			<div class="large-2 small-10 columns"><small>.large-2 .small-10</small></div>
		</div>
	</div>
</div>
