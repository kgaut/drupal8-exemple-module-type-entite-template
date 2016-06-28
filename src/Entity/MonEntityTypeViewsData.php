<?php

namespace Drupal\monmodule\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Mon entity type entities.
 */
class MonEntityTypeViewsData extends EntityViewsData implements EntityViewsDataInterface {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['mon_entity_type']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Mon entity type'),
      'help' => $this->t('The Mon entity type ID.'),
    );

    return $data;
  }

}
