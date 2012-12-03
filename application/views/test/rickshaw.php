<style>
div, span, p, td {
	font-family: Arial, sans-serif;
}

#content {
	width: 1200px;
}
#chart {
	display: inline-block;
}
#chart path {
	-webkit-transition: opacity 0.2s linear;
}
#slider {
	margin-top: 10px;
}
#legend {
	display: inline-block;
	position: relative;
	left: 8px;
}
#legend_container {
	position: absolute;
	right: 0;
	bottom: 26px;
	width: 0;
}
#chart_container {
	position: relative;
	display: inline-block;
}
#smoother {
	margin: 0 0 10px 16px;
	width: 100px;
}
.rickshaw_graph .detail {
	left: -1000;
}
#chart {
	border: 1px solid #f0f0f0;
}
#side_panel {
	padding: 0 20px 20px 0;
	width: 240px;
	display: inline-block;
	vertical-align: top;
}
#side_panel section {
	color: #505050;
	font-size: 12px;
}
#side_panel section h6 {
	margin: 0 0 1em 0;
	font-size: 12px;
	font-weight: normal;
}
#side_panel .ui-slider-horizontal {
	height: 1px !important;
	border-color: #e0e0e0;
	margin-bottom: 10px;
}
#side_panel .ui-slider-handle {
	border-color: #a0a0a0;
	height: 9px !important;
	width: 9px !important;
	top: -5px !important;
	border-radius: 6px;
	outline: none;
	cursor: pointer;
}
#legend {
	background-color: white;
	margin-left: 0;
	padding: 0;
	left: 0;
}
#legend .label {
	color: #404040;
}
#legend .action {
	color: black;
	opacity: 0.5;
}
#legend ul {
	padding: 0;
}
h1 {
	font-family: Franklin Gothic Medium, UnDotum, Helvetica, Arial;
	font-weight: normal;
	font-size: 20px;
}
section {
	border: none;
	border-top: 1px solid #eaeaea;
	padding: 15px 0;
}
#smoother {
	margin: 5px 0 0 10px;
	width: 90%;
}
label.disabled {
	opacity: 0.4;
}
#renderer_form.toggler {
	display: block;
	margin: 0;
}
#renderer_form.toggler input[type=radio]:checked {
	outline: 2px solid steelblue;
}
#renderer_form.toggler input[type=radio] {
	-moz-appearance: button;
	background: white;
	margin: 0 7px;
	width: 39px;
	height: 26px;
	position: absolute;
}
#renderer_form.toggler label {
	display: inline-block;
	padding: 0;
	width: 39px;
	padding-top: 27px;
	text-align: center;
	font-size: 10px;
	color: #808080;
	background-repeat: no-repeat;
	position: relative;
	margin: 0 7px;
	cursor: pointer;
}
#interpolation_form,
#offset_form {
	vertical-align: top;
	display: inline-block;
	width: 45%;
}

#interpolation_form label,
#offset_form label {
	display: block;
}
label[for=area] {
	background: url(<?= ASSETS ?>images/rickshaw/om_stack.png);
}
label[for=line] {
	background: url(<?= ASSETS ?>images/rickshaw/om_lines.png);
}
label[for=bar] {
	background: url(<?= ASSETS ?>images/rickshaw/om_bar.png);
}
label[for=scatter] {
	background: url(<?= ASSETS ?>images/rickshaw/om_scatter.png);
}
#offset_form label,
#interpolation_form label {
	background-repeat: no-repeat;
	background-position: 2em center;
	cursor: pointer;
	cursor: hand;
}
#offset_form label span,
#interpolation_form label span {
	padding-left: 36px;
}
label[for=stack] {
	background-image: url(<?= ASSETS ?>images/rickshaw/offset_stack.png);
}
label[for=pct] {
	background-image: url(<?= ASSETS ?>images/rickshaw/offset_pct.png);
}
label[for=stream] {
	background-image: url(<?= ASSETS ?>images/rickshaw/offset_stream.png);
}
label[for=value] {
	background-image: url(<?= ASSETS ?>images/rickshaw/offset_value.png);
}
label[for=cardinal] {
	background-image: url(<?= ASSETS ?>images/rickshaw/interp_cardinal.png);
}
label[for=linear] {
	background-image: url(<?= ASSETS ?>images/rickshaw/interp_linear.png);
}
label[for=step] {
	background-image: url(<?= ASSETS ?>images/rickshaw/interp_step.png);
}


/* If .labe conflicts with Zurb Foundation or Twitter Bootstrap then reset the styles as follows */
.rickshaw_legend .label{
	background:none;
	background-color: transparent;
	bottom:auto;
	color: inherit;
	display: inline;
	font-size: inherit;
	font-weight: normal;
	line-height: 1;
	line-height: normal;
	margin: 0;
	padding: 0px;
	position: relative;
	text-align: center;
	text-decoration: none;
	text-shadow: none;
	white-space: nowrap;
}

</style>

<p>
	<a href="http://code.shutterstock.com/rickshaw/">Rickshaw</a> |
	<a href="http://code.shutterstock.com/rickshaw/tutorial/introduction.html">Tutorial</a> |
	<a href="http://code.shutterstock.com/rickshaw/examples/">Examples</a> |
	<a href="https://github.com/shutterstock/rickshaw/">Code</a>
</p>

<div id="content">

	<form id="side_panel">
		<h1><?= $title ?></h1>
		<section><div id="legend"></div></section>
		<section>
			<div id="renderer_form" class="toggler">
				<input type="radio" name="renderer" id="area" value="area" checked>
				<label for="area">area</label>
				<input type="radio" name="renderer" id="bar" value="bar">
				<label for="bar">bar</label>
				<input type="radio" name="renderer" id="line" value="line">
				<label for="line">line</label>
				<input type="radio" name="renderer" id="scatter" value="scatterplot">
				<label for="scatter">scatter</label>
			</div>
		</section>
		<section>
			<div id="offset_form">
				<label for="stack">
					<input type="radio" name="offset" id="stack" value="zero" checked>
					<span>stack</span>
				</label>
				<label for="stream">
					<input type="radio" name="offset" id="stream" value="wiggle">
					<span>stream</span>
				</label>
				<label for="pct">
					<input type="radio" name="offset" id="pct" value="expand">
					<span>pct</span>
				</label>
				<label for="value">
					<input type="radio" name="offset" id="value" value="value">
					<span>value</span>
				</label>
			</div>
			<div id="interpolation_form">
				<label for="cardinal">
					<input type="radio" name="interpolation" id="cardinal" value="cardinal" checked>
					<span>cardinal</span>
				</label>
				<label for="linear">
					<input type="radio" name="interpolation" id="linear" value="linear">
					<span>linear</span>
				</label>
				<label for="step">
					<input type="radio" name="interpolation" id="step" value="step-after">
					<span>step</span>
				</label>
			</div>
		</section>
		<section>
			<h6>Smoothing</h6>
			<div id="smoother"></div>
		</section>
		<section></section>
	</form>

	<div id="chart_container">
		<div id="chart"></div>
		<div id="timeline"></div>
		<div id="slider"></div>
	</div>

</div>

<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {

	//Available color palettes: classic9, colorwheel, cool, munin, spectrum14, spectrum2000, spectrum2001
	var palette = new Rickshaw.Color.Palette({ scheme: 'munin' });

	var graph = new Rickshaw.Graph({
		//A reference to an HTML element that should hold the graph. Any other selector can be used. Ex: $("#chart").get(0); document.getElementById('chart'); ...
		/*required*/element: document.querySelector("#chart"),

		//Type of chart. Valid options are: area, stack, bar, line, and scatterplot
		//renderer: 'line',

		//Graph dimmensions in pixels. If not provided they fall back to the size of the element (if the element has width/height).
		width: 900,
		height: 500,

		//Line smoothing / interpolation method. Ex: cardinal (default), linear, step-after, basis, monotone, ... (see D3 docs for more)
		//interpolation: "cardinal",

		/*More available options
		min: ...
		min: 'auto',
		stroke: true,
		padding: ...*/

		// Array of objects containing series data to plot. Each object must have a 'data' array with 'x' and 'y' values.
		/*required*/series: [
				{
					name: "Oranges",
					data: [ { x: 0, y: 120 }, { x: 1*60*60, y: 890 }, { x: 2*60*60, y: 38 }, { x: 3*60*60, y: 250 }, { x: 4*60*60, y: 32 }, { x: 5*60*60, y: 850 } ],
					color: palette.color()
				},
				{
					name: "Apples",
					data: [ { x: 0, y: 80 }, { x: 1*60*60, y: 300 }, { x: 2*60*60, y: 200 }, { x: 3*60*60, y: 620 }, { x: 4*60*60, y: 133 }, { x: 5*60*60, y: 200 } ],
					color: palette.color()
				},
				{
					name: "Pineapples",
					data: [ { x: 0, y: 200 }, { x: 1*60*60, y: 390 }, { x: 2*60*60, y: 1000 }, { x: 3*60*60, y: 50 }, { x: 4*60*60, y: 730 }, { x: 5*60*60, y: 300 } ],
					color: palette.color()
				},
		]
	});
	graph.render();


	var hoverDetail = new Rickshaw.Graph.HoverDetail( {
		graph: graph
	});

	var legend = new Rickshaw.Graph.Legend( {
		graph: graph,
		element: document.getElementById('legend')

	});

	var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
		graph: graph,
		legend: legend
	});

	var order = new Rickshaw.Graph.Behavior.Series.Order( {
		graph: graph,
		legend: legend
	});

	var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
		graph: graph,
		legend: legend
	});

	var annotator = new Rickshaw.Graph.Annotate( {
		graph: graph,
		element: document.getElementById('timeline')
	});

	var slider = new Rickshaw.Graph.RangeSlider( {
		graph: graph,
		element: $('#slider')
	});

	var smoother = new Rickshaw.Graph.Smoother( {
		graph: graph,
		element: $('#smoother')
	});

	var ticksTreatment = 'glow';

	var xAxis = new Rickshaw.Graph.Axis.Time( {
		graph: graph,
		ticksTreatment: ticksTreatment
	});

	xAxis.render();

	var yAxis = new Rickshaw.Graph.Axis.Y( {
		graph: graph,
		tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
		ticksTreatment: ticksTreatment
	});

	yAxis.render();

	var controls = new RenderControls( {
		element: document.querySelector('form'),
		graph: graph
	});
});

</script>