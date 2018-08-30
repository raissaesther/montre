<section class="<?php echo esc_attr(wp_kses_post($class));?> news-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                            <h2><?php echo wp_kses_post($title);?></h2>
                            <div class="info">
                                <h4><?php echo wp_kses_post($title1);?></h4>
                                <ul>
                                    
									<?php foreach( $atts['txt'] as $key => $item ): ?>
									
									<li><?php echo wp_kses_post($item->title); ?><a href="<?php echo esc_url($item->link); ?>"> <?php echo wp_kses_post($item->text); ?></a></li>
                                    
									<?php endforeach; ?>
                                </ul>
                            </div>
                            <p><?php echo wp_kses_post($text);?></p>
                        </div>
                    </div>
                </div>

                <div class="slider-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column ">
                        <div class="single-item-carousel owl-carousel owl-theme">
                            
							<?php foreach( $atts['img'] as $key => $item ): ?>
							
							<!-- Image Box -->
                            <div class="image-box">
                                <div class="image"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></a></div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>