<?php timisoara_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option(); 
	if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
	$layout = timisoara_set( $settings, 'search_page_layout', 'right' );
	$sidebar = timisoara_set( $settings, 'search_page_sidebar', 'blog-sidebar' );
	$view = timisoara_set( $settings, 'search_page_view', 'list' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = timisoara_set($settings, 'search_page_header_img');
	$title = timisoara_set($settings, 'search_title');

?>
<?php if(!timisoara_set($options, 'srch_banner')):?>
 <section class="page-title" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
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

 <!-- Sidebar Page -->
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
                <?php }?>
                <?php endif; ?>
				<?php if(have_posts()):?>  
				<!--Content Side-->
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
                        <!--Styled Pagination-->
						<div class="styled-pagination">
                            <?php timisoara_the_pagination(); ?>
                        </div>
                        <!--End Styled Pagination-->
                    </div>
                </div>
				<?php else : ?>
				<div class="blog_post_area eco-search">
					<div class="col-md-5 col-sm-5 col-xs-12 error-column">
				<?php if(timisoara_set($options, 'search_image')):?>
					<img src="<?php echo esc_url(timisoara_set($options, 'search_image'));?>" alt="<?php esc_attr_e('Image', 'timisoara');?> class="img-responsive">
					<?php else :?>
					<img src="<?php echo esc_url(get_template_directory_uri().'/images/search.png');?>" alt="<?php esc_attr_e('Image', 'timisoara');?>" class="img-responsive">
					<?php endif;?>
				</div>
					<div class="col-md-7 col-sm-7 col-xs-12 error-column1">
					<?php if(timisoara_set($settings, 'search_text')):?>
					<h2><a href="#"><?php echo timisoara_set($settings, 'search_text'); ?></a></h2>
					<?php else :?>
					<h1><a href="#">
					<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for', 'timisoara' ); ?></a></h1>
					<p><?php esc_html_e( '1. Check the spelling ', 'timisoara' ); ?>
                    </p>
                    <p><?php esc_html_e( '2. Check the Caps Lock', 'timisoara' ); ?>
</p>      
<p><?php esc_html_e( '3. Press Enter correctly or Press F5', 'timisoara' ); ?>
</p> 
          
					<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Perhaps Searching can help. Or You can Go Home', 'timisoara' ); ?></a></h4>
					<?php endif;?>
					<br>
					<?php get_search_form('searchform' ); ?>
				</div>
				
				
				</div>
				<?php endif; ?>
				
                <!-- sidebar area -->
                <?php if( $layout == 'right' ): ?>
                <?php if ( is_active_sidebar( $sidebar ) ) { ?>
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
					<?php dynamic_sidebar( $sidebar ); ?>
				</aside>
            </div>
                <?php }?>
                <?php endif; ?>
                <!-- sidebar area -->
            </div>
        </div>
     </div>
<?php get_footer(); ?>