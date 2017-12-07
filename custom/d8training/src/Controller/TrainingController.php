<?php

/**
 * @file
 * @author Ravindra Singh
 * Contains \Drupal\d8training\Controller\TrainingController.
 * Please place this file under your d8training(module_root_folder)/src/Controller/
 */

namespace Drupal\d8training\Controller;

/**
 * Provides route responses for the d8training module with saying hello world!.
 */

class TrainingController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function firstDay() {
    $element = array(
      '#markup' => '<h1>Hello world!</h1>',
    );
    return $element;
  }
}
