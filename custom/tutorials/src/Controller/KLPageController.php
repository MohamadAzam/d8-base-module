<?php


namespace Drupal\tutorials\Controller;

class KLPageController {
    //getData code here
    public function getData(){
        $element = array(
            '#markup' => '<div class="kl-page-class"> <b>Kuala Lumpur</b> </div>'
        );
        return $element;
        }
}

