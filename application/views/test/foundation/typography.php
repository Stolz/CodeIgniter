<hr/>

<a name="typography"></a>
<div class="row">
	<h1 class="text-center">Typography</h1>

	<h1>h1. This is a very large header.</h1>
	<h2>h2. This is a large header.</h2>
	<h3>h3. This is a medium header.</h3>
	<h4>h4. This is a moderate header.</h4>
	<h5>h5. This is small header.</h5>
	<h6>h6. This is very small header.</h6>

	<p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, let's see… did you know that there are storms occurring on Jupiter that are larger than the Earth? That's pretty cool.</p>

	<hr/>

	<a name="subheaders"></a>
	<h2>This is a large main header.</h2>
	<h4 class="subheader">This is a smaller subheader.</h4>

	<h3>This is a large header. <small>This is a small segment of that header.</small></h3>

	<hr/>

	<h4>blockquote+cite</h4>
	<blockquote>
	I do not fear computers. I fear the lack of them.
	<cite>Isaac Asimov</cite>
	</blockquote>

	<hr/>
</div>

<a name="lists"></a>
<div class="row">
	<h3 class="text-center">Lists</h3>
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


<a name="align"></a>
<div class="row">
	<hr/>
	<h3 class="text-center">Align and Float</h3>
	<p class="text-center">Just add a class <code>left</code> or <code>right</code> for floating elements, as well as <code>text-center</code> or <code>text-right</code> for aligning text</p>

	<div class="panel left">left</div>
	<div class="panel right">right</div>
	<div class="panel text-center">text-center</div>

	<h3 class="text-center">Print</h3>
	<p>Foundation includes a couple of simple classes you can use to control elements printing, or not printing. Simply attached <code>.print-only</code> on an element to only show when printing, and <code>.hide-on-print</code> to hide something when printing. It aslo includes all the print styles from <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.</p>

</div>
