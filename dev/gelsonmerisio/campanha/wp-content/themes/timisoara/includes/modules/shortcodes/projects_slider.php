<section class="<?php echo esc_attr(wp_kses_post($class));?> project-detail">
        <div class="auto-container">

           <div class="related-projects">
				<h3><?php echo wp_kses_post($title);?></h3>
				<div class="project-carousel-two owl-carousel owl-theme">
		<!-- Project Block -->
		
				<?php foreach( $atts['projects_slider'] as $key => $item ): ?>
		
				<div class="project-block">
					<div class="image-box">
					<figure><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
						<div class="overlay-box">
							<div class="content">
							<span><?php echo wp_kses_post($item->title); ?></span>
							<h4><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></h4>
							</div>
						</div>
					</div>
				</div>
		
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>