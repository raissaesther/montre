 <section class="<?php echo esc_attr(wp_kses_post($class));?> fun-fact-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!-- Counter Box -->
                    
					<?php foreach( $atts['funfacts'] as $key => $item ): ?>
					
					<div class="counter-box col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#ff4b4b" data-bgColor="#ffffff" data-width="120" data-height="120" data-linecap="1"  value="<?php echo esc_attr($item->ff_value); ?>">
                                <div class="inner-text count-box"><span class="count-text txt" data-stop="<?php echo esc_attr($item->ff_stop); ?>" data-speed="2000"></span></div>
                            </div>
                            <h3><?php echo wp_kses_post($item->title); ?></h3>
                        </div>
                    </div>
					
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>