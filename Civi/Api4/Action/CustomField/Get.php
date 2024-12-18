<?php

/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

namespace Civi\Api4\Action\CustomField;

/**
 * @inheritDoc
 */
class Get extends \Civi\Api4\Generic\CachedDAOGetAction {

  /**
   * @inheritdoc
   *
   * Flatten field records from the CustomGroup cache
   */
  protected function getCachedRecords(): array {
    $groups = \CRM_Core_BAO_CustomGroup::getAll();
    return array_merge(...array_map(fn ($group) => $group['fields'], $groups));
  }

}
