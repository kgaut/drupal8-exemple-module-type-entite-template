<?php

/**
 * @file
 * Contains mon_entity_type.page.inc.
 *
 * Page callback for Mon entity type entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Mon entity type templates.
 *
 * Default template: mon_entity_type.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_mon_entity_type(array &$variables) {
  // Fetch MonEntityType Entity Object.
  $mon_entity_type = $variables['elements']['#mon_entity_type'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
