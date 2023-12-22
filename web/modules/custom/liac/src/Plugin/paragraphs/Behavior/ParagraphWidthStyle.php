<?php

namespace Drupal\liac\Plugin\paragraphs\Behavior;

use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;

/**
 * @ParagraphsBehavior(
 *   id = "liac_paragraph_width_style",
 *   label = @Translation("Width Style"),
 *   description = @Translation("Allows to define paragraph width (full - container)."),
 *   weight = 0,
 * )
 */
class ParagraphWidthStyle extends ParagraphsBehaviorBase {

  /**
   * {@inheritdoc}
   */
  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {
    $paragraph_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_style');
    $build['#attributes']['class'][] = 'paragraph--button__' . ($paragraph_style ?: 'default');
  }

  /**
   * {@inheritdoc}
   */
  public function buildBehaviorForm(ParagraphInterface $paragraph, array &$form, FormStateInterface $form_state) {
    $options = $this->getParagrapMainStyleOptions();
    // Add a default option.
    $options = ['' => $this->t('- None selected -')] + $options;

    $form['paragraph_style'] = [
      '#type' => 'select',
      '#title' => $this->t('Paragraph Width'),
      '#options' => $options,
      '#default_value' => $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_style'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary(Paragraph $paragraph) {
    $paragraph_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_style', 'blue');
    $summary = [];
    if (!empty($paragraph_style)) {
      $summary[] = $this->t('Paragraph Width: @value', ['@value' => $this->getOptionLabel($paragraph_style)]);
    }
    else {
      $summary[] = $this->t('No main width selected');
    }
    return $summary;
  }

  /**
   * Returns options for paragraph main style.
   */
  private function getParagrapMainStyleOptions() {
    return [
      'normal-width' => $this->t('Normal'),
      'full-width' => $this->t('Full Width'),
    ];
  }

  /**
   * Returns option label.
   */
  public function getOptionLabel($key) {
    $options = $this->getParagrapMainStyleOptions();
    return isset($options[$key]) ? $options[$key] : $this->t('- None selected -');
  }

}

