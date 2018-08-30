<?php timisoara_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	if( $wp_query->is_posts_page ) {
		$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
		$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
		if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
		$layout = timisoara_set( $meta, 'layout', 'right' );
		$sidebar = timisoara_set( $meta, 'sidebar', 'default-sidebar' );
		$view = timisoara_set( $meta, 'view', 'grid' );
		$bg = timisoara_set($meta1, 'header_img');
		$title = timisoara_set($meta1, 'header_title');
		$sub_title = timisoara_set($meta1, 'header_sub_title');
	} else {
		$settings  = _WSH()->option(); 
		if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
		$layout = timisoara_set( $settings, 'archive_page_layout', 'right' );
		$sidebar = timisoara_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
		$view = timisoara_set( $settings, 'archive_page_view', 'list' );
		$bg = timisoara_set($settings, 'archive_page_header_img');
		$title = timisoara_set($settings, 'archive_page_header_title');
		$sub_title = timisoara_set($settings, 'archive_page_header_sub_title');
	}
	$layout = timisoara_set( $_GET, 'layout' ) ? timisoara_set( $_GET, 'layout' ) : $layout;
	$view = timisoara_set( $_GET, 'view' ) ? timisoara_set( $_GET, 'view' ) : $view;
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
	$classes = ( $layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? 'col-lg-8 col-md-8 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	?>

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
            
            <h1><?php if($title) echo wp_kses_post($title); else esc_html_e('Blog', 'timisoara');?></h1>
            
        </div>
    </section>
    <!--End Page Title-->	

<div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">		
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
           
			  <div class="wp-style content-side <?php echo esc_attr($classes);?>">
                  <div class="news-classic">
			 
					<?php while( have_posts() ): the_post();?>
                        <!-- blog post item -->
                        <!-- Post -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            <?php get_template_part( 'blog' ); ?>
                        <!-- blog post item -->
                        </div><!-- End Post -->
                    <?php endwhile;?>
                    <!--Start post pagination-->
                    <div class="styled-pagination">
                        <?php timisoara_the_pagination(); ?>
                    </div>

                </div>
            </div>
            <!--Content Side-->
            
            <!--Sidebar-->	
            <!-- sidebar area -->
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			
            <!--Sidebar-->
            
        </div>
    </div>
    </div>

<?php get_footer(); ?>