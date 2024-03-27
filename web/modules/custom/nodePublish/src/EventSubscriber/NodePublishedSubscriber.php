<?php

namespace Drupal\nodePublish\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\nodePublish\Event\NodePublishedEvent;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class NodePublishedSubscriber implements EventSubscriberInterface {
  use StringTranslationTrait;
  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      NodePublishedEvent::EVENT_NAME => 'onNodePublished',
    ];
  }

  /**
   * Responds to node being published.
   *
   * @param \Drupal\your_module\Event\NodePublishedEvent $event
   *   The event object.
   */
  public function onNodePublished(NodePublishedEvent $event) {
    $node = $event->node;
    $title= $node->label();
    \Drupal::messenger()->addMessage($this->t("The title of the node is %title", ['%title'=> $title])); 
    \Drupal::messenger()->addMessage('Email notification sent.');
  }

}
