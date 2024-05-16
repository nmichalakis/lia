<?php

namespace Drupal\liac\Plugin\paragraphs\Behavior;

use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;

/**
 * @ParagraphsBehavior(
 *   id = "liac_paragraph_margin_space",
 *   label = @Translation("Margin Space"),
 *   description = @Translation("Allows to define paragraph margin space."),
 *   weight = 0,
 * )
 */
class ParagraphMarginSpace extends ParagraphsBehaviorBase {

  /**
   * {@inheritdoc}
   */
  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {
    $paragraph_style = $paragraph->getBehaviorSetting($this->getPluginId(), 'paragraph_style');
    $build['#attributes']['class'][] = ($paragraph_style ?: 'm-0');
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
      '#title' => $this->t('Paragraph Margin Space'),
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
      $summary[] = $this->t('Paragraph Margin Space: @value', ['@value' => $this->getOptionLabel($paragraph_style)]);
    }
    else {
      $summary[] = $this->t('No main margin space selected');
    }
    return $summary;
  }

  /**
   * Returns options for paragraph main style.
   */
  private function getParagrapMainStyleOptions() {
    return [
      'mb-0' => $this->t('Margin Bottom 0x'),
      'mb-1' => $this->t('Margin Bottom 1x'),
      'mb-2' => $this->t('Margin Bottom 2x'),
      'mb-3' => $this->t('Margin Bottom 3x'),
      'mb-4' => $this->t('Margin Bottom 4x'),
      'mb-5' => $this->t('Margin Bottom 5x'),
      'mt-0' => $this->t('Margin Top 0x'),
      'mt-1' => $this->t('Margin Top 1x'),
      'mt-2' => $this->t('Margin Top 2x'),
      'mt-3' => $this->t('Margin Top 3x'),
      'mt-4' => $this->t('Margin Top 4x'),
      'mt-5' => $this->t('Margin Top 5x'),
      'mx-0' => $this->t('Margin X 0x'),
      'mx-1' => $this->t('Margin X 1x'),
      'mx-2' => $this->t('Margin X 2x'),
      'mx-3' => $this->t('Margin X 3x'),
      'mx-4' => $this->t('Margin X 4x'),
      'mx-5' => $this->t('Margin X 5x'),
      'my-0' => $this->t('Margin Y 0x'),
      'my-1' => $this->t('Margin Y 1x'),
      'my-2' => $this->t('Margin Y 2x'),
      'my-3' => $this->t('Margin Y 3x'),
      'my-4' => $this->t('Margin Y 4x'),
      'my-5' => $this->t('Margin Y 5x'),
    ];
  }

  /**
   * Returns option label.
   */
  public function getOptionLabel($key) {
    $options = $this->getParagrapMainStyleOptions();
    return $options[$key] ?? $this->t('- None selected -');
  }

}
