<?php

namespace Drupal\flag\FlagType;

use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\flag\FlagInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Provides an interface for all flag type plugins.
 */
interface FlagTypePluginInterface extends PluginFormInterface, ConfigurablePluginInterface, ContainerFactoryPluginInterface {

  /**
   * Returns the permissions available to this flag type.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag object.
   *
   * @return array
   *   An array of permissions.
   */
  public function actionPermissions(FlagInterface $flag);

  /**
   * Checks whether a user has permission to flag/unflag or not.
   *
   * @param string $action
   *   The action for which to check permissions, either 'flag' or 'unflag'.
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag object.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   An AccountInterface object.
   * @param \Drupal\Core\Entity\EntityInterface $flaggable
   *   (optional) The flaggable entity.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   An AccessResult object.
   */
  public function actionAccess($action, FlagInterface $flag, AccountInterface $account, EntityInterface $flaggable = NULL);

}
