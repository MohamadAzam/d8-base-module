<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DrupalCampKLDiscussionBlock
 *
 * @author ravindra.singh
 */

namespace Drupal\d8training\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Drupal KL discussion block.
 *
 * @Block(
 *   id = "kl_drupal_discussion",
 *   admin_label = @Translation("KL Drupal Discussion"),
 *   category = @Translation("Kl Drupal Discussion"),
 * )
 */
class DrupalCampKLDiscussionBlock extends BlockBase{
    /**
     * {@inheritdoc}
     */
    public function build(){
        return array('#markup' => $this->t('KL Drupal group discussion is going on.'),);
    }
}

