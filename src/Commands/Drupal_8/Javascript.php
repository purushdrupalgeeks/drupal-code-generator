<?php

namespace DrupalCodeGenerator\Commands\Drupal_8;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:javascript command.
 */
class Javascript extends BaseGenerator {

  protected $name = 'd8:javascript';
  protected $description = 'Generates Drupal 8 javaScript file';
  protected $alias = 'javascript';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $vars = $this->collectVars($input, $output, Utils::defaultQuestions());
    $path = 'js/' . $vars['machine_name'] . '.js';
    $this->files[$path] = $this->render('d8/javascript.twig', $vars);
  }

}
