<?php $count = 1;
$query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['testimonials_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>

            <div class="testimonial-carousel-two owl-carousel owl-theme">
                <!-- Testimonial Block -->
                
				<?php while($query->have_posts()): $query->the_post();
							global $post;
							$testimonials_meta = _WSH()->get_meta(); ?>
				
				<div class="testimonial-block-two">
                    <div class="inner-box">
                         <div class="thumb"><?php the_post_thumbnail();?></div>
                         <p><?php echo wp_kses_post(timisoara_trim(get_the_content(), $text_limit)); ?></p>
                         <div class="info">
                             <h4 class="name"><?php the_title();?></h4>
                             <span class="designation"><?php echo wp_kses_post(timisoara_set($testimonials_meta, 'meta_designation')); ?></span>
                         </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>


