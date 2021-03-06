<?php

namespace DrupalCodeGenerator\Tests\Drupal_8;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d8:theme-file command.
 */
class ThemeFileTest extends GeneratorTestCase {

  protected $class = 'Drupal_8\ThemeFile';

  protected $answers = [
    'Foo',
    'foo',
  ];

  protected $fixtures = [
    'foo.theme' => __DIR__ . '/_theme_file.theme',
  ];

}
