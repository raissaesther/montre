<?php 
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = timisoara_set($meta, 'header_img');
	$title = timisoara_set($meta, 'header_title');
?>
<?php if(!timisoara_set($meta, 'breadcrumb')):?> 
 <section class="page-title page-titlex" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="auto-container">
            <!-- Animated Icons -->
            <div class="anim-icons">
                <span class="icon-1"></span>
                <span class="icon-2"></span>
                <span class="icon-3"></span>
                <span class="icon-4"></span>
                <span class="icon-5"></span>
                <span class="icon-6"></span>
                <span class="icon-7"></span>
                <span class="icon-8"></span>
                <span class="icon-9"></span>
            </div>
            
            <h1><?php if($title) echo wp_kses_post($title); else wp_title(''); ?></h1>
             <?php echo wp_kses_post(timisoara_get_the_breadcrumb()); ?>
        </div>
    </section>
<?php endif;?>	
