<?php
/**
 * Base Class for performing removing, inserting, updating, and quering
 * a single database row in a table.
 *
 * @author jason.xie@victheme.com
 */
abstract class VTCore_Wordpress_Models_Record {

  protected $tableName = '';

  /**
   * Method for retrieving the database table name
   * @return string
   */
  public function getTableName() {
    global $wpdb;
    return $wpdb->prefix . $this->tableName;
  }


  /**
   * Method for deleting a single row entry for database, see WPDB::delete
   * for the array of data for matching which row to delete
   *
   * @param $data
   * @return false|int
   */
  public function remove($data) {
    global $wpdb;
    return $wpdb->delete($this->getTableName(), $data);
  }


  /**
   * Method for inserting a new row into the database, see WPDB::insert
   * for the valid format of data array to be inserted to the database
   *
   * @param $data
   * @return false|int
   */
  public function insert($data) {
    global $wpdb;
    return $wpdb->insert($this->getTableName(), $data);
  }


  /**
   * Method for updating a single or multiple row in the database, this
   * method will use $where to match the rows and $data to replace the old
   * data found in the rows.
   *
   * @param $where
   * @param $data
   * @return false|int
   */
  public function update($where, $data, $format = null, $where_format = null ) {
    global $wpdb;
    return $wpdb->update($this->getTableName(), $data, $where, $format, $where_format);
  }


  /**
   * Method for counting the number of rows found in the database table
   *
   * @return int
   */
  public function count($clauses = array()) {
    global $wpdb;
    $uniqid = uniqid('##query--');
    $meta = array();
    $placeholder = array();

    // Improve this to accept IN, LIKE and multiple value!
    foreach ($clauses as $field => $value) {
      if ($value === false) {
        continue;
      }
      $type = '%s';
      if (is_numeric($value)) {
        $type = '%d';
      }

      $meta[] = $field . '=' . $type;
      $placeholder[] = $value;
    }

    $where = implode(' AND ', $meta);

    if (!empty($where)) {
      $where = 'WHERE ' . $where;
    }
    else {
      $where = '%s';
      $placeholder[] = $uniqid;
    }

    $table = $this->getTableName();
    $sql = apply_filters('vtcore_query_count_alter',
      str_replace("'$uniqid'", '',
        $wpdb->prepare(
          "SELECT COUNT(*) FROM $table $where"
          , $placeholder)),
      $uniqid);

    return (int) $wpdb->get_var($sql);
  }


  /**
   * Method for retrieving rows from the database, this method will uses
   * clauses to determine which table field for retrieval, limits to limit
   * how many row to return with x number of offsets, order to determine
   * which table field to be used as the ordering clause and direction
   * to determine the ordering direction
   *
   * @param array $clauses
   *    array of clauses for the table field, use false as value if we dont
   *    need to filter the result per field value clause.
   *
   * @param array $limit
   *    array of limit and offset, the first key is the offset value and the
   *    second key is the total row to be retrieved
   *
   * @param bool|FALSE $order
   *    String of sql syntax for ordering
   *
   * @param bool|FALSE $direction
   *    String of either ASC or DESC for determining the ordering direction
   *
   * @return array|null|object
   */
  public function get($clauses = array(), $limit = false, $order = false, $direction = false) {
    global $wpdb;
    $lookup = implode(', ', array_keys($clauses));
    $uniqid = uniqid('##query--');
    $meta = array();
    $placeholder = array();

    // Improve this to accept IN, LIKE and multiple value!
    foreach ($clauses as $field => $value) {
      if ($value === false) {
        continue;
      }
      $type = '%s';
      if (is_numeric($value)) {
        $type = '%d';
      }

      $meta[] = $field . '=' . $type;
      $placeholder[] = $value;
    }

    $where = implode(' AND ', $meta);

    if (!empty($where)) {
      $where = 'WHERE ' . $where;
    }
    else {
      $where = '%s';
      $placeholder[] = $uniqid;
    }

    if (!empty($order)) {
      if (preg_match('(UNION|SELECT|OR|DROP|UPDATE|JOIN)', strtoupper($order)) === 0) {
        $order = 'ORDER BY ' . esc_sql($order);
      }
      else {
        $order = '';
      }
    }

    if (!empty($direction)) {
      $direction = strtoupper($direction);
      if ($direction == 'ASC' || $direction == 'DESC') {
        $order .= ' ' . strtoupper($direction);
      }
    }

    if (!empty($limit)) {

      $limits = explode(',', $limit);

      if (!empty($limits) && count($limits) == 2) {
        $placeholder[] = (int) $limits[0];
        $placeholder[] = (int) $limits[1];
        $limit = 'LIMIT %d, %d';
      }
      else {
        $limit = '';
      }
    }

    if (empty($limit)) {
      $limit = '';
    }

    $table = $this->getTableName();
    $sql = apply_filters('vtcore_query_alter',
            str_replace("'$uniqid'", '',
              $wpdb->prepare(
                "SELECT $lookup FROM $table $where $order $limit"
              , $placeholder)),
            $uniqid);

    return $wpdb->get_results($sql);
  }
}