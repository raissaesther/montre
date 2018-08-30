<section class="<?php echo esc_attr(wp_kses_post($class));?> work-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>   
            </div>
            <div class="work-blocks">
                <div class="row clearfix">
                    <!-- Work Block -->
                    
					<?php foreach( $atts['work'] as $key => $item ): ?>
					
					<div class="work-block col-md-<?php echo esc_attr(wp_kses_post($column));?> col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box "><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></div>
                            <h3><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h3>
                            <p><?php echo wp_kses_post($item->text); ?></p>
                        </div>
                    </div>
					
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>