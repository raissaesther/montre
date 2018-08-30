<?php $options = get_option('timisoara'.'_theme_options');?>

 <!-- Main Footer -->
    <footer class="<?php echo wp_kses_post(timisoara_set($options, 'footerclass')); ?> main-footer" <?php if(timisoara_set($options, 'footerbg')): ?> style="background-image:url('<?php echo esc_url(timisoara_set($options, 'footerbg')); ?>');"<?php endif ; ?> >
    
	<?php if(!timisoara_set($options, 'top_footer_show')):?>     
	 <div class="footer-upper">
		<?php if ( is_active_sidebar( 'footer-sidebar' ) ): ?>
       
	    <div class="auto-container">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' );?>
                </div>
           
        </div>
        <?php endif;?>
		</div>
		  <?php endif;?>
		
<?php if(!timisoara_set($options, 'bottom_footer_show')):?> 
<div class="footer-bottom">
            <div class="auto-container">
                <?php if(!timisoara_set($options, 'copy_show')):?>
				<div class="copyright clearfix">
                    <p> <?php echo wp_kses_post(timisoara_set($options, 'copy_right')); ?></p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="link"><?php echo wp_kses_post(timisoara_set($options, 'footer_email')); ?></a>
                </div>
			<?php endif;?>	
            </div>
        </div>
		<?php endif;?>
    </footer>
    <!-- End Main Footer -->

	
<!--End pagewrapper-->
</div>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<?php wp_footer(); ?>
</body>
</html>