<?php

namespace Drupal\liac\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\paragraphs\Entity\Paragraph;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "liac_footer",
 *   admin_label = @Translation("Lia Footer"),
 *   category = @Translation("liac")
 * )
 */
class LiaFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $site_config = \Drupal::config('system.site');

    $data = [];
    $data['site_name'] = $site_config->get('name');
    $data['site_slogan'] = $site_config->get('slogan');

    return [
      '#theme' => 'liac_footer_block',
      '#data' => $data,
    ];
  }

}
