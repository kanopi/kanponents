<?php

namespace Drupal\kanponents\Plugin\block_field\BlockFieldSelection;

use Drupal\block_field\Plugin\block_field\BlockFieldSelection\Categories;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'reusable content' BlockFieldSelection that hard codes a
 * filter for just custom blocks of the 'reusable content' type.
 *
 * @BlockFieldSelection(
 *   id = "reusable_content",
 *   label = @Translation("Reusable Content"),
 * )
 */
class ReusableContentBlockFilter extends Categories {
  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    unset($form['categories']);
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getReferenceableBlockDefinitions() {
    $block_field_manager = \Drupal::service('block_field.manager');
    $definitions = $block_field_manager->getBlockDefinitions();
    $definitions = array_filter($definitions, function ($definition) {
      if ($definition['category'] == 'Custom') {
        if (isset($definition['config_dependencies']['content'][0])) {
          if (strpos($definition['config_dependencies']['content'][0], 'block_content:reusable_content:') !== FALSE) {
            return TRUE;
          }
        }
      }
      return FALSE;
    });
    return $definitions;
  }
}
