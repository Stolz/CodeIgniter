<a name="linklist"></a>
<hr/>
<div class="row">
	<h2>Link List</h2>
	<p>When you just need a horizontal list of links, like in a footer, and you want more control than just spaces between them you can use this simple construct.</p>
	<ul class="link-list">
		<li><a href="javascript:void(0)">Link 1</a></li>
		<li><a href="javascript:void(0)">Link 2</a></li>
		<li><a href="javascript:void(0)">Link 3</a></li>
		<li><a href="javascript:void(0)">Link 4</a></li>
		<li><a href="javascript:void(0)">Link 5</a></li>
		<li><a href="javascript:void(0)">Link 6</a></li>
		<li><a href="javascript:void(0)">Link 7</a></li>
	</ul>
	<p>Feel free to add a sepparator.</p>
	<ul class="link-list">
		<li><a href="javascript:void(0)">Link 1</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 2</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 3</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 4</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 5</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 6</a></li><li>|</li>
		<li><a href="javascript:void(0)">Link 7</a></li>
	</ul>



	<a name="subnav"></a>
	<h2>Sub Nav</h2>
	<dl class="sub-nav">
		<dt>Filter:</dt>
		<dd class="active"><a href="javascript:void(0)">All</a></dd>
		<dd><a href="javascript:void(0)">Active</a></dd>
		<dd><a href="javascript:void(0)">Pending</a></dd>
		<dd><a href="javascript:void(0)">Suspended</a></dd>
	</dl>



	<a name="navbar"></a>
	<h2>Horizontal nav bar</h2>
	<ul class="nav-bar">
		<li class="active"><a href="javascript:void(0)">Nav Item 1</a></li>
		<li class="has-flyout">
			<a href="javascript:void(0)">Nav Item 2</a>
			<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
			<ul class="flyout" style="display: none;">
			<li><a href="javascript:void(0)">Sub Nav Item 1</a></li>
			<li><a href="javascript:void(0)">Sub Nav Item 2</a></li>
			<li><a href="javascript:void(0)">Sub Nav 3</a></li>
			<li><a href="javascript:void(0)">Sub Nav 4</a></li>
			<li><a href="javascript:void(0)">Sub Nav Item 5</a></li>
			</ul>
		</li>
		<li class="has-flyout">
			<a href="javascript:void(0)">Nav Item 3</a>
			<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
			<div class="flyout" style="display: none;">
			<h5>Regular Dropdown</h5>
			<div class="row">
				<div class="six columns">
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				</div>
				<div class="six columns">
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				</div>
			</div>
			</div>
		</li>
		<li class="has-flyout">
			<a href="javascript:void(0)">Nav Item 4 (float to the left)</a>
			<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
			<div class="flyout large right"><!--note the "large" and "right" extra classes-->
			<h5>Large Dropdown</h5>
			<div class="row">
				<div class="four columns">
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				</div>
				<div class="four columns">
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
				</div>
				<div class="four columns">
				<img src="http://placehold.it/200x250">
				</div>
			</div>
			</div>
		</li>
		</ul>




	<a name="vnavbar"></a>
	<div class="three columns">
		<h2>Vertical nav bar</h2>
		<ul class="nav-bar vertical">
			<li class="active"><a href="javascript:void(0)">Nav Item 1</a></li>
			<li class="has-flyout">
				<a href="javascript:void(0)">Nav Item 2</a>
				<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
				<ul class="flyout" style="display: none;">
				<li><a href="javascript:void(0)">Sub Nav Item 1</a></li>
				<li><a href="javascript:void(0)">Sub Nav Item 2</a></li>
				<li><a href="javascript:void(0)">Sub Nav 3</a></li>
				<li><a href="javascript:void(0)">Sub Nav 4</a></li>
				<li><a href="javascript:void(0)">Sub Nav Item 5</a></li>
				</ul>
			</li>
			<li class="has-flyout">
				<a href="javascript:void(0)">Nav Item 3</a>
				<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
				<div class="flyout" style="display: none;">
				<h5>Regular Dropdown</h5>
				<div class="row">
					<div class="six columns">
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					</div>
					<div class="six columns">
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					</div>
				</div>
				</div>
			</li>
			<li class="has-flyout">
				<a href="javascript:void(0)">Nav Item 4 (float to the left)</a>
				<a class="flyout-toggle" href="javascript:void(0)"><span> </span></a>
				<div class="flyout large right"><!--note the "large" and "right" extra classes-->
				<h5>Large Dropdown</h5>
				<div class="row">
					<div class="four columns">
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					</div>
					<div class="four columns">
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					<p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
					</div>
					<div class="four columns">
					<img src="http://placehold.it/200x250">
					</div>
				</div>
				</div>
			</li>
		</ul>
	</div>



	<div class="three columns">
		<h2>Side Nav</h2>
		<ul class="side-nav">
			<li class="active"><a href="javascript:void(0)">Link 1</a></li>
			<li><a href="javascript:void(0)">Link 2</a></li>
			<li class="divider"></li>
			<li><a href="javascript:void(0)">Link 3</a></li>
			<li><a href="javascript:void(0)">Link 4</a></li>
			<li class="divider"></li>
			<li><a href="javascript:void(0)">Link 5</a></li>
			<li><a href="javascript:void(0)">Link 6</a></li>
		</ul>
	</div>

<hr/>

	<a name="pagination"></a>
	<h2>Pagination</h2>

	<ul class="pagination">
		<li class="arrow unavailable"><a href="">&laquo;</a></li>
		<li class="current"><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
		<li><a href="">4</a></li>
		<li class="unavailable"><a href="">&hellip;</a></li>
		<li><a href="">12</a></li>
		<li><a href="">13</a></li>
		<li class="arrow"><a href="">&raquo;</a></li>
	</ul>



	<a name="breadcrumbs"></a>
	<h2>Breadcrumbs</h2>
	<ul class="breadcrumbs">
		<li><a href="javascript:void(0)">Home</a></li>
		<li><span>Foo</span></li>
		<li><a href="javascript:void(0)">Features</a></li>
		<li class="unavailable"><a href="javascript:void(0)">Gene Splicing</a></li>
		<li class="current"><a href="javascript:void(0)">Home</a></li>
	</ul>

</div>
