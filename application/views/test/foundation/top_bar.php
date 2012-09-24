<div class="fixed contain-to-grid">
	<nav class="top-bar">
		<ul>
			<li class="name"><h1><a href="<?=$current_url?>#">Zurb Foundation</a></h1></li>
			<li class="toggle-topbar"><a></a></li>
		</ul>

		<section>
			<ul class="left">
				<li class="divider show-for-medium-and-up"></li>
				<li class="has-dropdown active">
					<a  href="<?=$current_url?>#grid"><?= _('Grid') ?></a>
					<ul class="dropdown">
						<li><label>Basics</label></li>
						<li><a href="<?=$current_url?>#grid"><?= _('Two per row') ?></a></li>
						<li><a href="<?=$current_url?>#grid_nperrow"><?= _('N per row') ?></a></li>
						<li><a href="<?=$current_url?>#grid_don_float_last"><?= _("Don't float last") ?></a></li>
						<li class="divider"></li>
						<li><label>Advanced</label></li>
						<li><a href="<?=$current_url?>#grid_offset"><?= _('Offset') ?></a></li>
						<li><a href="<?=$current_url?>#grid_centered"><?= _('Centered') ?></a></li>
						<li><a href="<?=$current_url?>#grid_ordering"><?= _('Ordering') ?></a></li>
						<li><a href="<?=$current_url?>#grid_mobile"><?= _('Mobile') ?></a></li>
					</ul>
				</li>
			</ul>

			<ul class="left">
				<li class="divider show-for-medium-and-up"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#typography"><?= _('Typo') ?></a>
					<ul class="dropdown">
						<li><label>Typography</label></li>
						<li><a href="<?=$current_url?>#typography"><?= _('Headers') ?></a></li>
						<li><a href="<?=$current_url?>#subheaders"><?= _('Subheaders') ?></a></li>
						<li class="divider"></li>
						<li><label>More</label></li>
						<li><a href="<?=$current_url?>#lists"><?= _('Lists') ?></a></li>
						<li><a href="<?=$current_url?>#align"><?= _('Align/Float/Print') ?></a></li>
					</ul>
				</li>
			</ul>

			<ul class="left">
				<li class="divider show-for-medium-and-up"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#buttons"><?= _('Elements') ?></a>
					<ul class="dropdown">
						<li><label>Buttons</label></li>
						<li><a href="<?=$current_url?>#buttons"><?= _('Example') ?></a></li>
						<li><a href="<?=$current_url?>#buttons_groups"><?= _('button-group') ?></a></li>
						<li><a href="<?=$current_url?>#buttons_bar"><?= _('buttons-bar') ?></a></li>
						<li><a href="<?=$current_url?>#buttons_even"><?= _('Evenly sized') ?></a></li>
						<li><label>Special</label></li>
						<li><a href="<?=$current_url?>#buttons_drop"><?= _('Dropdown/split') ?></a></li>
						<li class="divider"></li>
					</ul>
				</li>
			</ul>

			<ul class="left">
				<li class="divider show-for-medium-and-up"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#forms"><?= _('Forms') ?></a>
					<ul class="dropdown">
						<li><a href="<?=$current_url?>#forms"><?= _('Row layout') ?></a></li>
						<li><a href="<?=$current_url?>#forms_float"><?= _('Floating labels') ?></a></li>
						<li><a href="<?=$current_url?>#prefix"><?= _('Pre/Post-fix') ?></a></li>
					</ul>
				</li>
			</ul>


			<ul class="left">
				<li class="divider show-for-medium-and-up"></li>
				<li class="has-dropdown ">
					<a  href="<?=$current_url?>#reveal"><?= _('Plugins') ?></a>
					<ul class="dropdown">
						<li><label>Modal dialog</label></li>
						<li><a href="<?=$current_url?>#reveal"><?= _('Reveal') ?></a></li>
						<li><label>Image slider</label></li>
						<li><a href="<?=$current_url?>#orbit"><?= _('Orbit') ?></a></li>
					</ul>
				</li>
			</ul>

			<ul class="right">
				<li class="divider show-for-medium-and-up"></li>
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
				<li class="divider hide-for-small"></li>
				<li class="has-button"><a class="small radius button" href="javascript:void(0)"><?= _('Button') ?></a></li>
			</ul>
		</section>
	</nav>
</div>

<br/><br/><br/>
