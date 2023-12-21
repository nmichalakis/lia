import { Toast, Tooltip } from './_bootstrap';

(function () {
	// * Tooltip initialization, remove it if not necessary
	document
		.querySelectorAll('[data-toggle="tooltip"]')
		.forEach((tooltipElement) => new Tooltip(tooltipElement));

	// * Toast initialization, remove it if not necessary
	document
		.querySelectorAll('.toast')
		.forEach((toastElement) => new Toast(toastElement));
})();

(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.externalLinks = {
    attach: function (context, settings) {
      // Get the current domain
      var currentDomain = window.location.hostname;

// Select all links that do not belong to the current domain
$('.field--name-body a, p a').each(function () {
  var link = $(this);
  var linkDomain = link.prop('hostname');

  // Check if the link belongs to a different domain
  if (linkDomain !== currentDomain) {
    // Open the link in a new window or tab
    link.attr('target', '_blank');
  }
});

    }
  };
})(jQuery, Drupal, window, document);

