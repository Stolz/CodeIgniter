<div class="fixed contain-to-grid"><!--Remove contain-to-grid to use full page witdh-->
	<nav class="top-bar">
		<!-- Title and menu icon -->
		<ul class="title-area">
			<li class="name"><h1><a href="/">Foundation</a></h1></li>
			<li class="toggle-topbar menu-icon"><a href="#"><span><!--<?= _('menu') ?> --></span></a></li><!-- Remove the class "menu-icon" to get rid of menu icon. Take out "<?= _('menu') ?>" to just have icon alone -->
		</ul>

		<section class="top-bar-section">

			<ul class="left">
				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$current_url?>#grid"><?= _('The Grid') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#grid_basics"><?= _('Basics') ?></a></li>
						<li><a href="<?=$current_url?>#grid_float_collapse"><?= _('Float and collapse') ?></a></li>
						<li><a href="<?=$current_url?>#grid_offset"><?= _('Offset') ?></a></li>
						<li><a href="<?=$current_url?>#grid_centered"><?= _('Centered') ?></a></li>
						<li><a href="<?=$current_url?>#grid_ordering"><?= _('Ordering') ?></a></li>
						<li><a href="<?=$current_url?>#block_grid"><?= _('Block grid') ?></a></li>
					</ul>
				</li>
				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$current_url?>#grid"><?= _('Buttons') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#button"><?= _('Buttons') ?></a></li>
						<li><a href="<?=$current_url?>#button_group"><?= _('Button Groups') ?></a></li>
						<li><a href="<?=$current_url?>#even_button_group"><?= _('Even button Groups') ?></a></li>
						<li><a href="<?=$current_url?>#button_bar"><?= _('Button Bar') ?></a></li>
						<li><a href="<?=$current_url?>#button_dropdown"><?= _('Dropdown Buttons') ?></a></li>
						<li><a href="<?=$current_url?>#button_split"><?= _('Split Buttons') ?></a></li>
					</ul>
				</li>
			</ul>

			<ul class="right">
				<li class="divider"></li>
				<li class="has-dropdown">
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
</div>
