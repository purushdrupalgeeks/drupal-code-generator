<?php

namespace DrupalCodeGenerator\Tests\Drupal_8\Form;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

/**
 * Test for d8:form:simple command.
 */
class SimpleTest extends GeneratorTestCase {

  protected $class = 'Drupal_8\Form\Simple';

  protected $answers = [
    'Foo',
    'foo',
    'ExampleForm',
    'foo_example',
  ];

  protected $fixtures = [
    'src/Form/ExampleForm.php' => __DIR__ . '/_simple.php',
  ];

}
