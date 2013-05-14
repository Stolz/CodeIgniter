<div class="row">
	<div class="large-12 columns">
		<h3>Split buttons</h3>

		<p>They are build using the Dropdown pluggin and accept the same options and markup. Again you can use <code>a</code>, <code>button</code> or <code>input type="submit"</code> elements.</p>

		<a class="button split tiny" href="javascript:void(0)">Tiny dropdown <span data-dropdown="split-button-1"></span></a><br/>

		<a class="button split small secondary radius" href="javascript:void(0)">Small radius dropdown Button <span data-dropdown="split-button-2"></span></a><br/>

		<a class="button split alert round" href="javascript:void(0)">Round dropdown Button <span data-dropdown="split-button-3"></span></a><br/>

		<a class="button split large success " href="javascript:void(0)">Large dropdown Button <span data-dropdown="split-button-4"></span></a><br/>

		<a class="button split large expand" href="javascript:void(0)">Large expand dropdown Button <span data-dropdown="split-button-5"></span></a><br/>

		<ul id="split-button-1" class="f-dropdown tiny" data-dropdown-content>
			<li><a href="javascript:void(0)">dropdown-content has class tiny</a></li>
			<li><a href="javascript:void(0)">This is a link 1</a></li>
			<li><a href="javascript:void(0)">This is another 1</a></li>
			<li><a href="javascript:void(0)">Yet another 1</a></li>
		</ul>

		<ul id="split-button-2" class="f-dropdown small" data-dropdown-content>
			<li><a href="javascript:void(0)">dropdown-content has class small</a></li>
			<li><a href="javascript:void(0)">This is a link 2</a></li>
			<li><a href="javascript:void(0)">This is another 2</a></li>
			<li><a href="javascript:void(0)">Yet another 2</a></li>
		</ul>

		<ul id="split-button-3" class="f-dropdown medium" data-dropdown-content>
			<li><a href="javascript:void(0)">dropdown-content has class medium (default)</a></li>
			<li><a href="javascript:void(0)">This is a link 3</a></li>
			<li><a href="javascript:void(0)">This is another 3</a></li>
			<li><a href="javascript:void(0)">Yet another 3</a></li>
		</ul>

		<div id="split-button-4" class="f-dropdown large" data-dropdown-content>
			<p>dropdown-content has class large</p>
			<img src="https://www.google.com/images/srpr/logo4w.png" />
			<p>We don't use an <code>ul</code> for the content</p>
		</div>

		<ul id="split-button-5" class="f-dropdown content" data-dropdown-content>
			<li><a href="javascript:void(0)">dropdown-content has class content (adds padding)</a></li>
			<li><a href="javascript:void(0)">This is a link 5</a></li>
			<li><a href="javascript:void(0)">This is another 5</a></li>
			<li><a href="javascript:void(0)">Yet another 5</a></li>
		</ul>
	</div>
</div>
