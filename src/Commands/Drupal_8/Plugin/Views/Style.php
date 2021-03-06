<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Plugin\Views;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Commands\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:plugin:views:style command.
 */
class Style extends BaseGenerator {

  protected $name = 'd8:plugin:views:style';
  protected $description = 'Generates views style plugin';
  protected $alias = 'views-style';

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

    $path = 'src/Plugin/views/style/' . $vars['class'] . '.php';
    $this->files[$path] = $this->render('d8/plugin/views/style-plugin.twig', $vars);

    $path = 'templates/' . 'views-style-' . str_replace('_', '-', $vars['plugin_id']) . '.html.twig';
    $this->files[$path] = $this->render('d8/plugin/views/style-template.twig', $vars);

    $this->hooks[$vars['machine_name'] . '.module'] = [
      'file_doc' => $this->render('d8/file-docs/module.twig', $vars),
      'code' => $this->render('d8/plugin/views/style-preprocess.twig', $vars),
    ];
  }

}
