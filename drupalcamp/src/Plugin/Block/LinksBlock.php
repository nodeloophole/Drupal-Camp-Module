<?php

/**
 * @file
 * Contains \Drupal\drupalcamp\Plugin\Block\LinksBlock.
 */

namespace Drupal\drupalcamp\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides a 'LinksBlock' block.
 *
 * @Block(
 *  id = "links_block",
 *  admin_label = @Translation("Drupal Camp Links"),
 * )
 */
class LinksBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    // Creating a simple block to hold links used during the session demo.
    $build = [];

    $items = [];
    $items[] = Link::fromTextAndUrl('HTML Table', Url::fromRoute('drupalcamp.table_controller_generateTable'))->toString();
    $items[] = Link::fromTextAndUrl('Lists', Url::fromRoute('drupalcamp.list_controller_generateLists'))->toString();
    $items[] = Link::fromTextAndUrl('Links', Url::fromRoute('drupalcamp.link_controller_generateLinks'))->toString();
    $items[] = Link::fromTextAndUrl('Create Nodes', Url::fromUri('base:drupalcamp/create-press/10'))->toString();
    $items[] = Link::fromTextAndUrl('Edit Node nid:1', Url::fromUri('base:drupalcamp/counter/1'))->toString();
    $items[] = Link::fromTextAndUrl('Edit Node nid:2', Url::fromUri('base:drupalcamp/counter/2'))->toString();
    $items[] = Link::fromTextAndUrl('Edit Node nid:10', Url::fromUri('base:drupalcamp/counter/10'))->toString();
    $items[] = Link::fromTextAndUrl('Query for Nodes', Url::fromRoute('drupalcamp.query_nodes_controller_count3'))->toString();
    $items[] = Link::fromTextAndUrl('View Results', Url::fromRoute('drupalcamp.get_node_ids_of_view_result'))->toString();

    $build[] =  [
      '#theme' => 'item_list',
      '#items' => $items,
      '#list_type' => 'ul',
    ];


    return $build;
  }

}
