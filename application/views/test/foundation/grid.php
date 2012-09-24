<style>
.example .row, .example .row .column, .example .row .columns { background: #eee; height: 32px; line-height: 32px; }
.example .row .column, .example .row .columns { background: #ccc; border: 1px solid #bbb; }
.example .row { margin-bottom: 10px; }
</style>

<a name="grid"></a>
<div class="row">
	<h2>The Grid</h2>
	<h3 class="subheader">Up to 12 columns, nestable</h3>
</div>


<div class="example">

	<p class="text-center">All columns must be wrapped by a .row container</p>

	<div class="row">
		.row
	</div>


	<br/><p class="text-center">Two columns per row...</p>


	<div class="row">
		<div class="two columns">.two</div>
		<div class="ten columns">.ten.columns</div>
	</div>
	<div class="row">
		<div class="three columns">.three.columns</div>
		<div class="nine columns">.nine.columns</div>
	</div>
	<div class="row">
		<div class="four columns">.four.columns</div>
		<div class="eight columns">.eight.columns</div>
	</div>
	<div class="row">
		<div class="five columns">.five.columns</div>
		<div class="seven columns">.seven.columns</div>
	</div>
	<div class="row">
		<div class="six columns">.six.columns</div>
		<div class="six columns">.six.columns</div>
	</div>
	<div class="row">
		<div class="seven columns">.seven.columns</div>
		<div class="five columns">.five.columns</div>
	</div>
	<div class="row">
		<div class="eight columns">.eight.columns</div>
		<div class="four columns">.four.columns</div>
	</div>
	<div class="row">
		<div class="nine columns">.nine.columns</div>
		<div class="three columns">.three.columns</div>
	</div>
	<div class="row">
		<div class="ten columns">.ten.columns</div>
		<div class="two columns">.two</div>
	</div>




	<a name="grid_nperrow"></a><br/><p class="text-center">... or N columns per row</p>




	<div class="row">
		<div class="twelve columns">.twelve.columns</div>
	</div>
	<div class="row">
		<div class="six columns">.six.columns</div>
		<div class="six columns">.six.columns</div>
	</div>
	<div class="row">
		<div class="four columns">.four.columns</div>
		<div class="four columns">.four.columns</div>
		<div class="four columns">.four.columns</div>
	</div>
	<div class="row">
		<div class="three columns">.three.columns</div>
		<div class="three columns">.three.columns</div>
		<div class="three columns">.three.columns</div>
		<div class="three columns">.three.columns</div>
	</div>
	<div class="row">
		<div class="two columns">.two.columns</div>
		<div class="two columns">.two.columns</div>
		<div class="two columns">.two.columns</div>
		<div class="two columns">.two.columns</div>
		<div class="two columns">.two.columns</div>
		<div class="two columns">.two.columns</div>
	</div>


	<a name="grid_don_float_last"></a><br/><p class="text-center">Last column always floats to the right. To avoid this behavior add the class "end"</p>


	<div class="row">
		<div class="four columns">.four.columns</div>
		<div class="four columns">.four.columns</div>
	</div>
	<div class="row">
		<div class="four columns">.four.columns</div>
		<div class="four columns end">.four.columns.end</div>
	</div>



	<a name="grid_offset"></a><br/><p class="text-center">Offsets</p>



	<div class="row">
		<div class="one columns">.one</div>
		<div class="eleven columns">.eleven.columns</div>
	</div>
	<div class="row">
		<div class="one columns">.one</div>
		<div class="ten columns offset-by-one">.ten.columns.offset-by-one</div>
	</div>
	<div class="row">
		<div class="one columns">.one</div>
		<div class="nine columns offset-by-two">.nine.columns.offset-by-two</div>
	</div>
	<div class="row">
		<div class="one columns">.one</div>
		<div class="eight columns offset-by-three">.eight.columns.offset-by-three</div>
	</div>
	<div class="row">
		<div class="seven columns offset-by-five">.seven.columns.offset-by-five</div>
	</div>
	<div class="row">
		<div class="six columns offset-by-six">.six.columns.offset-by-six</div>
	</div>
	<div class="row">
		<div class="five columns offset-by-seven">.five.columns.offset-by-seven</div>
	</div>
	<div class="row">
		<div class="four columns offset-by-eight">.four.columns.offset-by-eight</div>
	</div>



	<a name="grid_centered"></a><br/><p class="text-center">Centered columns (only the column layout, not the text align)</p>



	<div class="row">
		<div class="one columns centered">.one.columns.centered</div>
	</div>
	<div class="row">
		<div class="two columns centered">.two.columns.centered</div>
	</div>
	<div class="row">
		<div class="three columns centered">.three.columns.centered</div>
	</div>
	<div class="row">
		<div class="four columns centered">.four.columns.centered</div>
	</div>
	<div class="row">
		<div class="five columns centered">.five.columns.centered</div>
	</div>
	<div class="row">
		<div class="six columns centered">.six.columns.centered</div>
	</div>
	<div class="row">
		<div class="seven columns centered">.seven.columns.centered</div>
	</div>
	<div class="row">
		<div class="eight columns centered">.eight.columns.centered</div>
	</div>
	<div class="row">
		<div class="nine columns centered">.nine.columns.centered</div>
	</div>
	<div class="row">
		<div class="ten columns centered">.ten.columns.centered</div>
	</div>
	<div class="row">
		<div class="eleven columns centered">.eleven.columns.centered</div>
	</div>
	<div class="row">
		<div class="twelve columns centered">.twelve.columns.centered</div>
	</div>


	<a name="grid_ordering"></a><br/><p class="text-center">Ordering: You can make columns to be shown in a different order than they appear in the code</p>


	<div class="row">
		<div class="two columns push-ten">.two.columns</div>
		<div class="ten columns pull-two">.ten.columns (last)
	</div>
	</div>
	<div class="row">
		<div class="three columns push-nine">.three.columns</div>
		<div class="nine columns pull-three">.nine.columns (last)</div>
	</div>
	<div class="row">
		<div class="four columns push-eight">.four.columns</div>
		<div class="eight columns pull-four">.eight.columns (last)</div>
	</div>
	<div class="row">
		<div class="five columns push-seven">.five.columns</div>
		<div class="seven columns pull-five">.seven.columns (last)</div>
	</div>
	<div class="row">
		<div class="six columns push-six">.six.columns</div>
		<div class="six columns pull-six">.six.columns (last)</div>
	</div>
	<div class="row">
		<div class="seven columns push-five">.seven.columns</div>
		<div class="five columns pull-seven">.five.columns (last)</div>
	</div>
	<div class="row">
		<div class="eight columns push-four">.eight.columns</div>
		<div class="four columns pull-eight">.four.columns (last)</div>
	</div>
	<div class="row">
		<div class="nine columns push-three">.nine.columns</div>
		<div class="three columns pull-nine">.three.columns (last)</div>
	</div>
	<div class="row">
		<div class="ten columns push-two">.ten.columns</div>
		<div class="two columns pull-ten">.two (last)</div>
	</div>



	<a name="grid_mobile"></a><br/><p class="text-center">On Mobile, columns become stacked. They all will be the full width no matter what kind they were before. To keep an up to 4 columns layout in mobile add the class .mobile-N</p>



	<div class="row">
		<div class="three mobile-one columns">.three.mobile-one.columns</div>
		<div class="nine mobile-three columns">.nine.mobile-three.columns</div>
	</div>
	<div class="row">
		<div class="six mobile-two columns">.six.mobile-two.columns</div>
		<div class="six mobile-two columns">.six.mobile-two.columns</div>
	</div>
	<div class="row">
		<div class="nine mobile-three columns">.nine.mobile-three.columns</div>
		<div class="three mobile-one columns">.three.mobile-one.columns</div>
	</div>


</div><!--example-->