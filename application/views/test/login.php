<div class="row">
	<div class="large-6 columns large-centered">

		<h2><?= PROJECT_NAME ?></h2>
		<h3 class="subheader"><?= $title ?></h3>
		<hr/>

		<?php if(isset($error)) : ?>
		<div class="alert-box alert hide-on-print">
			<?= $error ?>
			<a class="close">&times;</a>
		</div>
		<?php endif ?>

		<?= form_open('login'),

		form_label(_('User'), 'user')?>
		<?php $e = form_error('user'); ?><?=
		form_input(array(
			'class'		=> ($e OR isset($error)) ? 'error ' : NULL,
			'name'		=> 'user',
			'maxlength'	=> 32,
			'value' 	=>  $this->input->post('user')
		)),$e ?><?=

		form_label(_('Password'), 'password')?>
		<?php $e = form_error('password'); ?><?=
		form_password(array(
			'class'		=> ($e OR isset($error)) ? 'error ' : NULL,
			'name'		=> 'password',
		)),$e ?><?=

		form_submit(array('name'=>'submit','class' => 'radius small button','value' => _('Log in'))),

		'<span class="right">',
		form_checkbox(array('id' => 'rememberme', 'name' => 'rememberme', 'value'  => 1, 'checked' => $this->input->post('rememberme'))),
		form_label(_('Remember me'), 'rememberme'),
		'</span>',

		form_close(); ?>
	</div>
</div>
