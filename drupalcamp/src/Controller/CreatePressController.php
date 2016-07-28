<?php

/**
 * @file
 * Contains \Drupal\drupalcamp\Controller\CreatePressController.
 */

namespace Drupal\drupalcamp\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\drupalcamp\CreatePressReleaseService;

/**
 * Class CreatePressController.
 *
 * @package Drupal\drupalcamp\Controller
 */
class CreatePressController extends ControllerBase {

  /**
   * Drupal\drupalcamp\CreatePressReleaseService definition.
   *
   * @var Drupal\drupalcamp\CreatePressReleaseService
   */
  protected $drupalcamp_create_pressrelease;
  /**
   * {@inheritdoc}
   */
  public function __construct(CreatePressReleaseService $drupalcamp_create_pressrelease) {
    $this->drupalcamp_create_pressrelease = $drupalcamp_create_pressrelease;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupalcamp.create.pressrelease')
    );
  }

  /**
   * Create.
   *
   * @return string
   *   Return Hello string.
   */
  public function createPressReleases($count) {
    $this->drupalcamp_create_pressrelease->generate($count);
    return [
        '#type' => 'markup',
        '#markup' => $this->t("$count Press Releases Generated.")
    ];
  }

}
