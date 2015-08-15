<?php

namespace DrupalCodeGenerator\Tests\Drupal_7\Component;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d7:component:views:argument-default-plugin command.
 */
class ArgumentDefaultPluginTest extends GeneratorTestCase {

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    $this->class = 'Drupal_7\Component\Views\ArgumentDefaultPlugin';
    $this->answers = [
      'Example',
      'example',
      'Foo',
      'foo',
    ];
    $this->target = 'views_plugin_argument_foo.inc';
    $this->fixture = __DIR__ . '/_' . $this->target;
    parent::setUp();
  }

}
