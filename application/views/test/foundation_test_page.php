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
	  </div>









<h1 style="text-align:center">Forms</h1>


<div class="row">
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
</div>