<?php

namespace DrupalCodeGenerator\Tests\Drupal_8\Service;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d8:service:breadcrumb-builder command.
 */
class BreadcrumbBuilderTest extends GeneratorTestCase {

  protected $class = 'Drupal_8\Service\BreadcrumbBuilder';

  protected $answers = [
    'Example',
    'example',
    'ExampleBreadcrumbBuilder',
  ];

  protected $fixtures = [
    'src/ExampleBreadcrumbBuilder.php' => __DIR__ . '/_breadcrumb_builder.php',
  ];

}
