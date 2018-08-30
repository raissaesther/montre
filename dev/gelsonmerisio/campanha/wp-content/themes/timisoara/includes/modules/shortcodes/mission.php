<section class="<?php echo esc_attr(wp_kses_post($class));?> our-mission">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($ttitle);?></h2>
                            <p><?php echo wp_kses_post($text);?> </p>
                        </div>                
                    </div>
                </div>

                <!-- Image-column -->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <figure class="image-box " data-wow-duration="2500ms"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>