<?php
class Bunch_Enqueue
{
	
	function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'bunch_enqueue_scripts' ) );
		add_action( 'wp_head', array( $this, 'wp_head' ) );
		add_action( 'wp_footer', array( $this, 'wp_footer' ) );
		
		// Apply filter
		add_filter('body_class', array( $this, 'custom_body_classes') );
		
		add_action( '_bunch_body_id', array( $this, 'body_id' ) );
		
	}
	function bunch_enqueue_scripts()
	{
		global $post, $wp_query;
		$options = _WSH()->option();
		$current_theme = wp_get_theme();
		$header_style = bunch_set( $options, 'header_style' );
		//$header_style = bunch_set( $_GET, 'header_style' ) ? 'side' : 'normal';
 
		$version = $current_theme->get( 'Version' );
		
		$dark_color = ( bunch_set( $options, 'website_theme' ) == 'dark' ) ? true : false;
		
		$dark_color = ( bunch_set( $_GET, 'color_style' ) == 'dark' ) ? true : $dark_color;
		
		$protocol = is_ssl() ? 'https' : 'http';
		$styles = array( 'google_fonts' => $protocol.'://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic',
						 'bootstrap' => 'css/bootstrap.min.css',
						 'jquery-effects'	=> 'css/effects.css',
						 'jollyicons' => 'css/jollyicons.css',
						 'owl-carousel'	=> 'css/owl.carousel.css',
						 'extralayers'	=> 'css/extralayers.css',
						 'flexslider_custom' => 'css/flexslider.css',
						 
						 'glasscase' => 'css/glasscase.css',
						 'custom' => 'css/custom.css',
						 //'prettyPhoto' => 'css/prettyPhoto.css', 
						 
						 'woocommerce' => ( class_exists('woocommerce') ) ? 'css/woocommerce.css' : '',
						 
						 
						 'main-style'	=> 'style.css',
						 //'color_scheme' => 'css/colors.css' ,
					   );
		
		$styles = $this->custom_fonts($styles); //Load google fonts that user choose from theme options
		
		//if( $dark_color ) $styles['dark_scheme'] = 'css/dark-style.css';
							
		foreach( $styles as $name => $style )
		{
			if( !$style ) continue;
			if(strstr($style, 'http') || strstr($style, 'https') ) wp_enqueue_style( $name, $style);
			else wp_enqueue_style( $name, _WSH()->includes( $style, true ), '', $version );
		}
		
		$scripts = array( 
						  'bootstrap' => 'js/bootstrap.min.js',
						  
						  'bootstrap-select' => 'js/bootstrap-select.js', 
						  'jquery-ui' => 'js/jquery-ui.js',
						  
						  'jquery-fitvids' => 'js/jquery.fitvids.js',
						  'jquery-flexslider' => 'js/jquery.flexslider.js',
						  'retina'	=>	'js/retina.js',
						  'jquery-glasscase'	=> 'js/jquery.glasscase.min.js',
						  
						  'jquery-stellar'	=> 'js/jquery.stellar.js',
						  'jquery-modernizr'		=> 'js/modernizr.custom.js',
						  'jquery-jigowatt'		=> 'js/jquery.jigowatt.js',
						  'jquery-npm'		=> 'js/npm.js',
						  
						  'bootstrap-select' => 'js/bootstrap-select.js',
						  
						  'modernizr.custom'		=> 'js/modernizr.custom.js',
						  
						  'owl.carousel'		=> 'js/owl.carousel.js',
						  'custom_script' => 'js/custom.js',
						  
						  'main_script' => 'js/scripts.js',
						 );
		foreach( $scripts as $name => $js )
		{
			wp_register_script( $name, _WSH()->includes( $js, true ), '', $version, true);
		}
		wp_enqueue_script( array('jquery', 'bootstrap', 'jquery-stellar'));
		
		if( is_singular() ) wp_enqueue_script('comment-reply');
		
		if( is_single() ) {
			$format = get_post_format();
			if( $format == 'gallery' ) wp_enqueue_script( array( 'jquery-flexslider' ) );
			if( $format == 'video' || $format == 'audio' ) wp_enqueue_script( array( 'jquery-fitvids' ) );
		}
		if( is_singular( 'bunch-projects' ) || $wp_query->is_posts_page || is_search() || is_tag() || is_category() || is_author() || is_archive() ) 
  		wp_enqueue_script( array('jquery-flexslider', 'owl.carousel', 'jquery-fitvids') );
		wp_enqueue_script( array('custom_script') );
		
		
	}
	
	function wp_head()
	{
		$opt = _WSH()->option();
		$boxed = bunch_set( $opt, 'boxed_layout' );
		$boxed_style = ( $boxed && bunch_set( $opt, 'bg_boxed' ) ) ? ' body { background: url('.bunch_set( $opt, 'bg_boxed').') repeat center center; }' : '';
		
		if( is_page() ) {
			$meta = _WSH()->get_meta();//printr($meta);
			$boxed = (bunch_set( $meta, 'boxed' )) ? true : $boxed;
			$boxed_style = ( $boxed && bunch_set( $meta, 'bg_boxed' ) ) ? ' body { background: url('.bunch_set( $meta, 'bg_boxed').') repeat center center; }' : '';
		}
		
		echo '<script type="text/javascript"> if( ajaxurl === undefined ) var ajaxurl = "'.admin_url('admin-ajax.php').'";</script>';?>
		<style type="text/css">
			<?php
			if( bunch_set( $opt, 'body_custom_font') )
			echo bunch_get_font_settings( array( 'body_font_size' => 'font-size', 'body_font_family' => 'font-family', 'body_font_style' => 'font-style', 'body_font_color' => 'color', 'body_line_height' => 'line-height' ), 'body, p {', '}' );
			
			if( bunch_set( $opt, 'use_custom_font' ) ){
				echo bunch_get_font_settings( array( 'h1_font_size' => 'font-size', 'h1_font_family' => 'font-family', 'h1_font_style' => 'font-style', 'h1_font_color' => 'color', 'h1_line_height' => 'line-height' ), 'h1 {', '}' );
				echo bunch_get_font_settings( array( 'h2_font_size' => 'font-size', 'h2_font_family' => 'font-family', 'h2_font_style' => 'font-style', 'h2_font_color' => 'color', 'h2_line_height' => 'line-height' ), 'h2 {', '}' );
				echo bunch_get_font_settings( array( 'h3_font_size' => 'font-size', 'h3_font_family' => 'font-family', 'h3_font_style' => 'font-style', 'h3_font_color' => 'color', 'h3_line_height' => 'line-height' ), 'h3 {', '}' );
				echo bunch_get_font_settings( array( 'h4_font_size' => 'font-size', 'h4_font_family' => 'font-family', 'h4_font_style' => 'font-style', 'h4_font_color' => 'color', 'h4_line_height' => 'line-height' ), 'h4 {', '}' );
				echo bunch_get_font_settings( array( 'h5_font_size' => 'font-size', 'h5_font_family' => 'font-family', 'h5_font_style' => 'font-style', 'h5_font_color' => 'color', 'h5_line_height' => 'line-height' ), 'h5 {', '}' );
				echo bunch_get_font_settings( array( 'h6_font_size' => 'font-size', 'h6_font_family' => 'font-family', 'h6_font_style' => 'font-style', 'h6_font_color' => 'color', 'h6_line_height' => 'line-height' ), 'h6 {', '}' );
			}
			echo $boxed_style;			
			echo bunch_set( $opt, 'header_css' );
			?>
		</style>
        
        <?php bunch_theme_color_scheme(); ?>
		
		<?php if( bunch_set( $opt, 'header_js' ) ): ?>
			<script type="text/javascript">
                <?php echo bunch_set( $opt, 'header_js' );?>
            </script>
        <?php endif;?>
        <?php
	}
	
	function wp_footer()
	{
		$analytics = bunch_set( _WSH()->option(), 'footer_analytics');
		
		echo $analytics;
		
		$theme_options = _WSH()->option();
		
		if( bunch_set( $theme_options, 'footer_js' ) ): ?>
			<script type="text/javascript">
                <?php echo bunch_set( $theme_options, 'footer_js' );?>
            </script>
        <?php endif;
	}
	
	function custom_fonts( $styles )
	{
		$opt = _WSH()->option();
		$protocol = ( is_ssl() ) ? 'https' : 'http';
		$font = array();
		//$font_options = array('h1_font_family', 'h2_font_family', 'h3_font_family');
		
		if( bunch_set( $opt, 'use_custom_font' ) ){
			
			if( $h1 = bunch_set( $opt, 'h1_font_family' ) ) $font[$h1] = urlencode( $h1 ).':400,300,600,700,800';
			if( $h2 = bunch_set( $opt, 'h2_font_family' ) ) $font[$h2] = urlencode( $h2 ).':400,300,600,700,800';
			if( $h3 = bunch_set( $opt, 'h3_font_family' ) ) $font[$h3] = urlencode( $h3 ).':400,300,600,700,800';
		}
		
		if( bunch_set( $opt, 'body_custom_font' ) ){
			if( $body = bunch_set( $opt, 'body_font_family' ) ) $font[$body] = urlencode( $body ).':400,300,600,700,800';
		}
		
		if( $font ) $styles['bunch_google_custom_font'] = $protocol.'://fonts.googleapis.com/css?family='.implode('|', $font);
		
		return $styles;
	}
	
	function custom_body_classes( $classes )
	{
		$options = _WSH()->option();
		
		$dark_color = ( bunch_set( $options, 'website_theme' ) == 'dark' ) ? true : false;
		
		$dark_color = ( bunch_set( $_GET, 'color_style' ) == 'dark' ) ? true : $dark_color;
		
		if( $dark_color ) $classes[] = 'dark-style';
	
		return $classes;
	}
	
	function body_id() 
	{
		$options = _WSH()->option();
		
		$boxed = bunch_set( $options, 'boxed_layout' );
		
		$boxed_layout = ( $boxed && !$nobg ) ? ' id="boxed" ' : ''; 
		
		echo $boxed_layout;
	}
}