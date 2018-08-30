<section class="<?php echo esc_attr(wp_kses_post($class));?> contact-info-section">
	<div class="inner-container">
		<div class="row clearfix">
			<!-- Info Block -->
			
			<?php foreach( $atts['contact_block'] as $key => $item ): ?>
			
			<div class="info-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-4 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box " data-wow-delay="500ms" data-wow-duration="2500ms"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
                        <p><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->text); ?></a></p>
                        <p><a href="<?php echo esc_url($item->link1); ?>"><?php echo wp_kses_post($item->text1); ?></a></p>
                    </div> 
                </div>
			
			<?php endforeach; ?>
		</div>
	</div>
</section>