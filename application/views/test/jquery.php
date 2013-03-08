<p>Currently loaded jQuery: <span id="jquery_version"></span></p>
<p>Currently loaded jQuery UI: <span id="jquery_ui_version"></span></p>

<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {
	$('#jquery_version').html($.fn.jquery);
	$('#jquery_ui_version').html(window.jQuery.ui.version);
});
</script>
