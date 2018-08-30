<?php global $post;
$query_args = array('post_type' => 'bunch-gallery' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);

if( $cat ) $query_args['gallery_category'] = $cat;
$query = new WP_Query($query_args) ;?>

<?php if($query->have_posts()):  ?>   
<?php if( $style == '1' ): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> project-section">
	<div class="outer-container">
		<div class="sec-title text-center">
			<span class="title"><?php echo wp_kses_post($subtitle);?></span>
			<h2><?php echo wp_kses_post($ttitle);?></h2>
		</div>

		<div class="row clearfix">
			<!-- Project Block -->
			
			<?php while($query->have_posts()): $query->the_post();
			global $post ; 
			$gallery_meta = _WSH()->get_meta();
		$post_thumbnail_id = get_post_thumbnail_id($post->ID);
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	?>
			
			<div class="project-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
				<div class="image-box ">
					<figure><?php the_post_thumbnail();?></figure>
					<div class="overlay-box">
						<div class="content">
							<span><?php echo timisoara_set($gallery_meta, 'meta_designation'); ?></span>
							<h4><a href="<?php echo esc_url(timisoara_set($gallery_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h4>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile;?> 
		</div>

		<!-- Btn box -->
		<div class="btn-box text-center">
			<a href="<?php echo esc_url($link);?>" class="theme-btn btn-style-one wow tada"><?php echo wp_kses_post($btn);?> <i class="flaticon-play"></i></a>
		</div>
	</div>
</section>
<?php endif; ?>
<?php if( $style == '2' ): ?>

<section class="<?php echo esc_attr(wp_kses_post($class));?> project-section style-two">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="sec-title pull-left">
                    <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                    <h2><?php echo wp_kses_post($ttitle);?></h2>
                </div>

                <div class="btn-box pull-right">
                    <a href="<?php echo esc_url($link);?>" class="theme-btn btn-style-one"><?php echo wp_kses_post($btn);?> <i class="flaticon-play"></i></a>
                </div>
            </div>
        </div>

        <div class="project-carousel owl-carousel owl-theme">
            <!-- Project Block -->
            
			<?php while($query->have_posts()): $query->the_post();
			global $post ; 
			$gallery_meta = _WSH()->get_meta();
		$post_thumbnail_id = get_post_thumbnail_id($post->ID);
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	?>
			
			<div class="project-block">
                <div class="image-box">
                    <figure><?php the_post_thumbnail();?></figure>
                    <div class="overlay-box">
                        <div class="content">
                            <span><?php echo timisoara_set($gallery_meta, 'meta_designation'); ?></span>
                            <h4><a href="<?php echo esc_url(timisoara_set($gallery_meta, 'meta_link')); ?>"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
                </div>
            </div>
			
			<?php endwhile;?>
        </div>
    </section>

<?php endif; ?>  
<?php endif; wp_reset_postdata(); ?>