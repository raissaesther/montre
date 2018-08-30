<?php timisoara_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option();
	if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
	$layout = timisoara_set( $settings, 'archive_page_layout', 'right' );
	if( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = timisoara_set( $settings, 'archive_page_sidebar', 'blog-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = timisoara_set($settings, '404_page_header_img');
	$title = timisoara_set($settings, '404_page_header_title');
?>
	
<?php if(!timisoara_set($options, '404_banner')):?>
 <section class="page-title page-titlex" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <!-- Animated Icons -->
            <div class="anim-icons">
                <span class="icon-1"></span>
                <span class="icon-2"></span>
                <span class="icon-3"></span>
                <span class="icon-4"></span>
                <span class="icon-5"></span>
                <span class="icon-6"></span>
                <span class="icon-7"></span>
                <span class="icon-8"></span>
                <span class="icon-9"></span>
            </div>
            
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
             <?php echo wp_kses_post(timisoara_get_the_breadcrumb()); ?>
        </div>
    </section>
<?php endif;?>
 <section class="error-section">
        <div class="auto-container">
            <figure class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="2000ms"><img src="<?php echo esc_url(get_template_directory_uri().'/images/resource/error-image.png');?>" alt="<?php esc_attr_e('images', 'timisoara');?>"></figure>
           
		   <h2><?php esc_html_e( 'Opps!! Page Not Found', 'timisoara' ); ?></h2>
            <p><?php esc_html_e( 'The page you are looking for was removed or might never existed.', 'timisoara' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"><?php esc_html_e( 'Go to home', 'timisoara' ); ?> <i class="flaticon-play"></i></a>
            <!-- Bottom Image -->
        </div>
    </section>
<?php get_footer(); ?>