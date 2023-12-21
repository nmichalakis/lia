<?php

use Drupal\node\Entity\Node;

/**
 * @file
 * Custom theme hooks.
 */

/**
 * Implements hook_library_info_build().
 * Automatically creates components libraries (Not visible in theme's libraries.yml file)
 * You can directly use the component name as a library, f.x
 *  {{ attach_library('lia/block') }}.
 */
function lia_library_info_build() {
  $extensions = ['css', 'js'];
  $directory = 'themes/custom/lia/build/components';
  $extensions = array_map('preg_quote', $extensions);
  $extensions = implode('|', $extensions);
  if (!is_dir($directory)) {
    return [];
  }
  $file_scan = \Drupal::service('file_system')->scanDirectory($directory, "/{$extensions}$/");
  $libraries = [];
  foreach ($file_scan as $file) {
    $parts = explode('.', $file->filename);
    $extension = end($parts);
    switch ($extension) {
      case 'css':
        $libraries[$file->name][$extension] = [
          'component' => [
            '/' . $file->uri => [],
          ],
        ];
        break;

      case 'js':
        $libraries[$file->name][$extension] = [
          '/' . $file->uri => [],
        ];
        break;
    }
  }
  return $libraries;
}


/**
 * Implements hook_preprocess_HOOK() for page templates.
 */
function lia_preprocess_page(&$variables) {
  $current_page = \Drupal::routeMatch()->getParameter('node');
  if ($current_page instanceof Node && $current_page->getType() === 'page') {
    $page_title_block = $variables['page']['content']['lia_page_title'];
    unset($variables['page']['content']['lia_page_title']);
    $variables['page']['header'] = $page_title_block;

  }
}
