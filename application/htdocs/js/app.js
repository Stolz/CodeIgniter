var $doc = $(document);

// This event is specific to jQuery. Occurs first, after the HTML-Document is loaded and DOM is ready.
$doc.ready(function() {

	// Exec pending tasks pushed in view files
	if(typeof whenready != 'undefined' && whenready instanceof Array)
		for (var i = 0, length = whenready.length; i < length; i++)
			if (whenready[i] != null)
				(whenready[i])();

	// Zurb Foundation v. >= 4
	$doc.foundation();

});

// This event is a standard event in the DOM. Occurs later, after all content (e.g. images, frames,...) are fully loaded.
$(window).load(function() {

});
