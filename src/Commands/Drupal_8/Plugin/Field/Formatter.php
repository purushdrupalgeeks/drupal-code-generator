<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Plugin\Field;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:plugin:field:formatter command.
 */
class Formatter extends BaseGenerator {

  protected $name = 'd8:plugin:field:formatter';
  protected $description = 'Generates field formatter plugin';
  protected $alias = 'formatter';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = Utils::defaultQuestions() + [
      'plugin_label' => ['Formatter name', 'Example'],
      'plugin_id' => ['Formatter machine name'],
    ];

    $vars = $this->collectVars($input, $output, $questions);
    $vars['class'] = Utils::human2class($vars['plugin_label'] . 'Formatter');

    $path = 'src/Plugin/Field/FieldFormatter/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/plugin/field/formatter.twig', $vars);
  }

}
