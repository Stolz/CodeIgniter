$(document).ready(function() {
	// It's pecific to jQuery.
	// Occurs first, after the HTML-Document is loaded and DOM is ready.

	//Zurb Foundation
	$(document).foundationMediaQueryViewer();
	$(document).foundationAlerts();
	$(document).foundationAccordion();
	$(document).tooltips();
	$('input, textarea').placeholder();
	$(document).foundationButtons();
	$(document).foundationNavigation();
	$(document).foundationCustomForms();
	$(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});

});

$(window).load(function() {
	// It's a standard event in the DOM.
	// Occurs later, after all content (e.g. images,frames,...) are fully loaded.

	$(".do-orbit").orbit();
});