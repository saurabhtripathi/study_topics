<?php

namespace Drupal\study_topics\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'TopicName' placeholder block.
 *
 * @Block(
 *  id = "topic_name",
 *  admin_label = @Translation("Topic Name"),
 * )
 */
class TopicName extends BlockBase {

  /**
   * Creates the placeholder markup and returns it.
   */
  public function build() {
    return [
      '#markup' => '',
    ];

  }

  /**
   * Controls visibility and cache of block.
   *
   * Block is shipped with its own cache tag, and visibility setting
   * for authenticated users.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user session for which to check access.
   *
   * @return \Drupal\Core\Access\AccessResult
   *   The access result.
   *
   * @see self::access()
   */
  protected function blockAccess(AccountInterface $account) {
    $access = $account->isAuthenticated() ? AccessResult::allowed() : AccessResult::forbidden();
    return $access->addCacheTags(['topic_blocks_cache']);
  }

}
