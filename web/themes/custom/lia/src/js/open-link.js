(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.externalLinks = {
    attach: function (context, settings) {
      // Get the current domain
      var currentDomain = window.location.hostname;

      // Select all links that do not belong to the current domain
      $(context).find('.field--name-body a').once('external-links').each(function () {
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
