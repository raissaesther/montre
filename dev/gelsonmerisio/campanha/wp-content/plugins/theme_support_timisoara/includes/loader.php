<?php
add_action('init', '_bunch_plugin_init');
if( !function_exists( 'bunch_set' ) ) {
	function bunch_set( $var, $key, $def = '' )
	{
		if( !$var ) return false;
	
		if( is_object( $var ) && isset( $var->$key ) ) return $var->$key;
		elseif( is_array( $var ) && isset( $var[$key] ) ) return $var[$key];
		elseif( $def ) return $def;
		else return false;
	}
}
function bunch_get_rev_slider( $vp = 1 )
{
	global $wpdb;
	
	$table = $wpdb->get_results("SHOW TABLES LIKE '".$wpdb->prefix."revslider_sliders'", ARRAY_A);
	if( !$table ) return array();
	
	$res = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."revslider_sliders");
	$return = array();
	if( $res ){
		if( $vp ) {
			foreach( $res as $r )
			{
				$return[] = array( 'value' => bunch_set( $r, 'alias' ), 'label' => bunch_set( $r, 'title' ) );
			}
		}
		else {
			foreach( $res as $r )
			{
				$return[bunch_set( $r, 'alias' )] = bunch_set( $r, 'title' );
			}
		}
		
	}
	return $return;
}
function _load_plugins_class($class, $directory = 'libraries', $global = true, $prefix = 'Bunch_')
{
	$obj = &$GLOBALS['_bunch_base'];
	$obj = is_object( $obj ) ? $obj : new stdClass;
	$name = FALSE;
	// Is the request a class extension?  If so we load it too
	$path = BUNCH_TH_ROOT.'includes/'.$directory.'/'.$class.'.php';
	if( file_exists($path) )
	{
		$name = $prefix.ucwords( $class );
		if (class_exists($name) === FALSE)	require($path);
	}
	// Did we find the class?
	if ($name === FALSE) exit('Unable to locate the specified class: '.$class.'.php');
	if( $global ) $GLOBALS['_bunch_base']->$class = new $name();
	else new $name();
}
if( isset( $_GET['bunch_shortcode_editor_action'] ) ) {
	include_once('resource/shortcode_output.php');exit;
}
/**
 * Include Vafpress Framework
 */
require_once 'vafpress/bootstrap.php';
function _bunch_plugin_admin_init()
{
	
	
}
function _bunch_plugin_init()
{
	
	global $pagenow;
	
	include_once( 'library/functions.php' );
	_load_plugins_class( 'post_types', 'helpers', false );
	
	_load_plugins_class( 'taxonomies', 'helpers', false );
	_load_plugins_class( 'ajax', 'helpers', false );
	//_load_class( 'forms', 'helpers', false );
	
	//_load_class( 'validation', 'helpers', true );
	//_load_plugins_class( 'update_theme', 'update', false );
	_load_plugins_class( 'shortcodes', 'helpers', true );
	//_load_plugins_class( 'mega_menu', 'helpers', false );
	
	/**
	 * Include Custom Data Sources
	 */
	require_once 'vafpress/admin/data_sources.php';
	
	/**
	 * Load options, metaboxes, and shortcode generator array templates.
	 */
	// metaboxes
	$tmpl_mb1  = include BUNCH_TH_ROOT.'includes/vafpress/admin/metabox/meta_boxes.php';
	// * Create instances of Metaboxes
	foreach( $tmpl_mb1 as $tmb )  new VP_Metabox($tmb);
	
	$tmpl_mb1  = include BUNCH_TH_ROOT.'includes/vafpress/admin/taxonomy/taxonomy.php';
	include_once( 'vp_new/taxonomy.php' );
	foreach( $tmpl_mb1 as $tmb )  new Bunch_Metabox($tmb);
	
	
	// shortocode generators
	$tmpl_sg1  = BUNCH_TH_ROOT.'includes/vafpress/admin/shortcode_generator/shortcodes1.php';
	$tmpl_sg2  = BUNCH_TH_ROOT.'includes/vafpress/admin/shortcode_generator/shortcodes2.php';
	if( is_admin() ) {
		
		include_once( 'helpers/backup_class.php' );
		$backup = new Bunch_Backup_class;
		
		if( bunch_set( $_GET, 'page' ) == BUNCH_NAME.'_option' ) 
		{
			if( bunch_set( $_GET, 'bunch_dummydata_export' ) ){
				
				$backup->export();
			}
			
			/*if( bunch_set( $_GET, 'bunch_dummydata_import' ) ){ 
				include_once( 'helpers/backup_class.php' );
				$backup = new Bunch_Backup_class;
				$backup->import();
			}*/
			
		}
	}	
	
	if( function_exists( 'vc_map' )) 
	include_once( 'vc_map.php' );
	
	// options
	$tmpl_opt  = BUNCH_TH_ROOT.'includes/vafpress/admin/option/option.php';
	
	
	/**
	 * Create instance of Options
	 */
	$theme_options = new VP_Option(array(
		'is_dev_mode'           => false,                                  // dev mode, default to false
		'option_key'            => BUNCH_NAME.'_theme_options',                      // options key in db, required
		'page_slug'             => BUNCH_NAME.'_option',                      // options page slug, required
		'template'              => $tmpl_opt,                              // template file path or array, required
		'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
		'use_auto_group_naming' => true,                                   // default to true
		'use_util_menu'         => true,                                   // default to true, shows utility menu
		'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
		'layout'                => 'fluid',                                // fluid or fixed, default to fixed
		'page_title'            => __( 'Theme Options', BUNCH_NAME ), // page title
		'menu_label'            => __( 'Theme Options', BUNCH_NAME ), // menu label
	));
	
	bunch_user_extra( array('facebook'=>__('Facebook', BUNCH_NAME), 'twitter'=>__('Twitter', BUNCH_NAME), 'dribbble'=>__('Dribble', BUNCH_NAME), 'github'=>__('Github', BUNCH_NAME),
	'flickr'=>__('Flickr', BUNCH_NAME), 'google-plus'=>__('Google+', BUNCH_NAME), 'youtube'=>__('Youtube', BUNCH_NAME)) );
	
	// remove action code
		
}
include_once( 'vp_new/loader.php' );
