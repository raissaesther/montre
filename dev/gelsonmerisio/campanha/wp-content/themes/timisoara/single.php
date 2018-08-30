<?php $options = _WSH()->option();
	get_header(); 
	$settings  = timisoara_set(timisoara_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
	$layout = timisoara_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='right' ) $sidebar = ''; else
	$sidebar = timisoara_set( $meta, 'sidebar', 'default-sidebar' );
	
	$layout = ( $layout ) ? $layout : 'right';
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-12 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
	$bg = timisoara_set($meta1, 'header_img');
	$title = timisoara_set($meta1, 'header_title');
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
            
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
             <?php echo wp_kses_post(timisoara_get_the_breadcrumb()); ?>
        </div>
    </section>
    <!--End Page Title-->


    <div class="sidebar-page-container">
<div class="rt ">
        	<div class="icon-three"></div>
            <div class="icon-six"></div>
			<div class="icon-five"></div>
			<div class="icon-four"></div>
			<div class="icon-ten"></div>
        </div>
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
            <!--Content Side-->	
			<div class="wp-style content-side <?php echo esc_attr($classes); ?>">
                	<!--Blog Detail-->
                <div class="news-detail">

					<?php while( have_posts() ): the_post();
						global $post; 
						$post_meta = _WSH()->get_meta();
					?>
					 <?php get_template_part( 'singlepost' ); ?>
                    <?php endwhile;?>
                </div>
            </div>
            <!--Content Side-->
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
			 <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
			<?php } ?>
			<?php endif; ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>