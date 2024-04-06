<?php

declare(strict_types=1);

namespace Drupal\passive;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a passive entity type.
 */
interface PassiveInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
