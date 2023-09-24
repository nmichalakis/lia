<?php

namespace Drupal\liac\Plugin\paragraphs\Behavior;

use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;

/**
 * @ParagraphsBehavior(
 *   id = "liac_paragraph_main_style",
 *   label = @Translation("Main Style"),
 *   description = @Translation("Allows to define paragraph main style."),
 *   weight = 0,
 * )
 */
class ParagraphMainStyle extends ParagraphsBehaviorBase {

  /**
   * {@inheritdoc}
   */
  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {
    $paragraph_main_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_main_style');
    $build['#attributes']['class'][] = 'paragraph--' . $paragraph_main_style;
  }

  /**
   * {@inheritdoc}
   */
  public function buildBehaviorForm(ParagraphInterface $paragraph, array &$form, FormStateInterface $form_state) {
    $options = $this->getParagrapMainStyleOptions();
    // Add a default option.
    $options = ['' => $this->t('- None selected -')] + $options;

    $form['paragraph_main_style'] = [
      '#type' => 'select',
      '#title' => $this->t('Paragraph Main Style'),
      '#options' => $options,
      '#default_value' => $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_main_style'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary(Paragraph $paragraph) {
    $paragraph_main_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_main_style', 'blue');
    $summary = [];
    if (!empty($paragraph_main_style)) {
      $summary[] = $this->t('Paragraph Main Style: @value', ['@value' => $this->getOptionLabel($paragraph_main_style)]);
    }
    else {
      $summary[] = $this->t('No main style selected');
    }
    return $summary;
  }

  /**
   * Returns options for paragraph main style.
   */
  private function getParagrapMainStyleOptions() {
    return [
      'blue' => $this->t('Blue'),
      'green' => $this->t('Green'),
      'yellow' => $this->t('Yellow'),
      'gray' => $this->t('Gray'),
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

