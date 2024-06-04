<?php

/**
 * @file
 * Theme and preprocess functions for nodes.
 */

/**
 *
 */
function lia_preprocess_node__event(&$variables) {
  $date_range_to = $variables['node']->get('field_date_range')->getValue()[0]['end_value'];
  $date_range_to_timestamp = strtotime($date_range_to);
  $variables['event_past'] = FALSE;

  // If the event is in the past, add the 'event--past' class.
  if ($date_range_to_timestamp < time()) {
    $variables['event_past'] = TRUE;
    $variables['attributes']['class'][] = 'event--past';
  }
  $variables['event_badge'] = $variables['event_past'] ? 'bg-warning' : 'bg-success text-white';
  $variables['date_end'] = date('d-m-Y', $date_range_to_timestamp);
}
