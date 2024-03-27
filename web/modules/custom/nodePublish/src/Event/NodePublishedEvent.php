<?php

namespace Drupal\nodePublish\Event;

use Symfony\Contracts\EventDispatcher\Event;
use Drupal\node\NodeInterface;

/**
 * Event that is fired when a node is published.
 */
class NodePublishedEvent extends Event {

  const EVENT_NAME = 'nodePublish.node_published';

  /**
   * The node entity.
   *
   * @var \Drupal\node\NodeInterface
   */
  public $node;

  /**
   * Constructs the object.
   *
   * @param \Drupal\node\NodeInterface $node
   *   The node entity.
   */
  public function __construct(NodeInterface $node) {
    $this->node = $node;
  }

}
