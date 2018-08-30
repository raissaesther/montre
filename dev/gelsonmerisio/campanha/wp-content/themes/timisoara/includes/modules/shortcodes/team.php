<?php $count = 1;
$query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['team_category'] = $cat;
$query = new WP_Query($query_args); ?>

<?php if($query->have_posts()): ?>



<section class="<?php echo esc_attr(wp_kses_post($class));?> team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>

            <div class="row clearfix">
                
				<?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$teams_meta = _WSH()->get_meta();
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				   ?>
				
				<!-- Team Block -->
                <div class="team-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><a href="<?php echo esc_url(timisoara_set($teams_meta, 'meta_link'));?>"><?php the_post_thumbnail(); ?></a></figure>
                            
							<?php if($socials = timisoara_set($teams_meta, 'bunch_team_social')):?>
							
							<ul class="social-links">
                                
								<?php foreach($socials as $key => $value):?>
								
								<li><a href="<?php echo esc_url(timisoara_set($value, 'social_link')); ?>"><i class="fa <?php echo esc_attr(timisoara_set($value, 'social_icon'));?>"></i></a></li>
								
								<?php endforeach;?>
                            </ul>
							<?php endif;?>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="<?php echo esc_url(timisoara_set($teams_meta, 'meta_link'));?>"><?php the_title(); ?></a></h4>
                            <span class="designation"><?php echo wp_kses_post(timisoara_set($teams_meta, 'meta_designation'));?></span>
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif; wp_reset_postdata(); ?>