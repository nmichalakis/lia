<?php

/**
 * @file
 * Theme and preprocess functions for fields.
 */



/**
 * Implements hook_preprocess_field().
 */
function lia_theme_preprocess_field(&$variables) {
  $field_name = $variables['element']['#field_name'];
  $entity_type = $variables['element']['#entity_type'];
  $bundle = $variables['element']['#bundle'];

  // Add more specific preprocess functions based on the template file names you provided.
  $specific_preprocess_function = 'your_theme_preprocess_field__' . $entity_type . '__' . $field_name . '__' . $bundle;

  if (function_exists($specific_preprocess_function)) {
    $specific_preprocess_function($variables);
  }
}

/**
 * Preprocess function for specific field instances.
 */
function lia_preprocess_field__node__field_article_category__article(&$variables) {
  // Add specific preprocessing for the 'field_article_category' field on 'article' nodes.
  $variables['items'][0]['content']['#attributes']['class'][] = 'btn';
  $variables['items'][0]['content']['#attributes']['class'][] = 'btn-success';
  $variables['items'][0]['content']['#attributes']['class'][] = 'my-3';
}

/**
 * Preprocess function for specific field instances.
 * field--node--field-event-category--event--full.html.twig
 */
function lia_preprocess_field__node__field_event_category__event__full(&$variables) {
  // Add specific preprocessing for the 'field_article_category' field on 'article' nodes.
  $variables['items'][0]['content']['#attributes']['class'][] = 'btn';
  $variables['items'][0]['content']['#attributes']['class'][] = 'btn-success';
  $variables['items'][0]['content']['#attributes']['class'][] = 'my-3';
}


// Add more specific preprocess functions as needed for other field instances.
