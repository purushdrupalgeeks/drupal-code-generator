<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Form;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:form:simple command.
 */
class Simple extends BaseGenerator {

  protected $name = 'd8:form:simple';
  protected $description = 'Generates simple form';
  protected $alias = 'form';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = Utils::defaultQuestions() + [
      'class' => [
        'Class',
        function ($vars) {
          return Utils::human2class($vars['name'] . 'Form');
        },
      ],
      'form_id' => [
        'Form ID',
        function ($vars) {
          return $vars['machine_name'] . '_example';
        },
      ],
    ];
    $vars = $this->collectVars($input, $output, $questions);
    $path = 'src/Form/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/form/simple.twig', $vars);
  }

}
