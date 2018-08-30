<section class="<?php echo esc_attr(wp_kses_post($class));?> project-detail">
	<div class="auto-container">
		<div class="image-box">
			<figure><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
			<h3><?php echo wp_kses_post($ttitle);?></h3>
		</div>

		<div class="lower-content">
			<ul class="info">
				
				<?php foreach( $atts['projects_details'] as $key => $item ): ?>
				
				<li><h4><?php echo wp_kses_post($item->title); ?></h4><span><?php echo wp_kses_post($item->text); ?></span></li>
				
				<?php endforeach; ?>
			</ul>
			<h5><?php echo wp_kses_post($text);?></h5>
			<p><?php echo wp_kses_post($text1);?></p>
		</div>

	</div>
</section>