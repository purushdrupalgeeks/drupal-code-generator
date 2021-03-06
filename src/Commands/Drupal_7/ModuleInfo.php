<?php

namespace DrupalCodeGenerator\Commands\Drupal_7;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d7:info-file command.
 */
class ModuleInfo extends BaseGenerator {

  protected $name = 'd7:module-info';
  protected $description = 'Generates Drupal 7 info file for a module';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = Utils::defaultQuestions() + [
      'description' => ['Module description', 'TODO: Write description for the module'],
      'package' => ['Package', 'custom'],
      'version' => ['Version', '7.x-1.0-dev'],
    ];
    $vars = $this->collectVars($input, $output, $questions);
    $this->files[$vars['machine_name'] . '.info'] = $this->render('d7/module-info.twig', $vars);
  }

}
