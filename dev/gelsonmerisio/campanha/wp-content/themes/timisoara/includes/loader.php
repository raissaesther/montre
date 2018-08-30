<?php

if( !class_exists( 'Bunch_Base' ) ) include_once get_template_directory() . '/includes/base.php';
add_action( 'init', 'timisoara_bunch_theme_init');


if( !function_exists( 'timisoara_set' ) ) {
	function timisoara_set( $var, $key, $def = '' )
	{
		if( !$var ) return false;
	
		if( is_object( $var ) && isset( $var->$key ) ) return $var->$key;
		elseif( is_array( $var ) && isset( $var[$key] ) ) return $var[$key];
		elseif( $def ) return $def;
		else return false;
	}
}


if( !function_exists('timisoara_printr' ) ) {
	function timisoara_printr($data)
	{
		echo '<pre>'; print_r($data);exit;
	}
}

if( !function_exists('timisoara__font_awesome' ) ) {
	function timisoara_font_awesome( $index )
	{
		$array = array_values($GLOBALS['_font_awesome']);
		if( $font = timisoara_set($array, $index )) return $font;
		else return false;
	}
}

if( !function_exists('timisoara_load_class' ) ) {
	function timisoara_load_class($class, $directory = 'libraries', $global = true, $prefix = 'Bunch_')
	{
		$obj = &$GLOBALS['_bunch_base'];
		$obj = is_object( $obj ) ? $obj : new stdClass;
	
		$name = FALSE;
	
		// Is the request a class extension?  If so we load it too
		$path = get_template_directory().'/includes/'.$directory.'/'.$class.'.php';
		if( file_exists($path) )
		{
			$name = $prefix.ucwords( $class );
	
			if (class_exists($name) === FALSE)	require_once($path);
		}
	
		// Did we find the class?
		if ($name === FALSE) exit('Unable to locate the specified class in theme: '.$class.'.php');
	
		if( $global ) $GLOBALS['_bunch_base']->$class = new $name();
		else new $name();
	}
}


include_once get_template_directory() . '/includes/library/form_helper.php';
include_once get_template_directory() . '/includes/library/functions.php';
include_once get_template_directory() . '/includes/library/widgets.php';


timisoara_load_class( 'enqueue', 'helpers', false );
timisoara_load_class( 'bootstrap_walker', 'helpers', false );


if( timisoara_set( $_GET, 'bunch_shortcode_editor_action' ) ) {
	include_once get_template_directory() . '/ resource/shortcode_output.php';exit;
}

/**
 * Include Vafpress Framework
 */
	

if( is_admin() )
/** Plugin Activation */
include_once get_template_directory() . '/includes/thirdparty/tgm-plugin-activation/plugins.php';

function timisoara_bunch_theme_init()
{
	
	global $pagenow;
	
	$bunch_exlude_hooks = include_once get_template_directory(). '/includes/resource/remove_action.php';
	foreach( $bunch_exlude_hooks as $k => $v )
	{
		foreach( $v as $value )
		remove_action( $k, $value[0], $value[1] );
	}
	
	return;
	
	/**
	 * Include Custom Data Sources
	 */
	/**
	 * Load options, metaboxes, and shortcode generator array templates.
	 */
	// metaboxes
	$tmpl_mb1  = include TIMISOARA_ROOT.'includes/vafpress/admin/metabox/meta_boxes.php';
	// * Create instances of Metaboxes
	foreach( $tmpl_mb1 as $tmb )  new VP_Metabox($tmb);
	
	$tmpl_mb1  = include TIMISOARA_ROOT.'includes/vafpress/admin/taxonomy/taxonomy.php';
	include_once get_template_directory() .  '/vp_new/taxonomy.php' ;
	foreach( $tmpl_mb1 as $tmb )  new Bunch_Metabox($tmb);
	
	
	// shortocode generators
	$tmpl_sg1  = TIMISOARA_ROOT.'includes/vafpress/admin/shortcode_generator/shortcodes1.php';
	$tmpl_sg2  = TIMISOARA_ROOT.'includes/vafpress/admin/shortcode_generator/shortcodes2.php';

	if( is_admin() ) {
		
		include_once get_template_directory() . '/helpers/backup_class.php';
		$backup = new Bunch_Backup_class;
		
		if( timisoara_set( $_GET, 'page' ) == 'timisoara'.'_option' ) 
		{
			if( timisoara_set( $_GET, 'bunch_dummydata_export' ) ){
				
				$backup->export();
			}
		}
	}	
	
	if( function_exists( 'timisoara_vc_map' )) 
	include_once get_template_directory() .  '/vc_map.php' ;
	
	// options
	$tmpl_opt  = TIMISOARA_ROOT.'includes/vafpress/admin/option/option.php';
	
	
	/**
	 * Create instance of Options
	 */
	$theme_options = new VP_Option(array(
		'is_dev_mode'           => false,                                  // dev mode, default to false
		'option_key'            => 'timisoara'.'_theme_options',                      // options key in db, required
		'page_slug'             => 'timisoara'.'_option',                      // options page slug, required
		'template'              => $tmpl_opt,                              // template file path or array, required
		'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
		'use_auto_group_naming' => true,                                   // default to true
		'use_util_menu'         => true,                                   // default to true, shows utility menu
		'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
		'layout'                => 'fluid',                                // fluid or fixed, default to fixed
		'page_title'            => esc_html__( 'Theme Options', 'timisoara' ), // page title
		'menu_label'            => esc_html__( 'Theme Options', 'timisoara' ), // menu label
	));
	
	$bunch_exlude_hooks = include_once get_template_directory() . '/resource/remove_action.php';

	foreach( $bunch_exlude_hooks as $k => $v )
	{
		foreach( $v as $value )
		remove_action( $k, $value[0], $value[1] );
	}

}