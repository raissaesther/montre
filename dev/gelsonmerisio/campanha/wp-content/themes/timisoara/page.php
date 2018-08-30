<?php $options = _WSH()->option();
	get_header();
	$settings  = timisoara_set(timisoara_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(timisoara_set($_GET, 'layout_style')) $layout = timisoara_set($_GET, 'layout_style'); else
	$layout = timisoara_set( $meta, 'layout', 'right' );
	$sidebar = timisoara_set( $meta, 'sidebar', 'default-sidebar' );
	
	$layout = ( $layout ) ? $layout : 'right';
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	
	$classes = ( !$layout || $layout == 'full' || timisoara_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : 'col-xl-8 col-lg-8 col-md-12 col-sm-12' ;
	$bg = timisoara_set($meta1, 'header_img');
	$title = timisoara_set($meta1, 'header_title');
?>

<!--Page Title-->
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
    <!--End Page Title-->


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
           
			  <div class="wp-style wp-page content-side <?php echo esc_attr($classes);?>">
			   <div class="news-block">
						<div class="inner-box">
								 <div class="lower-content">
										<?php while( have_posts() ): the_post();?>
											<!-- blog post item -->
										<div class="text">
												<?php the_content(); ?>
										<div class="clearfix"></div>		
								<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'timisoara'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
											</div>
								</div>
						</div>	
					</div>
				
                    
					 <div class="clearfix"></div>
					<?php comments_template(); ?>

					<div class="posts-nav">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <?php previous_post_link('%link','<div class="prev-post"><span class="fa fa-long-arrow-left"></span> &nbsp;&nbsp;&nbsp; Prev Page</div>'); ?>
                                    </div>
                                    <div class="pull-right">
                                        <?php next_post_link('%link','<div class="next-post">Next Page &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span> </div>'); ?>
                                    </div>                                
                                </div>
                            </div>
					<?php endwhile;?>
                    <!--Start post pagination-->
                    <div class="styled-pagination">
                        <?php timisoara_the_pagination(); ?>
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