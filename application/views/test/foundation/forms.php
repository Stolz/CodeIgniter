<hr/>

<a name="forms"></a>
<div class="row">
	<h1>Forms</h1>
	<p class="text-center">All inputs will run as wide as the column that contains them so for sizing them you only need to create row/column elements inside your form. However you can also size inputs using a column sizes class, like <code>.six.</code></p>

	<form class="custom">

		<h4>Row layouts</h4>

		<label>This is a label.</label>
		<input type="text" placeholder="Standard Input" />

		<label>Address</label>
		<input type="text" class="twelve" placeholder="Street" />

		<div class="row">
			<div class="six columns"><input type="text" placeholder="City" /></div>
			<div class="three columns"><input type="text" placeholder="State" /></div>
			<div class="three columns"><input type="text" placeholder="ZIP" /></div>
		</div>

		<h4>Errors</h4>
		<p>You can attach a class of <code>error</code> either to the individual elements or to the parent container:</p>

		<div class="four columns">
			<label class="error">This is a label.</label>
			<input type="text" class="error" placeholder="Standard Input" />
			<small class="error">Invalid entry</small>
		</div>
		<div class="four columns error text-center">
			<p><br/>&larr; Individual class | Parent class &rarr;</p>
		</div>
		<div class="four columns error">
			<label>This is a label.</label>
			<input type="text" placeholder="Standard Input" />
			<small>Invalid entry</small>
		</div>

		<h4>Custom fields</h4>
		<p>Attach a class of <code>custom</code> to the form in order to have custom radio/checkbox/dropdownw</p>

		<div class="row">
			<!--no extra markup. Can potential flash (waiting for js to load and replace your default elements)-->
			<div class="four columns">
				<label for="radio4"><input name="radio2" type="radio" id="radio4"> Radio Button 1</label>
				<label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Radio Button 2</label>
				<label for="radio6"><input name="radio2" type="radio" id="radio6"> Radio Button 3</label>
			</div>

			<!--Extra markup, no lag waiting for js-->
			<div class="four columns">
				<label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> Radio Button 1</label>
				<label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio checked"></span> Radio Button 2</label>
				<label for="radio3"><input name="radio1" type="radio" id="radio3" disabled style="display:none;"><span class="custom radio"></span> Radio Button 3</label>
			</div>

			<!--Extra markup, no lag waiting for js-->
			<div class="four columns">
				<label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> Label for Checkbox</label>
				<label for="checkbox2"><input type="checkbox" id="checkbox2" checked style="display: none;"><span class="custom checkbox checked"></span> Label for Checkbox</label>
				<label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3"> Label for Checkbox</label>
			</div>
		</div>

		<fieldset>
			<legend>Fieldset</legend>
			<label for="customDropdown">Dropdown Label</label>
			<select style="display:none;" id="customDropdown">
				<option SELECTED>This is a dropdown</option>
				<option>This is another option</option>
				<option>Look, a third option</option>
			</select>
		</fieldset>


		<a name="forms_float"></a>
		<h4>Floating labels</h4>
		<p><strong>Note:</strong> Fields have been sized usin column size class, not a row/column container</p>

		<div class="row">
			<div class="two mobile-one columns">
				<label class="right inline">Address Name:</label>
			</div>
			<div class="ten mobile-three columns">
				<input type="text" placeholder="e.g. Home" class="eight" />
			</div>
		</div>
		<div class="row">
			<div class="two mobile-one columns">
				<label class="right inline">City:</label>
			</div>
			<div class="ten mobile-three columns">
				<input type="text" class="four" />
			</div>
		</div>
		<div class="row">
			<div class="two mobile-one columns">
				<label class="right inline">ZIP:</label>
			</div>
			<div class="ten mobile-three columns">
				<input type="text" class="three" />
			</div>
		</div>


		<a name="prefix"></a>
		<h4>Prefix Postfix</h4>


		<label>Input with a prefix character</label>
		<div class="row">
			<div class="four columns">
				<div class="row collapse">
					<div class="two mobile-one columns">
						<span class="prefix">#</span>
					</div>
					<div class="ten mobile-three columns">
						<input type="text" />
					</div>
				</div>
			</div>
		</div>


		<label>Input with a postfix character</label>
		<div class="row">
			<div class="four columns">
				<div class="row collapse">
					<div class="ten mobile-three columns">
						<input type="text" />
					</div>
					<div class="two mobile-one columns">
						<span class="postfix">€</span>
					</div>
				</div>
			</div>
		</div>




		<label>Input with a postfix action (button)</label>
		<div class="row">
		<div class="five columns">
			<div class="row collapse">
			<div class="eight mobile-three columns">
				<input type="text" />
			</div>
			<div class="four mobile-one columns">
				<a href="#" class="postfix button expand">Search</a>
			</div>
			</div>
		</div>
		</div>


	</form>

</div>
