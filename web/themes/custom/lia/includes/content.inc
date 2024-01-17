<?php

/**
 * @file
 * Theme and preprocess functions for nodes.
 */

function lia_preprocess_node__event(&$variables) {
  $date_range_from = $variables['node']->get('field_date_range')->getValue()[0]['value'];
  $date_range_from_timestamp = strtotime($date_range_from);
}
