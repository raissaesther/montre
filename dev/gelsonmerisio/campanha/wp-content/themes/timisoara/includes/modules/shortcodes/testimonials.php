<?php $count = 1;
$query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['testimonials_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>

<section class="<?php echo esc_attr(wp_kses_post($class));?> testimonial-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Testimonial Column -->
                <div class="tr testimonial-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($ttitle);?></h2>
                        </div>
						<div class="icon-three"></div>
						
						<div class="icon-five"></div>
						
						<div class="icon-ten"></div>
                        <div class="testimonial-carousel owl-carousel owl-theme">
						
						<?php while($query->have_posts()): $query->the_post();
							global $post;
							$testimonials_meta = _WSH()->get_meta(); ?>
						
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="fa fa-quote-left"></span></div>
                                    <p><?php echo wp_kses_post(timisoara_trim(get_the_content(), $text_limit)); ?></p>
                                    <div class="info-box">
                                        <h5 class="name"><?php the_title();?></h5>
                                        <span class="designation"><?php echo wp_kses_post(timisoara_set($testimonials_meta, 'meta_designation')); ?></span>
                                    </div>
                                </div>
                            </div>
							
							<?php endwhile;?>
                        </div>
                    </div>
                </div>
                
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <figure class="wow"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>