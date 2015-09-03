<?php

/**
 * @file
 * Contains \Drupal\media_entity_audio\Plugin\Field\FieldFormatter\MediaFileFormatter.
 */

namespace Drupal\media_entity_audio\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\file\Plugin\Field\FieldFormatter\GenericFileFormatter;

/**
 * Plugin implementation of the 'Media file formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "media_entity_audio",
 *   label = @Translation("Audio Player (HTML5)"),
 *   field_types = {
 *     "file"
 *   }
 * )
 */
class MediaFileFormatter extends GenericFileFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
    $elements = parent::viewElements($items);
    foreach ($elements as &$element) {
      $element['#theme'] = 'media_file_formatter';
    }

    return $elements;
  }

}

