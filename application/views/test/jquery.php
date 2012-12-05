<?php if(isset($foundation)) : ?>
<p>Zurb Foundation is loaded. It includes it's own jQuery.</p>
<?php else : ?>
<p>Zurb Foundation is not loaded. Plain jQuey will be loaded.</p>
<?php endif ?>

<p>Currently loaded jQuery: <span id="jquery_version"></span></p>
<p>Currently loaded jQuery UI: <span id="jquery_ui_version"></span></p>

<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {
	$('#jquery_version').html($.fn.jquery);
	$('#jquery_ui_version').html(window.jQuery.ui.version);
});
</script>