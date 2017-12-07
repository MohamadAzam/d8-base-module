<?php

/**
 * @Block(
 *  id = "KL_site_content_count",
 *  admin_label = @Translation("Display count of news and users"),
 *  category = @translation("KL Site"),
 * )
 */
namespace Drupal\tutorials\Plugin\Block;
use \Drupal\Core\Block\BlockBase;
class CountEntitiesBlock extends BlockBase{

    /**
     * {@inheritdoc}
     */

    public function build(){
        $blockData = array(
            '#markup' => $this->getData()
        );
        return $blockData;
    }

    /**
     * @return string
     */

    public function getData(){
        return 'Total News: ' . $this->getCountNode('news') . '<br>' . 'Total Users: ' . $this->getUserCount('');
    }

    /**
     * @param type $type
     * @return type
     */

    public function getCountNode($type = NULL){
        try {
            $db = \Drupal::database();
            $query = $db->select('node', 'n');
            $query->fields('n', ['nid']);

            $query->condition('n.type', $type);

            $totalNodes = $query->countQuery()->execute()->fetchField();
            /**
             * Following is to log something in to the logs
             */

            \Drupal::logger('Tutorials')->info('Total node fetched ' . $totalNodes);

            return $totalNodes;
        } catch (Exception $ex) {
            \Drupal::logger('Tutorials')->error($ex);
        }
    }
    /**
     * @param user $user
     * @return user
     */
    public function getUserCount(){
        try {
            $db = \Drupal::database();
            $query = $db->select('users', 'u');
            $query->fields('u', ['uid']);
            $query->condition('u.uid', '0', '>');
            $totalUser = $query->countQuery()->execute()->fetchField();
            \Drupal::logger('Tutorials')->info('Total users has been fetched -'. $totalUser);
            return $totalUser;
        } catch (Exception $ex) {
            \Drupal::logger('Tutorials')->error($ex);
        }
    }


    }
