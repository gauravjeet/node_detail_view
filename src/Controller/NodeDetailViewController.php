<?php
/**
 * @file
 * Contains \Drupal\node_detail_view\Controller\NodeDetailViewController.
 */

namespace Drupal\node_detail_view\Controller;

use Drupal\Core\Controller\ControllerBase;

class NodeDetailViewController extends ControllerBase {

  public function node_detail_view_settings_form() {
    $view_options = array('node_info_wrapper', 'node_info_wrapper_fixed',);
    $options = array_combine($view_options, $view_options);

    $build['node_detail_view_default'] = array(
      '#type' => 'select',
      '#default_value' => \Drupal::config('node_detail_view.settings')->get('node_detail_view_default'),
      '#title' => t('Default Viewing style for admin content page'),
      '#options' => array(
        t('List View'),
        t('Detailed View'),
      ),
    );
    $build['node_detail_view_info_block'] = array(
      '#type' => 'select',
      '#default_value' => \Drupal::config('node_detail_view.settings')->get('node_detail_view_info_block'),
//      '#description' => t('<i>node_info_wrapper</i> will keep this div relative to other divs, <br /><i>node_info_wrapper_fixed</i> will keep this div fixed on screen.'),
      '#title' => t('Default class for positioning Node Info'),
      '#options' => $options,
    );
    $build['node_detail_view_submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save'),
      '#submit' => 'node_detail_view_settings_form_submit',
    );
    return $build;
  }

  public function node_detail_view_settings_form_submit($form, &$form_state) {
echo '<pre>';print_r($form_state);die;
  }

}
?>