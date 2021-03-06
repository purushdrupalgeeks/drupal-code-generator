<?php

namespace DrupalCodeGenerator\Tests\Drupal_7;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d7:settings.php command.
 */
class SettingsTest extends GeneratorTestCase {

  protected $class = 'Drupal_7\Settings';

  protected $answers = [
    'mysql',
    'drupal',
    'root',
    '123',
  ];

  protected $fixtures = [
    'settings.php' => __DIR__ . '/_settings.php',
  ];

}
