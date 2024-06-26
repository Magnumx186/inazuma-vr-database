<?php

declare(strict_types=1);

namespace Drupal\skill;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a habilidad entity type.
 */
interface skillInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
