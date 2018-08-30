<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   
<section class="<?php echo esc_attr(wp_kses_post($class));?> blog-grid-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- News Block -->
                
				<?php while($query->have_posts()): $query->the_post();
        global $post ; 
        $post_meta = _WSH()->get_meta();
    ?>   
				
				<div class="news-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box ">
                        <div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
                        <div class="lower-content">
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                            <p><?php echo wp_kses_post(timisoara_trim(get_the_excerpt(), $text_limit));?></p>
                            <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more"><?php echo wp_kses_post($btn);?> <i class="flaticon-play"></i></a>
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>


		