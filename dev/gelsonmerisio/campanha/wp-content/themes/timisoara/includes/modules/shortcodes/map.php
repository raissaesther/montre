
<!-- Google map Hafizur****** -->
<section class="<?php echo esc_attr(wp_kses_post($class));?> map-section">
		<div class=" map-column">
			<article class="inner-box">
				<!--Map Container-->
				<div class="map-container" id="google-map-area">
					<!--Map Canvas-->
					<div class="google-map-home" id="google-map" data-map-lat="<?php echo esc_js($lat);?>" data-map-lng="<?php echo esc_js($long);?>" data-icon-path="<?php echo esc_url(get_template_directory_uri().'/images/map-marker.png');?>" data-map-title="<?php echo esc_js($mark_title);?>" data-map-zoom="<?php echo esc_js($zoom);?>">
					<div 
                    class="google-map" 
                    id="home-google-map" 
                    data-map-lat="<?php echo esc_js($lat); ?>" 
                    data-map-lng="<?php echo esc_js($long); ?>" 
                    data-icon-path="<?php echo get_template_directory_uri(); ?>/images/map-marker.png" 
                    data-map-title="<?php echo esc_js($city); ?>" 
                    data-map-zoom="<?php echo esc_js($zoom);?>" 
			
                    data-markers='{
                        "marker-1": [<?php echo esc_js($lat); ?>, <?php echo esc_js($long); ?>, "<h4><?php echo esc_js($mark_title); ?></h4><p><?php echo esc_js($mark_address); ?></p>"]
                    }'>
					
					</div>
				</div>
				</div>
			</article>
    </div>
</section>