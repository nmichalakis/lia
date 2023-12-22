<?php

/**
 * @file
 * Theme and preprocess functions for paragraphs.
 */

use Drupal\paragraphs\Entity\Paragraph;

/**
 * Implements template_preprocess_paragraph().
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An array of elements to display in view mode.
 *   - paragraph: The paragraph object.
 *   - view_mode: View mode; e.g., 'full', 'teaser'...
 */
function lia_preprocess_paragraph__lia_grouped_sections(&$variables) {

  /** @var \Drupal\paragraphs\Entity\Paragraph $paragraph */
  $paragraph = $variables['paragraph'];

  if (!$paragraph->hasField('field_sections') || $paragraph->get('field_sections')->isEmpty()) {
    return;
  }

  $paragraph_sections = $paragraph->get('field_sections')->getValue();
  foreach ($paragraph_sections as $key => $section) {
    $paragraph_section = Paragraph::load($section['target_id']);
    if (!$paragraph_section->hasField('field_icon') || $paragraph_section->get('field_icon')->isEmpty()) {
      continue;
    }
    $icon = $paragraph_section->get('field_icon')->first()->getValue();
    $sections[$key]['icon'] = $icon;
    $sections[$key]['target_id'] = $section['target_id'];
  }
  $variables['sections'] = $sections;
}

/**
 * Implements template_preprocess_paragraph().
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An array of elements to display in view mode.
 *   - paragraph: The paragraph object.
 *   - view_mode: View mode; e.g., 'full', 'teaser'...
 */
function lia_preprocess_paragraph__lia_icon_highlight(&$variables) {

  /** @var \Drupal\paragraphs\Entity\Paragraph $paragraph */
  $paragraph = $variables['paragraph'];
  if (!$paragraph->hasField('field_icon') || $paragraph->get('field_icon')->isEmpty()) {
    return;
  }
  $icon = $paragraph->get('field_icon')->first()->getValue();
  $variables['icon'] = $icon;
}

/**
 * Implements template_preprocess_paragraph().
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An array of elements to display in view mode.
 *   - paragraph: The paragraph object.
 *   - view_mode: View mode; e.g., 'full', 'teaser'...
 */
function lia_preprocess_paragraph__lia_social_media(&$variables) {

  /** @var \Drupal\paragraphs\Entity\Paragraph $paragraph */
  $paragraph = $variables['paragraph'];
  if (!$paragraph->hasField('field_icon') || $paragraph->get('field_icon')->isEmpty()) {
    return;
  }
  $icon = $paragraph->get('field_icon')->first()->getValue();
  $variables['icon'] = $icon;
}


/**
 * Implements template_preprocess_paragraph().
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An array of elements to display in view mode.
 *   - paragraph: The paragraph object.
 *   - view_mode: View mode; e.g., 'full', 'teaser'...
 */
function lia_preprocess_paragraph__default(&$variables) {
  $variables['content']['#prefix'] = '<div class="container">';
  $variables['content']['#suffix'] = '</div>';
}
