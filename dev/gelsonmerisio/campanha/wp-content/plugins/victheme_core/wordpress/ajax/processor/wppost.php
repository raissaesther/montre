<?php
/**
 * Class for processing post search ajax request
 *
 * @filter vtcore_post_field_ajax_search_value
 * @filter vtcore_post_field_ajax_search_query
 *
 * @see wp-ajaxselect.js
 * @see VTCore_Wordpress_Form_WpPost
 * @author jason.xie@victheme.com
 *
 */
class VTCore_Wordpress_Ajax_Processor_WpPost
  extends VTCore_Wordpress_Models_Ajax {

  protected function processAjax() {

    foreach ($this->post['queue'] as $queue) {
      switch ($queue) {
        case 'search' :

          if (isset($this->post['q']) && !empty($this->post['q'])) {

            global $wpdb;

            if (isset($this->post['options'])) {

              if (is_array($this->post['options'])) {
                $this->post['options'] = array_shift($this->post['options']);
              }
              $this->post['options'] = unserialize(base64_decode($this->post['options']));
            }

            $maybeTitle =  apply_filters('vtcore_post_field_ajax_search_value', '%' . $wpdb->esc_like($this->post['q']) . '%');
            $query = "SELECT ID, post_title FROM $wpdb->posts";

            $where = array(
              'post_title' => 'post_title LIKE %s',
              'post_status' => 'post_status=%s',
            );
            $placeholders = array(
              'post_title' => $maybeTitle,
              'post_status' => 'publish',
            );
            if (is_array($this->post['options'])) {
              foreach ($this->post['options'] as $type => $value) {
                if (is_int($value)) {
                  $where[$type] = $type . '=%d';
                  $placeholders[$type] = $value;
                }
                elseif (is_string($value)) {
                  $where[$type] = $type . '="%s"';
                  $placeholders[$type] = $value;
                }
              }

              if (!empty($options)) {
              }
            }

            $query .= ' WHERE ' . implode(' AND ', $where);
            $query .= ' LIMIT %d, %d';
            $placeholders['limit_1'] = 0;
            $placeholders['limit_2'] = 100;

            $query = $wpdb->prepare($query, $placeholders);
            $query = apply_filters('vtcore_post_field_ajax_search_query', $query, $where, $placeholders);
            $posts = $wpdb->get_results($query);

            if (!empty($posts)) {
              $output = array();
              foreach ($posts as $post) {
                $object = new stdClass();
                $object->value = $post->ID;
                $object->text = $post->post_title;
                $output[] = $object;
              }

              echo json_encode($output, TRUE);
            }
          }
          break;
      }
    }

    // Use die directly since this doesn't use not wp-ajax.js
    wp_die();
  }

}