<style>
#chart_container {
	display: inline-block;
	font-family: Arial, Helvetica, sans-serif;
}
#chart {
	float: left;
	width:100;
}
#legend {
	float: left;
	margin-left: 15px;
}
#y_axis {
	float: left;
	width: 40px;
}

/* If .labe conflicts with Zurb Foundation or Twitter Bootstrap then reset the styles as follows
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
}  */

</style>


<h2><?= $title ?></h2>

<div id="chart_container">
	<div id="y_axis"></div>
	<div id="chart"></div>
	<div id="legend"></div>
</div>

<p>
	<a href="http://code.shutterstock.com/rickshaw/">Rickshaw</a> |
	<a href="http://code.shutterstock.com/rickshaw/tutorial/introduction.html">Tutorial</a> |
	<a href="http://code.shutterstock.com/rickshaw/examples/">Examples</a> |
	<a href="https://github.com/shutterstock/rickshaw/">Code</a>
</p>



<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {

	//Available color palettes: classic9, colorwheel, cool, munin, spectrum14, spectrum2000, spectrum2001
	var palette = new Rickshaw.Color.Palette(/*{ scheme: 'spectrum14' }*/);

	var graph = new Rickshaw.Graph({

		//A reference to an HTML element that should hold the graph. Any other selector can be used. Ex: $("#chart").get(0); document.getElementById('chart'); ...
		/*required*/element: document.querySelector("#chart"),

		//Type of chart. Valid options are: area, stack, bar, line, and scatterplot
		renderer: 'line',

		//Graph dimmensions in pixels. If not provided they fall back to the size of the element (if the element has width/height).
		width: 750,
		height: 240,

		//Line smoothing / interpolation method. Ex: cardinal (default), linear, step-after, basis, monotone, ... (see D3 docs for more)
		interpolation: "cardinal",

		/*More available options
		min: ...
		max: ...
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

	var x_axis = new Rickshaw.Graph.Axis.Time({ graph: graph });

	var y_axis = new Rickshaw.Graph.Axis.Y({
		graph: graph,
		orientation: 'left',
		tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
		element: document.getElementById('y_axis'),
	});

	var legend = new Rickshaw.Graph.Legend({
		element: document.querySelector('#legend'),
		graph: graph
	});

	var hoverDetail = new Rickshaw.Graph.HoverDetail({
		graph: graph
	});

// 	var shelving = new Rickshaw.Graph.Behavior.Series.Toggle({
// 		graph: graph,
// 		legend: legend
// 	});

	graph.render();

});
</script>
