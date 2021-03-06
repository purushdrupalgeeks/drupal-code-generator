<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Plugin\Views;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:plugin:views:argument-default command.
 */
class ArgumentDefault extends BaseGenerator {

  protected $name = 'd8:plugin:views:argument-default';
  protected $description = 'Generates views default argument plugin';
  protected $alias = 'views-argument-default';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = Utils::defaultQuestions() + [
      'plugin_label' => ['Plugin label', 'Example'],
      'plugin_id' => ['Plugin id'],
    ];
    $vars = $this->collectVars($input, $output, $questions);
    $vars['class'] = Utils::human2class($vars['plugin_label']);
    $path = 'src/Plugin/views/argument_default/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/plugin/views-argument-default.twig', $vars);
  }

}
