<?php
/**
 * Action for hooking into upgrader_process_complete
 *
 * @author jason.xie@victheme.com
 *
 */
class VTCore_Wordpress_Actions_Upgrader__Process__Complete
extends VTCore_Wordpress_Models_Hook {

  protected $weight = 10;
  protected $argument = 2;

  public function hook($object = NULL, $data = NULL) {

    if (isset($data['action'])
        && $data['action'] = 'update'
        && isset($data['type'])
        && $data['type'] == 'plugin') {

      // Mass update registered updates
      try {
        VTCore_Wordpress_Init::getFactory('updater')->doMassUpdate();
      }
      catch(Exception $e) {
        echo __('VicTheme Core need manual database update, please visit VicTheme Core Dashboard', 'victheme_core');
      }
    }

  }

}