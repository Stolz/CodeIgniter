  <style>

  	.example .row, .example .row .column, .example .row .columns { background: #eee; height: 32px; line-height: 32px; }
  	.example .row { margin-bottom: 10px; }
  	.example .row .column, .example .row .columns { background: #ccc; border: 1px solid #bbb; }

  	@media handheld, only screen and (max-width: 767px) {
		.example .row { height: auto; }
		.example .row .column, .example .row .columns { margin-bottom: 10px; }
		.example .row .column:last-child, .example .row .columns:last-child { margin-bottom: 0; }
	}

  </style>

<h1 style="text-align:center">Grid</h1>

<div class="example">

	<div class="row">
		.row
	</div>

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

		<br /><br />


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

</div><!--example-->

<hr/>

		  <div class="row">
		 	<div class="twelve columns">
		 		<h3>Page Title (.twelve .columns)</h3>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="eight columns">
		 		<p>This is an eight column section, starting with this paragraph.<br />Below this you'll find another row with two sections.</p>
		 		<div class="row">
		 			<div class="six columns">
		 				<img alt="" src="http://placehold.it/300x200" />
		 				<h5>Another Section (.six.columns)</h5>
		 				<p>This is a nested row with two six column sections.</p>
		 			</div>
		 			<div class="six columns">
		 				<img alt="" src="http://placehold.it/300x200" />
		 				<h5>Another Section (.six.columns)</h5>
		 				<p>This is a nested row with two six column sections.</p>
		 			</div>
		 		</div>
		 		<p>Now the nested row has been closed, and we're back to the original eight column section.</p>
		 	</div>
		 	<div class="four columns">
		 		<p>And this is a four columns section to represent a sidebar (or similar element).</p>
		 		<div class="row">
		 			<div class="three columns">
		 				<img alt="" src="http://placehold.it/64x64" />
		 			</div>
		 			<div class="nine columns">
		 				This is a callout with three columns on the left (for the avatar) and nine columns here for the text. This row is inside the four column.
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="three columns">
		 				<img alt="" src="http://placehold.it/64x64" />
		 			</div>
		 			<div class="nine columns">
		 				This is a callout with three columns on the left (for the avatar) and nine columns here for the text. This row is inside the four column.
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="three columns">
		 				<img alt="" src="http://placehold.it/64x64" />
		 			</div>
		 			<div class="nine columns">
		 				This is a callout with three columns on the left (for the avatar) and nine columns here for the text. This row is inside the four column.
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="three columns">
		 				<img alt="" src="http://placehold.it/64x64" />
		 			</div>
		 			<div class="nine columns">
		 				This is a callout with three columns on the left (for the avatar) and nine columns here for the text. This row is inside the four column.
		 			</div>
		 		</div>
		 	</div>
		 </div>



<hr/>

		  <div class="row">
		 	<div class="twelve columns">
		 		<h3>On phones, columns become stacked.</h3>
		 		<p>That means this twelve column section will be the full width, and so will the three sections you see below.</p>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="four columns">
		 		<h5>Section 1</h5>
		 		<img alt="" src="http://placehold.it/300x100" />
		 		<p>This is a four column section (so three of them across add up to twelve). As noted above on mobile, these columns will be stacked on top of each other.</p>
		 	</div>
		 	<div class="four columns">
		 		<h5>Section 2</h5>
		 		<img alt="" src="http://placehold.it/300x100" />
		 		<p>This is another four column section which will be stacked on top of the others. The next section though&#8230;</p>
		 	</div>
		 	<div class="four columns">
		 		<h5>Section 3</h5>
		 		<p>Here we've used a block grid (.block-grid.three-up). These are perfect for similarly sized elements that you want to present in a grid even on mobile devices. If you view this on a phone (or small browser window) you can see what we mean.</p>
		 		<ul class="block-grid three-up">
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 			<li>
		 				<img alt="" src="http://placehold.it/128x128" />
		 			</li>
		 		</ul>
		 	</div>
		 </div>







<hr/><h1 style="text-align:center">Layout exaple</h1>

	<div class="row">
	  	<div class="eight columns">
	  		<h3>Ye Olde Game Reviews</h3>
	  	</div>
	  	<div class="four columns hide-for-small">
	  		<p class="right"><a href="#">Login</a> <a href="#" class="small blue nice radius button">Sign Up</a>
	  	</div>
	  	<div class="four columns show-for-small">
	  		<p><a href="#">Login</a> <a href="#" class="">Sign Up</a>
	  	</div>
	  </div>

	  <div class="row">
	  	<div class="twelve columns">
	  		<ul class="block-grid four-up">
	  			<li>
	  				<a href="#"><img alt="" src="http://placehold.it/240x300" /></a>
	  				<h5><a href="#">Pong</a></h5>
	  			</li>
	  			<li>
	  				<a href="#"><img alt="" src="http://placehold.it/240x300" /></a>
	  				<h5><a href="#">Galaga</a></h5>
	  			</li>
	  			<li>
	  				<a href="#"><img alt="" src="http://placehold.it/240x300" /></a>
	  				<h5><a href="#">Pitfall</a></h5>
	  			</li>
	  			<li>
	  				<a href="#"><img alt="" src="http://placehold.it/240x300" /></a>
	  				<h5><a href="#">Donkey Kong</a></h5>
	  			</li>
	  		</ul>
	  	</div>
	  </div>

	  <div class="row">
	  	<hr />
	  </div>

	  <div class="row">
	  	<div class="six columns">
	  		<h4>Gaming News</h4>
	  		<h5><a href="#">Games of the Future will have 16 Bits</a></h5>
	  		<p>We don't even know what it means, but we heard from a trusted source that games in the future will have 16 whole bits in them. Get ready, we guess? <a href="#">Read More &rarr;</a></p>

	  		<h5><a href="#">Does Nintendo Have Plans for Games?</a></h5>
	  		<p>Japenese playing card manufacturer Nintendo may have ideas about entering the gaming industry. We've heard rumors they are working on something called Famicon, but take it with a grain of salt. We imagine Atari will dominate games for the next 20 or 30 years. <a href="#">Read More &rarr;</a></p>
	  	</div>
	  	<div class="six columns">
	  		<h4>Top of the Charts</h4>
	  		<div class="row">
	  			<div class="two phone-one columns">
	  				<a href="#"><img alt="" src="http://placehold.it/80x100" /></a>
	  			</div>
	  			<div class="ten phone-three columns">
	  				<h5 class="right">$85k</h5>
	  				<h4><a href="#">Tetris</a></h4>
	  				<p>This newfangled game has you slotting together blocks in soviet Russia. Weird, but fun.</p>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="two phone-one columns">
	  				<a href="#"><img alt="" src="http://placehold.it/80x100" /></a>
	  			</div>
	  			<div class="ten phone-three columns">
	  				<h5 class="right">$52k</h5>
	  				<h4><a href="#">Pong</a></h4>
	  				<p>The original and best game ever. It's like Tennis, and so realistic!</p>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="two phone-one columns">
	  				<a href="#"><img alt="" src="http://placehold.it/80x100" /></a>
	  			</div>
	  			<div class="ten phone-three columns">
	  				<h5 class="right">$35k</h5>
	  				<h4><a href="#">Centipede</a></h4>
	  				<p>We're pretty sure this is a game about drugs, but it's on the charts, so here you go.</p>
	  			</div>
	  		</div>
	  	</div>
	  </div>










<hr/><h1 style="text-align:center">Layout exaple 2</h1>
	<div class="row">
	    <a href="prototyping.php" class="back two columns">&larr; About Prototyping</a>
	    <hr />
	  </div>
	</div>

	  <div id="exampleHeader">
	  	<div class="container">
	  		<div class="row">
	  			<div class="twelve columns">
	  				<p class="right"><a href="">Login</a></p>
	  				<h3>A Social Network</h3>
	  			</div>
	  		</div>
	  	</div>
	  </div>

	<div class="container">

	  <div class="row">
	  	<div class="seven columns">
	  		<div class="row mobile">
	  			<div class="two phone-one columns">
	  				<img alt="" src="http://placehold.it/200x200" />
	  			</div>
	  			<div class="ten phone-three columns">
	  				<p><strong><a href="">Jake Sully</a> said:</strong><br />Guys, check out this awesome website I found about trees. Man, I love trees. Big trees.</p>
	  				<div class="row">
	  					<div class="four phone-one columns">
	  						<img alt="" src="http://placehold.it/300x300" />
	  					</div>
	  					<div class="eight phone-three columns">
	  						<p><a href="#">Huge Trees and You: How to live in a giant tree</a><br />
	  						This is a website for people who live in gigantic trees. Learn about how to go from branch to branch, and where to keep your crazy screaming flying dragon thing.</p>
	  					</div>
	  				</div>


		  			<div class="comments">
		  				<div class="row">
		  					<div class="two phone-one columns">
		  						<img alt="" src="http://placehold.it/50x50" />
		  					</div>
		  					<div class="ten phone-three columns"><a href="">TheColonel</a> says "Don't get too comfy, I'm coming for that tree."</div>
		  				</div>
		  				<div class="row">
		  					<div class="two phone-one columns">
		  						<img alt="" src="http://placehold.it/50x50" />
		  					</div>
		  					<div class="ten phone-three columns"><a href="">Jake</a> says "You're such a tool."</div>
		  				</div>
		  			</div>
	  			</div>
	  		</div>
	  		<hr />

	  		<div class="row">
	  			<div class="two phone-one columns">
	  				<img alt="" src="http://placehold.it/200x200" />
	  			</div>
	  			<div class="ten phone-three columns">
	  				<p><strong><a href="">Jake Sully</a> said:</strong><br />Has anyone seen my wheelchair? This isn't funny guys.</p>


		  			<div class="comments">
		  				<div class="row">
		  					<div class="two phone-one columns">
		  						<img alt="" src="http://placehold.it/50x50" />
		  					</div>
		  					<div class="ten phone-three columns"><a href="">Jake</a> says "Found it. Whoever decided it'd be a fun game to kick it around with those walkers owes me a new one."</div>
		  				</div>
		  			</div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="four columns offset-by-one">
	  		<dl class="tabs">
			  <dd class="active"><a href="#recent" class="active">Recent Media</a></dd>
			  <dd><a href="#interesting">Top Media</a></dd>
			</dl>
			<ul class="tabs-content">
				<li id="recentTab" class="active">
					<h5>Photos</h5>
					<ul class="block-grid four-up">
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
					</ul>

					<h5>Videos</h5>
					<img alt="" src="http://placehold.it/400x300" />
					<strong><a href="#">A Sweet Video</a></strong> &bull; YouTube
				</li>
				<li id="interestingTab">
					<h5>Photos</h5>
					<ul class="block-grid four-up">
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
						<li><img alt="" src="http://placehold.it/100x100" /></li>
					</ul>

					<h5>Links</h5>
					<p><strong><a href="#">Huge Trees and You: How to live in a giant tree</a></strong> This is a website for people who live in gigantic trees. Learn about...</p>
				</li>
			</ul>
	  	</div>
<hr/>
	  </div>









<h1 style="text-align:center">Forms</h1>


<div class="row">


<form>

		<h4>Multiple Fields in a Row</h4>

		<label>Card Details:</label><br>

		<div class="row">
			<div class="three columns">
			<input type="text" placeholder="Name on Card" />
			</div>
			<div class="four columns">
			<input type="text" placeholder="Card Number" />
			</div>
			<div class="two columns">
			<input type="text" placeholder="Expiry (MM/YYYY)" />
			</div>
			<div class="three columns">
			<input type="text" placeholder="CVV (see back of card)" />
			</div>
		</div>

		<h4>A Label to the Left of a Field</h4>

		<div class="row">
			<div class="two columns">
			<label class="right inline">Name on Card:</label>
			</div>
			<div class="ten columns">
			<input type="text" />
			</div>
		</div>

		<h4>A Prefix Label</h4>

		<div class="row">
			<div class="four columns">
			<div class="row collapse">
				<div class="three columns">
				<span class="prefix">Prefix</span>
				</div>
				<div class="nine columns">
				<input type="text" />
				</div>
			</div>
			</div>
		</div>

		<h4>A Postfix Button</h4>

		<div class="row">
			<div class="four columns">
			<div class="row collapse">
				<div class="nine columns">
				<input type="text" />
				</div>
				<div class="three columns">
				<a href="#" class="postfix button">Button</a>
				</div>
			</div>
			</div>
		</div>

		<h4>An Invalid Field</h4>

		<div class="row">
		<div class="four columns">
			<input type="text" placeholder="Card Number" class="error" />
			<small class="error">Invalid card number</small>
		</div>
		</div>

		</form>

		<h4>Custom Inputs</h4>

		<form class="custom" method="get" style="margin-bottom: 150px">

		<h5>Checkbox</h5>

		<label for="myCheckbox">
			<input name="myCheckbox" type="checkbox" id="myCheckbox"> I Agree
		</label>

		<h5>Radio Button</h5>

		<label for="myRadio">
			<input name="myRadio" type="radio" id="myRadio"> SuperWidget
		</label>

		<h5>Select Menu</h5>

		<select name="mySelect">
			<option>Please select...</option>
			<option>Option #1</option>
			<option>Option #2</option>
			<option>Option #3</option>
		</select>

		</form>


	<div class="six columns centered">
		<form>
		<label>This is a label.</label>
		<input type="text" placeholder="Standard Input" />

		<label>Address</label>
		<input type="text" class="twelve" placeholder="Street" />
		<div class="row">
			<div class="six columns">
			<input type="text" placeholder="City" />
			</div>
			<div class="three columns">
			<input type="text" placeholder="State" />
			</div>
			<div class="three columns">
			<input type="text" placeholder="ZIP" />
			</div>
		</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="six columns centered">

		<form class="custom">
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
			<input type="text" class="eight" />
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
		<div class="row">
			<label for="radio1">
			<input name="radio1" type="radio" id="radio1" style="display:none;">
			<span class="custom radio"></span> Radio Button 1
			</label>

			<label for="radio2">
			<input name="radio1" type="radio" id="radio2" style="display:none;">
			<span class="custom radio checked"></span> Radio Button 2
			</label>

			<label for="radio3">
			<input name="radio1" type="radio" id="radio3" disabled style="display:none;">
			<span class="custom radio"></span> Radio Button 3
			</label>



			<label for="checkbox1">
			<input type="checkbox" id="checkbox1" style="display: none;">
			<span class="custom checkbox"></span> Label for Checkbox
			</label>

			<label for="checkbox2">
			<input type="checkbox" id="checkbox2" style="display: none;">
			<span class="custom checkbox"></span> Label for Checkbox
			</label>

			<label for="checkbox3">
			<input type="checkbox" id="checkbox3" style="display: none;">
			<span class="custom checkbox"></span> Label for Checkbox
			</label>


		</div>
		</form>

	</div>
</div>

<div class="row">
	<div class="six columns centered">

		<form>
			<fieldset>
				<legend>Large Form Example</legend>

				<div class="row">
					<div class="five columns">

					<label>Name</label>
					<input type="text">

					<label>Occupation</label>
					<input type="text">

					<label>Twitter</label>
					<div class="row collapse">
						<div class="two mobile-one columns">
						<span class="prefix">@</span>
						</div>
						<div class="ten mobile-three columns">
						<input placeholder="foundationzurb" type="text">
						</div>
					</div>

					<label>URL</label>
					<div class="row collapse">
						<div class="nine mobile-three columns">
						<input placeholder="foundation.zurb" type="text">
						</div>
						<div class="three mobile-one columns">
						<span class="postfix">.com</span>
						</div>
					</div>

					</div>

					<div class="five columns">

					<label class="error">Field with Error</label>
					<input class="error" type="text">
					<small class="error">Invalid entry</small>

					<div class="error">
						<label>Another Error</label>
						<input type="text">
						<small>Invalid entry</small>
					</div>

					</div>
				</div>

				<label>Address</label>
				<input placeholder="Street (e.g. 123 Awesome St.)" type="text">

				<div class="row">
					<div class="six columns">
					<input placeholder="City" type="text">
					</div>
					<div class="two columns">
					<select>
						<option>CA</option>
					</select>
					</div>
					<div class="four columns">
					<input placeholder="ZIP" type="text">
					</div>
				</div>

				</fieldset>
		</form>

	</div>
<hr/>
</div>


<h1 style="text-align:center">Typography</h1>
<div class="row">
<h1>An H1 heading</h1>
	<h2>An H2 heading</h2>
	<h3>An H3 heading</h3>
	<h3 class="subheader">An H3 subheading</h3>
	<h3>An H3 heading with a <small>small segment</small></h3>

	<h4>A list with a <code>disc</code> class:</h4>
	<ul class="disc">
	<li>List item</li>
	<li>List item</li>
	</ul>

	<h4>A list with a <code>circle</code> class:</h4>
	<ul class="circle">
	<li>List item</li>
	<li>List item</li>
	</ul>

	<h4>A list with a <code>square</code> class:</h4>
	<ul class="square">
	<li>List item</li>
	<li>List item</li>
	</ul>

	<h4><code>blockquote</code> and <code>cite</code> elements:</h4>
	<blockquote>
	Everywhere is within walking distance if you have the time.
	<cite>Steven Wright</cite>
	</blockquote>

	<h4>Print styles:</h4>
	<p class="print-only">This paragraph only appears when printing the page.</p>
	<p class="hide-on-print">This paragraph only appears when viewing the page on-screen.</p>



	<h1>h1. This is a very large header.</h1>

	<h2>h2. This is a large header.</h2>

	<h3>h3. This is a medium header.</h3>

	<h4>h4. This is a moderate header.</h4>

	<h5>h5. This is small header.</h5>

	<h6>h6. This is very small header.</h6>

	<p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing
	to match the overall vertical rhythm. To show what a paragraph looks like this needs a
	little more content so, let's see&hellip; did you know that there are storms occurring
	on Jupiter that are larger than the Earth? That's pretty cool.</p>
	<hr />

	<h4>Header Styles</h4>

	<p>Foundation 3 includes a number of different styles and treatments for typographic
	elements, such as subheaders or small header segments.</p>

	<h2>This is a very large main header.</h2>

	<h4 class="subheader">This is a smaller subheader.</h4>

	<h3>This is a large header. <small>This is a small segment of that
	header.</small></h3>

	<hr />

	<h4>Links</h4>

	<p>Where would we be without links? Not in hypertext, that's for sure! Ah, nerd humor.
	Anyways. Links are very standard, and the color is preset or controlled via the
	_base.scss file as the main color.</p>

	<h2><a href="#">This is a header link.</a></h2>

	<h3><a href="#">This is a header link.</a></h3>

	<h4><a href="#">This is a header link.</a></h4>

	<h5><a href="#">This is a header link.</a></h5>

	<p><a href="#">This is a standard inline paragraph link.</a></p>
	<hr />

	<h4>Lists</h4>

	<p>Lists are helpful for, well, lists of things. Foundation 3 uses <a href=
	"http://necolas.github.com/normalize.css/">Normalize.css</a> so lists won't be reset as
	they were in previous versions. However, we still provide a few simple affordances for
	lists.</p>

	<div class="row">
		<div class="four columns">
		<h5>ul.disc</h5>

		<ul class="disc">
			<li>List item with a much longer description or more content.</li>

			<li>List item</li>

			<li>List item

			<ul>
				<li>Nested List Item</li>

				<li>Nested List Item</li>

				<li>Nested List Item</li>
			</ul>
			</li>

			<li>List item</li>

			<li>List item</li>

			<li>List item</li>
		</ul>
		</div>

		<div class="four columns">
		<h5>ul.circle</h5>

		<ul class="circle">
			<li>List item with a much longer description or more content.</li>

			<li>List item</li>

			<li>List item

			<ul>
				<li>Nested List Item</li>

				<li>Nested List Item</li>

				<li>Nested List Item</li>
			</ul>
			</li>

			<li>List item</li>

			<li>List item</li>

			<li>List item</li>
		</ul>
		</div>

		<div class="four columns">
		<h5>ul.square</h5>

		<ul class="square">
			<li>List item with a much longer description or more content.</li>

			<li>List item</li>

			<li>List item

			<ul>
				<li>Nested List Item</li>

				<li>Nested List Item</li>

				<li>Nested List Item</li>
			</ul>
			</li>

			<li>List item</li>

			<li>List item</li>

			<li>List item</li>
		</ul>
		</div>
	</div>
	<hr />

	<h4>Blockquotes</h4>

	<p>Sometimes other people say smart things, and you may want to mention that through a
	blockquote callout. We've got you covered.</p>

	<blockquote>
		I do not fear computers. I fear the lack of them. <cite>Isaac Asimov</cite>
	</blockquote>
</div>




<h1 style="text-align:center">Navigation</h1>

<div class="row">


	<h4>A Simple Nav Bar</h4>

	<ul class="nav-bar">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	</ul>

	<h4>A Vertical Nav Bar</h4>

	<ul class="nav-bar vertical">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">Products</a></li>
	</ul>

	<h4>A Nav Bar with a Dropdown List</h4>

	<ul class="nav-bar">
		<li class="active"><a href="#">Home</a></li>
		<li class="has-flyout">
			<a href="#">Products</a>
			<a href="#" class="flyout-toggle"><span> </span></a>
			<ul class="flyout">
				<li><a href="#">SuperWidget</a></li>
				<li><a href="#">MegaWidget</a></li>
				<li><a href="#">WonderWidget</a></li>
			</ul>
		</li>
	</ul>

	<h4>A Nav Bar with an Arbitrary Content Dropdown</h4>

	<ul class="nav-bar">
		<li class="active"><a href="#">Home</a></li>
		<li class="has-flyout">
			<a href="#">Products</a>
			<a href="#" class="flyout-toggle"><span> </span></a>
			<div class="flyout">
			<h4>Arbitrary Content Dropdown</h4>
			<p>This dropdown can contain anything you like!</p>
			</div>
		</li>
	</ul>

	<h4>Side Nav with a Divider</h4>

	<div class="row">
	<div class="two columns">
		<ul class="side-nav">
		<li class="active"><a href="#">SuperWidget</a></li>
		<li><a href="#">MegaWidget</a></li>
		<li class="divider"></li>
		<li><a href="#">WonderWidget</a></li>
		</ul>
	</div>
	</div>

	<h4>Sub Nav</h4>

	<dl class="sub-nav">
	<dt>Show:</dt>
	<dd class="active"><a href="#">All Products</a></dd>
	<dd><a href="#">Most Popular</a></dd>
	<dd><a href="#">Highest Rated</a></dd>
	</dl>

	<h4>Pagination</h4>

	<ul class="pagination">
	<li class="unavailable"><a href="">&laquo;</a></li>
	<li class="current"><a href="">1</a></li>
	<li><a href="">2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">&raquo;</a></li>
	</ul>




	<div class="nine column">
		<ul class="nav-bar">
			<li class="active"><a href="#">aaaaaaa</a></li>
			<li class="has-flyout">
				<a href="#">bbbbbbbbbb</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="#">ccccccccccccc</a></li>
					<li><a href="#">ddddddddd</a></li>
					<li><a href="#">eeeeeeeeee</a></li>
				</ul>
			</li>
			<li class="has-flyout">
				<a href="#">ffffffffff</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="#">ggggggggggg</a></li>
					<li><a href="#">hhhhhhhhhhh</a></li>
					<li><a href="#">iiiiiiiii</a></li>
					<li><a href="#">jjjjjjjjjjjjj</a></li>
					<li><a href="#">kkkkkkkkkkkkkk</a></li>
				</ul>
			</li>
		</ul>
	</div>



	<div class="two column">
		<ul class="nav-bar vertical">
			<li class="active"><a href="#">aaaaaaa</a></li>
			<li class="has-flyout">
				<a href="#">bbbbbbbbbb</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="#">ccccccccccccc</a></li>
					<li><a href="#">ddddddddd</a></li>
					<li><a href="#">eeeeeeeeee</a></li>
				</ul>
			</li>
			<li class="has-flyout">
				<a href="#">ffffffffff</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="#">ggggggggggg</a></li>
					<li><a href="#">hhhhhhhhhhh</a></li>
					<li><a href="#">iiiiiiiii</a></li>
					<li><a href="#">jjjjjjjjjjjjj</a></li>
					<li><a href="#">kkkkkkkkkkkkkk</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="one column">
		<ul class="side-nav">
			<li class="active"><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li class="divider"></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
		</ul>
	</div>

</div>






















<div class="row">
<hr />

	<h4>Button styles:</h4>

	<button class="button">Standard Button</button>
	<button class="tiny button">Tiny Button</button>
	<button class="small button">Small Button</button>
	<button class="medium button">Medium Button</button>
	<button class="large button">Large Button</button>
	<button class="radius button">Radius Button</button>
	<button class="round button">Round Button</button>
	<button class="success button">Success Button</button></td>
	<button class="alert button">Alert Button</button>
	<button class="secondary button">Secondary Button</button>

	<h4>Simple button group:</h4>

	<ul class="button-group">
	<li><a href="#" class="button">Button 1</a></li>
	<li><a href="#" class="button">Button 2</a></li>
	<li><a href="#" class="button">Button 3</a></li>
	</ul>

	<h4>Radius button group:</h4>

	<ul class="radius button-group">
	<li><a href="#" class="radius button">Button 1</a></li>
	<li><a href="#" class="radius button">Button 2</a></li>
	<li><a href="#" class="radius button">Button 3</a></li>
	</ul>

	<h4>Rounded button group:</h4>

	<ul class="rounded button-group">
	<li><a href="#" class="rounded button">Button 1</a></li>
	<li><a href="#" class="rounded button">Button 2</a></li>
	<li><a href="#" class="rounded button">Button 3</a></li>
	</ul>

	<h4>Even button group:</h4>

	<ul class="even button-group three-up">
	<li><a href="#" class="button">Button 1</a></li>
	<li><a href="#" class="button">Button 2</a></li>
	<li><a href="#" class="button">Button 3</a></li>
	</ul>

	<h4>Button bar:</h4>

	<div class="button-bar">

	<ul class="button-group">
		<li><a href="#" class="button">Button 1</a></li>
		<li><a href="#" class="button">Button 2</a></li>
		<li><a href="#" class="button">Button 3</a></li>
	</ul>

	<ul class="button-group">
		<li><a href="#" class="secondary button">Button 4</a></li>
		<li><a href="#" class="secondary button">Button 5</a></li>
		<li><a href="#" class="secondary button">Button 6</a></li>
	</ul>

	</div>

	<h4>Dropdown button:</h4>

	<div href="#" class="button dropdown">
	Choose an option...
	<ul>
		<li><a href="#">Option #1</a></li>
		<li><a href="#">Option #2</a></li>
		<li class="divider"></li>
		<li><a href="#">Option #3</a></li>
	</ul>
	</div>

	<h4>Split button:</h4>

	<div href="#" class="button split dropdown">
	<a href="#">Press me or choose an option...</a>
	<span></span>
	<ul>
		<li><a href="#">Option #1</a></li>
		<li><a href="#">Option #2</a></li>
		<li class="divider"></li>
		<li><a href="#">Option #3</a></li>
	</ul>
	</div>
</div>







<div class="row">

	<div class="twelve columns">


	<h4>Basic Tabs</h4>

	<dl class="tabs">
		<dd class="active"><a href="#tab1">Tab 1 Label</a></dd>
		<dd><a href="#tab2">Tab 2 Label</a></dd>
		<dd><a href="#tab3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content">
		<li class="active" id="tab1Tab">Tab 1 Content</li>
		<li id="tab2Tab">Tab 2 Content</li>
		<li id="tab3Tab">Tab 3 Content</li>
	</ul>

	<h4>Full-Width Tabs</h4>

	<dl class="tabs three-up">
		<dd class="active"><a href="#tabFull1">Tab 1 Label</a></dd>
		<dd><a href="#tabFull2">Tab 2 Label</a></dd>
		<dd><a href="#tabFull3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content">
		<li class="active" id="tabFull1Tab">Tab 1 Content</li>
		<li id="tabFull2Tab">Tab 2 Content</li>
		<li id="tabFull3Tab">Tab 3 Content</li>
	</ul>

	<h4>Contained Tabs</h4>

	<dl class="tabs contained">
		<dd class="active"><a href="#tabContained1">Tab 1 Label</a></dd>
		<dd><a href="#tabContained2">Tab 2 Label</a></dd>
		<dd><a href="#tabContained3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content contained">
		<li class="active" id="tabContained1Tab">Tab 1 Content</li>
		<li id="tabContained2Tab">Tab 2 Content</li>
		<li id="tabContained3Tab">Tab 3 Content</li>
	</ul>

	<h4>Pill Tabs</h4>

	<dl class="tabs pill">
		<dd class="active"><a href="#tabPill1">Tab 1 Label</a></dd>
		<dd><a href="#tabPill2">Tab 2 Label</a></dd>
		<dd><a href="#tabPill3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content">
		<li class="active" id="tabPill1Tab">Tab 1 Content</li>
		<li id="tabPill2Tab">Tab 2 Content</li>
		<li id="tabPill3Tab">Tab 3 Content</li>
	</ul>

	<h4>Vertical Tabs</h4>

	<dl class="tabs vertical">
		<dd class="active"><a href="#tabVertical1">Tab 1 Label</a></dd>
		<dd><a href="#tabVertical2">Tab 2 Label</a></dd>
		<dd><a href="#tabVertical3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content">
		<li class="active" id="tabVertical1Tab">Tab 1 Content</li>
		<li id="tabVertical2Tab">Tab 2 Content</li>
		<li id="tabVertical3Tab">Tab 3 Content</li>
	</ul>

	<h4>Mobile Tabs</h4>

	<dl class="tabs mobile">
		<dd class="active"><a href="#tabMobile1">Tab 1 Label</a></dd>
		<dd><a href="#tabMobile2">Tab 2 Label</a></dd>
		<dd><a href="#tabMobile3">Tab 3 Label</a></dd>
	</dl>

	<ul class="tabs-content">
		<li class="active" id="tabMobile1Tab">Tab 1 Content</li>
		<li id="tabMobile2Tab">Tab 2 Content</li>
		<li id="tabMobile3Tab">Tab 3 Content</li>
	</ul>

	</div>

</div>




















<div class="row">

	<div class="twelve columns">
	<hr />
	<h1>Foundation: Misc Elements Demo</h1>



	<h4>Visibility Classes</h4>

	<p>(Try resizing your browser)</p>

	<ul>
		<li class="show-for-xlarge"><code>show-for-xlarge</code> triggered</li>
		<li class="show-for-large"><code>show-for-large</code> triggered</li>
		<li class="show-for-large-up"><code>show-for-large-up</code> triggered</li>
		<li class="show-for-medium"><code>show-for-medium</code> triggered</li>
		<li class="show-for-medium-down"><code>show-for-medium-down</code> triggered</li>
		<li class="show-for-small"><code>show-for-small</code> triggered</li>
		<li class="hide-for-xlarge"><code>hide-for-xlarge</code> triggered</li>
		<li class="hide-for-large"><code>hide-for-large</code> triggered</li>
		<li class="hide-for-large-up"><code>hide-for-large-up</code> triggered</li>
		<li class="hide-for-medium"><code>hide-for-medium</code> triggered</li>
		<li class="hide-for-medium-down"><code>hide-for-medium-down</code> triggered</li>
		<li class="hide-for-small"><code>hide-for-small</code> triggered</li>
		<li class="show-for-landscape"><code>show-for-landscape</code> triggered</li>
		<li class="show-for-portrait"><code>show-for-portrait</code> triggered</li>
		<li class="show-for-touch"><code>show-for-touch</code> triggered</li>
		<li class="hide-for-touch"><code>hide-for-touch</code> triggered</li>
	</ul>


	<h4>Alerts</h4>

	<div class="alert-box">
		A standard alert
		<a href="#" class="close">&times;</a>
	</div>

	<div class="alert-box success">
		A "success" alert
		<a href="" class="close">&times;</a>
	</div>

	<div class="alert-box alert">
		An "alert" alert
		<a href="" class="close">&times;</a>
	</div>

	<div class="alert-box secondary">
		A "secondary" alert
		<a href="" class="close">&times;</a>
	</div>

	<h4>Labels</h4>

	<p>Here's
		a <span class="label">regular label</span>,
		a <span class="radius label">radius label</span>,
		a <span class="round label">round label</span>,
		a <span class="secondary label">secondary label</span>,
		an <span class="alert label">alert label</span>, and
		a <span class="success label">success label</span>.
	</p>

	<h4>Tooltips</h4>

	<p>(Hover your mouse over the text, or tap on the text)</p>
	<p>Here's
		a <span title="Standard Tooltip">standard tooltip</span>,
		a <span class="has-tip" title="Foundation-Enhanced Tooltip">Foundation-enhanced tooltip</span>,
		a <span class="has-tip noradius" title="Square-Cornered Tooltip">square-cornered tooltip</span>,
		a <span class="has-tip tip-top" title="Top-Aligned Tooltip">top-aligned tooltip</span>,
		a <span class="has-tip tip-left" title="Left-Aligned Tooltip">left-aligned tooltip</span>,
		a <span class="has-tip tip-right" title="Right-Aligned Tooltip">right-aligned tooltip</span>, and
		a <span class="has-tip" data-width="250" title="Custom-Width Tooltip">custom-width tooltip</span>.
	</p>

	<h4>Accordion</h4>

	<ul class="accordion">
		<li class="active">
		<div class="title">
			<h5>Block #1 Title</h5>
		</div>
		<div class="content">
			<p>Block #1 Content:
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		</li>
		<li>
		<div class="title">
			<h5>Block #2 Title</h5>
		</div>
		<div class="content">
			<p>Block #2 Content:
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		</li>
		<li>
		<div class="title">
			<h5>Block #3 Title</h5>
		</div>
		<div class="content">
			<p>Block #3 Content:
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		</li>
	</ul>

	<h4>Panels</h4>

	<div class="panel">
		<p>A regular panel.</p>
	</div>

	<div class="panel callout">
		<p>A callout panel.</p>
	</div>

	<div class="panel radius">
		<p>A rounded-corner panel.</p>
	</div>

	</div>

</div>