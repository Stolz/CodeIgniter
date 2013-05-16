<p>Zepto successfully loaded?: <span id="zepto"></span></p>


<script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {
	$('#zepto').html(typeof Zepto == "undefined" ? 'No' : 'Yes');
});
</script>
