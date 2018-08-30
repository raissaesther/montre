<section class="<?php echo esc_attr(wp_kses_post($class));?> about-us">
        <span class="float-text"><?php echo wp_kses_post($bgtitle);?></span>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($title);?></h2>
                        </div>                
                    </div>
                </div>

                <!-- Text Column -->
                <div class="text-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <p><?php echo wp_kses_post($text);?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>