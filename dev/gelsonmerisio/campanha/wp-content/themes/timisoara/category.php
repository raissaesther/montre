<?php timisoara_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$meta = _WSH()->get_term_meta( '_bunch_category_settings' );
	_WSH()->page_settings = $meta; 
	if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
	$layout = timisoara_set( $meta, 'layout', 'right' );
	$sidebar = timisoara_set( $meta, 'sidebar', 'blog-sidebar' );
	$view = timisoara_set( $meta, 'view', 'list' );
	$view = timisoara_set( $_GET, 'view' ) ? timisoara_set( $_GET, 'view' ) : $view;
	$classes = ( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = timisoara_set($meta, 'header_img');
	$title = timisoara_set($meta, 'header_title');
?>
<!--Page Title-->
<?php if(!timisoara_set($options, 'tag_settings')):?>
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
<!--Sidebar Page-->

   
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