<?php
/**
 * Base class for using Wordpress Meta as an object array
 *
 * Variables that must be configured in the child object
 * - database = the meta key
 * - type = the meta type
 *
 * @see VTCore_Wordpress_Models_Config for parent object
 * @author jason.xie@victheme.com
 *
 */
abstract class VTCore_Wordpress_Models_Meta
extends VTCore_Wordpress_Models_Config {

  protected $database;
  protected $filter;
  protected $single = true;
  protected $type = 'post';
  protected $action = 'meta_object_';
  protected $loadFunction = 'get_metadata';
  protected $saveFunction = 'update_metadata';
  protected $deleteFunction = 'delete_metadata';


  /**
   * Load array from database and merge it to the stored
   * array.
   *
   * @return $this
   */
  public function load() {
    if ($this->database && $this->type && $this->get('id')) {
      $function = $this->loadFunction;
      $results = $function($this->type, $this->get('id'), $this->database, $this->single);
      $this->add('value', $results);
      $this->action('load');
    }
    return $this;
  }


  /**
   * Save the stored array to the database
   *
   * @return $this
   */
  public function save() {
    if ($this->database && $this->type && $this->get('id')) {
      $function = $this->saveFunction;
      $function($this->type, $this->get('id'), $this->database, $this->get('value'));
      $this->action('save');
    }
    return $this;
  }


  /**
   * Delete the stored array in the database only.
   * Invoke the reset() too to completely remove the
   * stored array from the object.
   *
   * @return $this
   */
  public function delete() {
    if ($this->database && $this->type && $this->get('id')) {
      $function = $this->deleteFunction;
      $function($this->type, $this->get('id'), $this->database);
      $this->action('delete');
    }
    return $this;
  }
}