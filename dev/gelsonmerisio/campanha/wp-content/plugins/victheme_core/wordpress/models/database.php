<?php
/**
 * Base Class for installing or uninstalling custom database to wordpress
 * Use with combination of VTCore_Wordpress_Models_Record to perform
 * database record manipulation
 *
 * Child class must define the tableName, version and method sqlQuery returning
 * valid sql query for creating the database table;
 *
 * @author jason.xie@victheme.com
 */
abstract class VTCore_Wordpress_Models_Database {

  protected $tableName;
  protected $version;
  protected $table;
  protected $wpdb;
  protected $charset;
  protected $optionName;
  protected $sql;


  /**
   * Building the object settings when constructed
   */
  public function __construct() {
    global $wpdb;
    $this->wpdb = $wpdb;
    $this->table = $wpdb->prefix . $this->tableName;
    $this->charset = $wpdb->get_charset_collate();
    $this->optionName = $this->tableName . '_db_version';

    if (!function_exists('dbDelta')) {
      require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
    }
  }

  /**
   * Child class must extend this and return the sql strings for
   * creating the database table
   * @return mixed
   */
  abstract protected function sqlQuery();


  /**
   * Method for installing the table, make any table adjustment by changing
   * the sql parameter in this method.
   * @return $this
   */
  public function install() {
    $this->sql = $this->sqlQuery();
    dbDelta($this->sql);
    update_option($this->optionName, $this->version);
    return $this;
  }


  /**
   * Method for performing the database table update
   * @return $this
   */
  public function update() {
    $installed_ver = get_option($this->optionName);
    if ($this->version != $installed_ver) {
      $this->install();
    }
    return $this;
  }


  /**
   * Method for destroying the database table, perform this on uninstalling
   * plugin.
   * @return $this
   */
  public function uninstall() {
    $this->wpdb->query("DROP TABLE IF EXISTS $this->wpdb->{$this->tableName}");
    delete_option($this->optionName);
    return $this;
  }


  /**
   * Method for removing all entry in the database
   */
  public function reset() {
    $this->uninstall();
    $this->install();
    return $this;
  }


  /**
   * Optional, child class can extend this for method
   * to populate dummy content for testing purposes
   */
  public function populateDummy() {}
}