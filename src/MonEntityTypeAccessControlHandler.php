<?php

namespace Drupal\monmodule;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Mon entity type entity.
 *
 * @see \Drupal\monmodule\Entity\MonEntityType.
 */
class MonEntityTypeAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\monmodule\MonEntityTypeInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished mon entity type entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published mon entity type entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit mon entity type entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete mon entity type entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add mon entity type entities');
  }

}
