<div id="result"></div>

<script type="text/javascript">

whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {
	$.get('ajax/test', function(data){
		$('#result').html(data);
		alert('AJAX load was successfully performed');
	})
	.error(function(){
		alert('AJAX error')
	});
});

</script>