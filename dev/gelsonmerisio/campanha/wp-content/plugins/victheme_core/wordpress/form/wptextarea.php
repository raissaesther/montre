<?php
/**
 * Helper Class for building the TextArea Form Elements
 * with TinyMce
 *
 * @author jason.xie@victheme.com
 */
class VTCore_Wordpress_Form_WpTextarea
extends VTCore_Bootstrap_Form_BsTextarea
implements VTCore_Form_Interface {

  protected $context = array(

    'text' => false,
    'description' => false,
    'required' => false,
    'resizeable' => false,
    'editor' => false,
    'id' => false,
    'class' => array(
      'form-control',
    ),
    'name' => false,
    'cols' => false,
    'rows' => 6,
    'value' => false,

    'label' => true,

    'togglelabel' => false,

    // Wrapper element
    'type' => 'div',
    'attributes' => array(
      'class' => array(
        'form-group',
        'clearfix',
        'wp-tinymce-form-control'
      ),
    ),
    // Internal use, Only override if needed
    'input_elements' => array(),
    'label_elements' => array(),
    'description_elements' => array(),
    'required_elements' => array(),
    'tinymce' => array(
      'wpautoop' => true,
      'media_buttons' => true,
      'textarea_rows' => 10,
      'teeny' => true,
      'quicktags' => true,
      'drag_drop_upload' => false,
    )
  );

  protected $input;

  public function buildElement() {

    if ($this->getContext('editor')) {
      $this
        ->addContext('input_elements.attributes.id', uniqid('tinymce_'))
        ->addContext('input_elements.attributes.class.hidden', 'hidden')
        ->addContext('tinymce.textarea_name', $this->getContext('name'))
        ->setRaw(true);
    }

    parent::buildElement();

    if ($this->getContext('editor')) {

      ob_start();
      wp_editor($this->getContext('value'), $this->getContext('input_elements.attributes.id'), $this->getContext('tinymce'));
      $editor = ob_get_clean();

      $this
        ->insertChildrenAfter($this->input->getMachineID(), 'tinymce-wrapper', new VTCore_Html_Element(array(
          'text' => $editor,
          'raw' => true,
        )))
        ->removeChildren($this->input->getMachineID());

    }
  }

}