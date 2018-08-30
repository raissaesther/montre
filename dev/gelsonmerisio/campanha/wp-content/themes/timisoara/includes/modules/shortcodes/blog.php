<?php  
   global $post ;
   $count = 0;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'post' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['category_name'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>   
<section class="<?php echo esc_attr(wp_kses_post($class));?> news-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($ttitle);?></h2>
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                    </div>
                </div>

                <div class="slider-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="news-carousel owl-carousel owl-theme">
                            
							<?php while($query->have_posts()): $query->the_post();
        global $post ; 
        $post_meta = _WSH()->get_meta();
    ?>  
							
							<!-- News Block -->
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
                                    <div class="lower-content">
                                        <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
                                        <p><?php echo wp_kses_post(timisoara_trim(get_the_excerpt(), $text_limit));?></p>
                                        

	<?php if(wp_kses_post($btn)) : ?>
<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more"><?php echo wp_kses_post($btn);?> 
<i class="flaticon-play"></i></a>
	<?php endif ; ?>
<!--Read More Button-->	 
										
										
                                    </div>
                                </div>
                            </div>
							
							<?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>


		