<?php global $post;
$query_args = array('post_type' => 'bunch_services' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
if( $cat ) $query_args['services_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>

<?php if( $style == '1' ): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> feature-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>

            <div class="features">
                <div class="row clearfix">
                    
					<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
					
					<!-- Feature Block -->
                    <div class="feature-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
					 <div class="tr">
        	<div class="icon-three"></div>
			
        </div>
                        <div class="inner-box ">
                            <div class="icon-box"><i class="<?php echo esc_attr(timisoara_set($services_meta, 'meta_icon'));?>"></i></div>
                            <h3><a href="<?php echo esc_url(timisoara_set($services_meta, 'meta_link'));?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_kses_post(timisoara_trim(get_the_content(), $text_limit)); ?></p>
                            <a href="<?php echo esc_url(timisoara_set($services_meta, 'meta_link'));?>" class="read-more"><?php echo wp_kses_post($btn);?></a>
                        </div>
                    </div>
					
					<?php endwhile; ?>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>
<?php if( $style == '2' ): ?>
    <section class="<?php echo esc_attr(wp_kses_post($class));?> feature-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>

            <div class="features">
                <div class="row clearfix">
                    <!-- Feature Block -->
                    
					<?php while($query->have_posts()): $query->the_post();
						global $post;
						$services_meta = _WSH()->get_meta(); ?>
					
					<div class="feature-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                        <div class="tr">
        	<div class="icon-three"></div>
			
        </div>
						<div class="inner-box ">
                            <div class="icon-box"><i class="<?php echo esc_attr(timisoara_set($services_meta, 'meta_icon'));?>"></i></div>
                            <h3><a href="<?php echo esc_url(timisoara_set($services_meta, 'meta_link'));?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_kses_post(timisoara_trim(get_the_content(), $text_limit)); ?></p>
                            <a href="<?php echo esc_url(timisoara_set($services_meta, 'meta_link'));?>" class="read-more"><?php echo wp_kses_post($btn);?></a>
                        </div>
                    </div>
					
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php endif; wp_reset_postdata(); ?>