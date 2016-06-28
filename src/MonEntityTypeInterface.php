<?php

namespace Drupal\monmodule;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Mon entity type entities.
 *
 * @ingroup monmodule
 */
interface MonEntityTypeInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Mon entity type name.
   *
   * @return string
   *   Name of the Mon entity type.
   */
  public function getName();

  /**
   * Sets the Mon entity type name.
   *
   * @param string $name
   *   The Mon entity type name.
   *
   * @return \Drupal\monmodule\MonEntityTypeInterface
   *   The called Mon entity type entity.
   */
  public function setName($name);

  /**
   * Gets the Mon entity type creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Mon entity type.
   */
  public function getCreatedTime();

  /**
   * Sets the Mon entity type creation timestamp.
   *
   * @param int $timestamp
   *   The Mon entity type creation timestamp.
   *
   * @return \Drupal\monmodule\MonEntityTypeInterface
   *   The called Mon entity type entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Mon entity type published status indicator.
   *
   * Unpublished Mon entity type are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Mon entity type is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Mon entity type.
   *
   * @param bool $published
   *   TRUE to set this Mon entity type to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\monmodule\MonEntityTypeInterface
   *   The called Mon entity type entity.
   */
  public function setPublished($published);

}
