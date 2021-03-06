<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Service;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:service:twig-extension command.
 */
class TwigExtension extends BaseGenerator {

  protected $name = 'd8:service:twig-extension';
  protected $description = 'Generates Twig extension service';
  protected $alias = 'twig-extension';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $questions = Utils::defaultQuestions() + [
      'class' => [
        'Class',
        function ($vars) {
          return Utils::human2class($vars['name'] . 'TwigExtension');
        },
      ],
    ];
    $vars = $this->collectVars($input, $output, $questions);

    $path = 'src/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/service/twig-extension.twig', $vars);

    $this->services[$vars['machine_name'] . '.twig_extension'] = [
      'class' => 'Drupal\\' . $vars['machine_name'] . '\\' . $vars['class'],
      'tags' => [['name' => 'twig.extension']],
    ];
  }

}
