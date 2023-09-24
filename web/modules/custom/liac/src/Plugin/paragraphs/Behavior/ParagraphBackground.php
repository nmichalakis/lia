<?php

namespace Drupal\liac\Plugin\paragraphs\Behavior;

use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;

/**
 * @ParagraphsBehavior(
 *   id = "liac_paragraph_background_style",
 *   label = @Translation("Background Style"),
 *   description = @Translation("Allows to define paragraph background style."),
 *   weight = 0,
 * )
 */
class ParagraphBackground extends ParagraphsBehaviorBase {

  /**
   * {@inheritdoc}
   */
  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {
    $paragraph_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_style');
    $build['#attributes']['class'][] = 'paragraph--bg__' . ($paragraph_style ?: 'default');
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
      '#title' => $this->t('Paragraph Background Style'),
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
      $summary[] = $this->t('Paragraph Background Style: @value', ['@value' => $this->getOptionLabel($paragraph_style)]);
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

