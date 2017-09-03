/**
 * File features-nav.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function($) {
	var $featuresContainer = $('.features-nav');
	var $featuresItems = $featuresContainer.find('li');
	var $featureContent = $('.feature-item-container');
	var $con = $('.features-content');

	// Make first item active
	$($featuresItems[0]).addClass('is-active');

	$($featureContent[0]).addClass('is-visible');

	function toggleActive() {
		$featuresContainer.on('click', 'li', function(event) {
			event.preventDefault();

			var id = event.target.id;

			$featuresItems.removeClass('is-active');
			$(event.target).addClass('is-active');


			activateSelection(id);
		})
	}


	function activateSelection(id) {
		$featureContent.removeClass('is-visible');
		var yo = $con.find('div#' + id);
		yo.addClass('is-visible');
	}

	toggleActive();
})(jQuery);