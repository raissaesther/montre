<?php if( $style == '1' ): ?>
<section class="<?php echo esc_attr(wp_kses_post($class));?> fluid-section-one">
	<div class="outer-container clearfix">

		<!--Image Column-->
		<div class="image-column" style="background-image:url(<?php echo esc_url($bgimage); ?>);">
			<figure class="image-box"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
		</div>

		<!--Content Column-->
		<div class="content-column">
			<div class="inner-column">
				<div class="sec-title"> 
					<span class="title"><?php echo wp_kses_post($subtitle);?></span>
					<h2><?php echo wp_kses_post($ttitle);?></h2>
				</div>
				<div class="content">
					<p><?php echo wp_kses_post($text);?></p>

					<ul class="services-list">
						
						<?php foreach( $atts['what_we_do'] as $key => $item ): ?>
						
						<li>
							<div class="icon-box"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
							<h4><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h4>
							<p><?php echo wp_kses_post($item->text); ?></p>
						</li>
						
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php if( $style == '2' ): ?>

<section class="<?php echo esc_attr(wp_kses_post($class));?> fluid-section-one style-two">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title"> 
                        <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                        <h2><?php echo wp_kses_post($ttitle);?></h2>
                    </div>
                    <div class="content">
                        <p><?php echo wp_kses_post($text);?></p>

                        <ul class="services-list">
						
						<?php foreach( $atts['what_we_do'] as $key => $item ): ?>
						
						   <li>
                                <div class="icon-box"><span class="<?php echo esc_attr($item->icon); ?>"></span></div>
                                <h4><a href="<?php echo esc_url($item->link); ?>"><?php echo wp_kses_post($item->title); ?></a></h4>
                                <p><?php echo wp_kses_post($item->text); ?></p>
                            </li>
							
						<?php endforeach; ?>	
                        </ul>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column " style="background-image:url(<?php echo esc_url($bgimage); ?>);">
                <figure class="image-box"><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></figure>
            </div>
        </div>
    </section>

<?php endif; ?>