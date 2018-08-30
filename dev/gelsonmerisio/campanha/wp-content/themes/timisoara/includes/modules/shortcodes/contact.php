<section class="<?php echo esc_attr(wp_kses_post($class));?> contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="form-column">
                    <div class="contact-form">
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                </div>
            </div>
        </div>
</section>