var $doc = $(document), Modernizr = window.Modernizr;

$doc.ready(function() { // It's pecific to jQuery. Occurs first, after the HTML-Document is loaded and DOM is ready.

	//Exec pending tasks pushed in view files
	if(typeof whenready != 'undefined' && whenready instanceof Array)
		for (var i = 0; i < whenready.length; i++)
			if (whenready[i] != null)
				(whenready[i])();

	//Cosmetic: Toggle class on foudnation .sub-nav before loading the link
	$('dl.sub-nav dd').on('click.fndtn', function (event) {
		$(this).addClass('active').siblings().removeClass('active');
	});


	//Zurb Foundation
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;
    $('input, textarea').placeholder();

	// UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
	// $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
	// $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
	// $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
	// $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

	// Hide address bar on mobile devices
	if (Modernizr.touch) {
		$(window).load(function () {
			setTimeout(function () {
				window.scrollTo(0, 1);
			}, 0);
		});
	}
});

$(window).load(function() { // It's a standard event in the DOM. Occurs later, after all content (e.g. images,frames,...) are fully loaded.
	$('.do-orbit').orbit({pauseOnHover: true, startClockOnMouseOut: true, startClockOnMouseOutAfter: 0});
});
