<?php
/**
 * Class extending the Shortcodes base class
 * for building the WordPress post title
 *
 * how to use :
 *
 * [wppost_title
 *    postid="post id or dont use it to use global post"
 *    tag="the wrapper tag"
 *    class="the wrapper tag class"
 *    dynamic="true|false"
 * ]
 *
 * @author jason.xie@victheme.com
 *
 */
class VTCore_Wordpress_Shortcodes_WpTitle
extends VTCore_Wordpress_Models_Shortcodes
implements VTCore_Wordpress_Interfaces_Shortcodes {

  protected $processDottedNotation = true;

  public function buildObject() {

    if ($this->get('postid') && !$this->get('dynamic')) {
      $post = get_post($this->get('postid'));
    }
    else {
      global $post;
    }

    $this->add('text', $post->post_title);

    $this->object = new VTCore_Html_Element($this->atts);

  }
}