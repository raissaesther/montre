<section class="<?php echo esc_attr(wp_kses_post($class));?> contact-section style-two">
        <div class="outer-container clearfix">
            <div class="form-column">
                <div class="contact-form">
                    <?php echo do_shortcode($contact_form); ?>
                </div>
            </div>
        </div>
</section>