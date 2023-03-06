<?php

namespace Drupal\entity_activity\Entity;

use Drupal\views\EntityViewsData;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides Views data for Subscription entities.
 */
class SubscriptionViewsData extends EntityViewsData {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();
    $data['entity_activity_subscription']['source_entity'] = [
      'title' => $this->t('Source Entity'),
      'field' => [
        'title' => $this->t('Source Entity'),
        'help' => $this->t('The entity the subscription is related to.'),
        'id' => 'entity_activity_subscription_source_entity',
      ],
    ];
    return $data;
  }

}
