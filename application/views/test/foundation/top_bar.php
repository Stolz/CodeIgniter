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
				<li class="has-dropdown active">
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
					<a  href="<?=$current_url?>#button"><?= _('Buttons') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#button"><?= _('Buttons') ?></a></li>
						<li><a href="<?=$current_url?>#button_group"><?= _('Button Groups') ?></a></li>
						<li><a href="<?=$current_url?>#even_button_group"><?= _('Even button Groups') ?></a></li>
						<li><a href="<?=$current_url?>#button_bar"><?= _('Button Bar') ?></a></li>
						<li><a href="<?=$current_url?>#button_dropdown"><?= _('Dropdown Buttons') ?></a></li>
						<li><a href="<?=$current_url?>#button_split"><?= _('Split Buttons') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown">
					<a  href="<?=$current_url?>#sections"><?= _('Sections') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#sections_auto"><?= _('Default') ?></a></li>
						<li><a href="<?=$current_url?>#sections_tabs"><?= _('Tabs') ?></a></li>
						<li><a href="<?=$current_url?>#sections_accordion"><?= _('Accordion') ?></a></li>
						<li><a href="<?=$current_url?>#sections_vertical-nav"><?= _('Vertical-nav') ?></a></li>
						<li><a href="<?=$current_url?>#sections_horizontal-nav"><?= _('Horizontal-nav') ?></a></li>
					</ul>
				</li>
			</ul>









		<!--


				<li class="divider"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#typography"><?= _('Typo') ?></a>
					<ul class="dropdown">
						<li><label>Typography</label></li>
						<li><a href="<?=$current_url?>#typography"><?= _('Headers') ?></a></li>
						<li><a href="<?=$current_url?>#subheaders"><?= _('Subheaders') ?></a></li>
						<li class="divider"></li>
						<li><label>More</label></li>
						<li><a href="<?=$current_url?>#lists"><?= _('Lists') ?></a></li>
						<li><a href="<?=$current_url?>#vcard"><?= _('V-cards') ?></a></li>
						<li><a href="<?=$current_url?>#align"><?= _('Align/Float/Print') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#buttons"><?= _('Elements') ?></a>
					<ul class="dropdown">
						<li class="has-dropdown">
							<a href="javascript:void(0)" class="">Buttons</a>
							<ul class="dropdown">
								<li><a href="<?=$current_url?>#dropdown"><?= _('Genericropdown') ?></a></li>
							</ul>
						</li>
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="javascript:void(0)" class="">Navigation</a>
							<ul class="dropdown">
								<li><a href="<?=$current_url?>#linklist"><?= _('Link list') ?></a></li>
								<li><a href="<?=$current_url?>#subnav"><?= _('Sub nav') ?></a></li>
								<li><a href="<?=$current_url?>#philltabs"><?= _('Phill tabs') ?></a></li>
								<li><a href="<?=$current_url?>#verticaltabs"><?= _('Vertical tabs') ?></a></li>
								<li><a href="<?=$current_url?>#navbar"><?= _('Horizontal bar') ?></a></li>
								<li><a href="<?=$current_url?>#vnavbar"><?= _('Vertical bar') ?></a></li>
								<li><a href="<?=$current_url?>#vnavbar"><?= _('Side nav') ?></a></li>
								<li><a href="<?=$current_url?>#pagination"><?= _('Pagination') ?></a></li>
								<li><a href="<?=$current_url?>#breadcrumbs"><?= _('Breadcrumbs') ?></a></li>
							</ul>
						</li>
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="javascript:void(0)" class="">Blocks</a>
							<ul class="dropdown">
								<li><a href="<?=$current_url?>#tabs"><?= _('Tabs') ?></a></li>
								<li><a href="<?=$current_url?>#accordion"><?= _('Accordion') ?></a></li>
								<li><a href="<?=$current_url?>#panels"><?= _('Panels') ?></a></li>
							</ul>
						</li>
						<li class="divider"></li>
						<li><label>Misc</label></li>
						<li><a href="<?=$current_url?>#alerts"><?= _('Alerts') ?></a></li>
						<li><a href="<?=$current_url?>#labels"><?= _('Labels') ?></a></li>
						<li><a href="<?=$current_url?>#tooltips"><?= _('Tooltips') ?></a></li>
						<li><a href="<?=$current_url?>#progressbars"><?= _('Progress Bars') ?></a></li>
						<li><a href="<?=$current_url?>#thumbnails"><?= _('Thumbnails') ?></a></li>
						<li><a href="<?=$current_url?>#video"><?= _('Video') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#forms"><?= _('Forms') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#forms"><?= _('Row layout') ?></a></li>
						<li><a href="<?=$current_url?>#forms_float"><?= _('Floating labels') ?></a></li>
						<li><a href="<?=$current_url?>#prefix"><?= _('Pre/Post-fix') ?></a></li>
						<li><a href="<?=$current_url?>#switch_radio"><?= _('Switch radio button') ?></a></li>
					</ul>
				</li>

				<li class="divider"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#reveal"><?= _('Plugins') ?></a>
					<ul class="dropdown">
						<li><label>Modal dialog</label></li>
						<li><a href="<?=$current_url?>#reveal"><?= _('Reveal') ?></a></li>
						<li class="divider"></li>

						<li><label>Image slider</label></li>
						<li><a href="<?=$current_url?>#orbit"><?= _('Orbit') ?></a></li>
						<li class="divider"></li>

						<li><label>Image gallery</label></li>
						<li><a href="<?=$current_url?>#clearing"><?= _('Clearing') ?></a></li>
						<li class="divider"></li>

						<li><label>Sticky navigation</label></li>
						<li><a href="<?=$current_url?>#magellan"><?= _('Magellan') ?></a></li>
						<li class="divider"></li>

						<li><label>Feature tour</label></li>
						<li><a href="http://foundation.zurb.com/docs/joyride.php"><?= _('Joyride') ?></a></li>
						<li class="divider"></li>

						<li><label>Media query</label></li>
						<li><a><?= _('Press Ctrl + M') ?></a></li>
					</ul>
				</li>
			</ul>
-->
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
				<li class="has-form"><a class="small radius button" href="http://foundation.zurb.com/docs/"><?= _('Button') ?></a></li>
			</ul>



		</section>
	</nav>
</div>
