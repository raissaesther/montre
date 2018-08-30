<?php
/**
 * Class for processing user related ajax request
 *
 * @see wp-user.js
 * @see VTCore_Wordpress_Form_WpUser
 * @author jason.xie@victheme.com
 *
 */
class VTCore_Wordpress_Ajax_Processor_WpUser
  extends VTCore_Wordpress_Models_Ajax {

  protected function processAjax() {

    foreach ($this->post['queue'] as $queue) {
      switch ($queue) {
        case 'search' :
          if (isset($this->post['q'])) {

            if (isset($this->post['options'])) {

              if (is_array($this->post['options'])) {
                $this->post['options'] = array_shift($this->post['options']);
              }
              $this->post['options'] = unserialize(base64_decode($this->post['options']));
            }

            $query = array(
              'field' => 'user_login',
              'search' => '*' . $this->post['q'] . '*',
              'search_columns' => array(
                'user_login',
                'user_email',
                'user_nicename',
                'user_name'
              )
            );

            if (is_array($this->post['options'])) {
              foreach ($this->post['options'] as $key => $value) {
                $query[$key] = $value;
              }
            }

            $users = new WP_User_Query($query);

            $results = $users->get_results();
            if (!empty($results)) {
              $output = array();
              foreach ($results as $user) {
                $object = new stdClass();
                $object->value = $user->ID;
                $object->text = $user->user_login;
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