<?php

namespace Drupal\monmodule\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Mon entity type edit forms.
 *
 * @ingroup monmodule
 */
class MonEntityTypeForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\monmodule\Entity\MonEntityType */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Mon entity type.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Mon entity type.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.mon_entity_type.canonical', ['mon_entity_type' => $entity->id()]);
  }

}
