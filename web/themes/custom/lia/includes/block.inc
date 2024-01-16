<?php

/**
 * @file
 */

/**
 * @file
 * Theme and preprocess functions for blocks.
 */

/**
 *
 */
function lia_preprocess_block__system_branding_block(&$variables) {
  $theme = \Drupal::theme()->getActiveTheme();
  $side_logo = '/' . $theme->getPath() . '/src/assets/images/side-logo.png';
  $variables['side_logo'] = $side_logo;
}
