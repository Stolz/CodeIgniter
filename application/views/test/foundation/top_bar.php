<div class="fixed contain-to-grid"><!-- Remove .fixed to make the top-bar scroll with the page. Remove .contain-to-grid to use full page witdh-->
	<nav class="top-bar">
		<!-- Title and menu icon -->
		<ul class="title-area">
			<li class="name"><h1><a href="/">Foundation</a></h1></li>
			<li class="toggle-topbar menu-icon"><a href="javascript:void(0)"><span><!--<?= _('menu') ?> --></span></a></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "<?= _('menu') ?>" to just have icon alone -->
		</ul>

		<section class="top-bar-section">

			<ul class="left">
				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$url?>grid"><?= _('The Grid') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$url?>grid_basics"><?= _('Basics') ?></a></li>
						<li><a href="<?=$url?>grid_float_collapse"><?= _('Float and collapse') ?></a></li>
						<li><a href="<?=$url?>grid_offset"><?= _('Offset') ?></a></li>
						<li><a href="<?=$url?>grid_centered"><?= _('Centered') ?></a></li>
						<li><a href="<?=$url?>grid_ordering"><?= _('Ordering') ?></a></li>
						<li><a href="<?=$url?>block_grid"><?= _('Block grid') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$url?>buttons"><?= _('Buttons') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$url?>buttons"><?= _('Buttons') ?></a></li>
						<li><a href="<?=$url?>button_group"><?= _('Button Groups') ?></a></li>
						<li><a href="<?=$url?>button_group#even"><?= _('Even button Groups') ?></a></li>
						<li><a href="<?=$url?>button_bar"><?= _('Button Bar') ?></a></li>
						<li><a href="<?=$url?>button_dropdown"><?= _('Dropdown Buttons') ?></a></li>
						<li><a href="<?=$url?>button_split"><?= _('Split Buttons') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$url?>sections"><?= _('Sections') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$url?>sections#sections_auto"><?= _('Default') ?></a></li>
						<li><a href="<?=$url?>sections#sections_accordion"><?= _('Accordion') ?></a></li>
						<li><a href="<?=$url?>sections#sections_tabs"><?= _('Tabs') ?></a></li>
						<li><a href="<?=$url?>sections#sections_vertical-tabs"><?= _('Vertical tabs') ?></a></li>
						<li><a href="<?=$url?>sections#sections_vertical-nav"><?= _('Vertical nav') ?></a></li>
						<li><a href="<?=$url?>sections#sections_horizontal-nav"><?= _('Horizontal nav') ?></a></li>
					</ul>
				</li>
			</ul>

			<ul class="right">
				<li class="divider"></li>
				<li class="has-dropdown active">
					<a class="active" href="javascript:void(0)">Nesting</a>
					<ul class="dropdown">
						<li><label>Section Name</label></li>
						<li class="has-dropdown">
							<a href="javascript:void(0)" class="">Level 1, Has Dropdown</a>
							<ul class="dropdown">
								<li><a href="javascript:void(0)">Level 2</a></li>
								<li><a href="javascript:void(0)">Level 2</a></li>
								<li class="has-dropdown">
									<a href="javascript:void(0)">Level 2, Has Dropdown</a>
									<ul class="dropdown">
										<li><label>Section</label></li>
										<li><a href="javascript:void(0)">Level 3</a></li>
										<li><a href="javascript:void(0)">Level 3</a></li>
										<li class="divider"></li>
										<li><a href="javascript:void(0)">Level 3</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0)">Level 2</a></li>
								<li><a href="javascript:void(0)">Level 2</a></li>
							</ul>
						</li>
						<li><a href="javascript:void(0)">Level 1</a></li>
						<li><a href="javascript:void(0)">Level 1</a></li>
						<li class="divider"></li>
						<li><label>Section Name</label></li>
						<li><a href="javascript:void(0)">Level 1</a></li>
						<li><a href="javascript:void(0)">Level 1</a></li>
						<li><a href="javascript:void(0)">Level 1</a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)">See all &rarr;</a></li>
					</ul>
				</li>
				<li class="divider"></li>
				<li class="has-form"><a target="blank_" class="small radius button" href="http://foundation.zurb.com/docs/changelog.html"><?= _('Docs') ?></a></li>
			</ul>

		</section>
	</nav>
</div><!--.fixed.contain-to-grid-->
