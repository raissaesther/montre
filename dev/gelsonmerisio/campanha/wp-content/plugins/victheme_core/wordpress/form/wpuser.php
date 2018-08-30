<?php
/**
 * Class for retrieving user via ajax, it will use the user id as array key
 * and user login as the text display
 *
 * @see VTCore_Wordpress_Ajax_Processor_WpUser for the ajax processing logic
 * @author jason.xie@victheme.com
 */
class VTCore_Wordpress_Form_WpUser
extends VTCore_Bootstrap_Form_BsSelect
implements VTCore_Form_Interface {

  protected $context = array(

    // Shortcut method
    // @see VTCore_Bootstrap_Form_Base::assignContext()
    'text' => false,
    'prefix' => false,
    'suffix' => false,
    'description' => false,
    'required' => false,
    'value' => false,
    'id' => false,
    'class' => array(
      'form-control',
      'wp-user-form',
      'vt-ajax-picker'
    ),
    'name' => false,
    'size' => false,
    'multiple' => false,
    'options' => array(),

    // BootStrap Rules
    'label' => true,

    'togglelabel' => false,

    // Wrapper element
    'type' => 'div',
    'attributes' => array(
      'class' => array('form-group'),
    ),

    // Internal use, Only override if needed
    'input_elements' => array(),
    'label_elements' => array(),
    'description_elements' => array(),
    'prefix_elements' => array(),
    'suffix_elements' => array(),
    'required_elements' => array(),

    'selectpicker' => array(
      'live-search' => true,
      'dropup' => false,
      'dropupAuto' => false,
    ),
    'ajaxpicker' => array(
      'cache' => true,
      'preserve-selected' => false,
      'empty-request' => true,
    ),
  );



  protected function processPickerContext() {

    if (class_exists('VTCore_Wordpress_Utility')) {
      VTCore_Wordpress_Utility::loadAsset('bootstrap-ajax-select');
      VTCore_Wordpress_Utility::loadAsset('wp-ajaxselect');
    }

    // Auto build default options
    if ($this->getContext('value') && !$this->getContext('options')) {
      $user = new WP_User($this->getContext('value'));
      $this->addContext('input_elements.options', array(
        $user->ID => $user->display_name,
      ));
    }

    if ($this->getContext('users')) {
      $data = $this->getContext('users');
      $data = base64_encode(serialize($data));
      $this->addContext('input_elements.data.ajax-data', $data);
    }

    parent::processPickerContext();

    foreach ($this->getContext('ajaxpicker') as $key => $value) {
      $this->addContext('input_elements.data.abs-' . $key, $value);
    }

    $this
      ->addContext('input_elements.data.ajax-url', admin_url('admin-ajax.php'))
      ->addContext('input_elements.data.ajax-nonce', wp_create_nonce('vtcore-ajax-nonce-admin'))
      ->addContext('input_elements.data.ajax-object', 'wpuser')
      ->addContext('input_elements.data.ajax-queue', json_encode(array('search'), true));

    // Translation
    if (function_exists('__')) {
      $this
        ->addContext('input_elements.data.ajax-locale', json_encode(array(
          'currentlySelected' => __('Currently Selected', 'victheme_core'),
          'emptyTitle' => $this->getContext('placeholder') ? $this->getContext('placeholder') : __('Select and begin typing', 'victheme_core'),
          'errorText' => __('Unable to retrieve results', 'victheme_core'),
          'searchPlaceholder' => __('Search...', 'victheme_core'),
          'statusInitialized' => __('Start typing a search query', 'victheme_core'),
          'statusNoResults' => __('No Results', 'victheme_core'),
          'statusSearching' => __('Searching...', 'victheme_core'),
        ), true));
    }

  }


}