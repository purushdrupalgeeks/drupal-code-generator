<?php

namespace DrupalCodeGenerator\Commands\Drupal_8;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:service-provider command.
 */
class ServiceProvider extends BaseGenerator {

  protected $name = 'd8:service-provider';
  protected $description = 'Generates a service provider';
  protected $alias = 'service-provider';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $vars = $this->collectVars($input, $output, Utils::defaultQuestions());
    $vars['class'] = Utils::human2class($vars['name'] . 'ServiceProvider');
    $path = 'src/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/service-provider.twig', $vars);
  }

}
