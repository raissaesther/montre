<?php get_header(); ?>
<?php
global $wp_query;
$id = $wp_query->get_queried_object_id();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$sidebar = $qode_options['category_blog_sidebar'];

if(isset($qode_options['blog_page_range']) && $qode_options['blog_page_range'] != ""){
	$blog_page_range = $qode_options['blog_page_range'];
} else{
	$blog_page_range = $wp_query->max_num_pages;
}
$blog_style = $qode_options['blog_style'];
?>
	<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
		<script>
		var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
		</script>
	<?php } ?>
		<?php get_template_part( 'title' ); ?>
		<div class="container">
		<?php
                    if($blog_style!="5" && $blog_style!="8") : ?>
			<div class="container_inner default_template_holder clearfix">
                    <?php else : ?>
                            <div class="content_inner ">
                                <div class="full_width ">
                                    <div class="full_width_inner full_page_container_inner">
                    <?php endif; ?>
			<?php if(($sidebar == "default")||($sidebar == "")) : ?>
				<?php
					get_template_part('templates/blog/blog', 'structure');
				?>
			<?php elseif($sidebar == "1" || $sidebar == "2"): ?>
				<div class="<?php if($sidebar == "1"):?>two_columns_66_33<?php elseif($sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
						<div class="column_inner">
							<?php
								get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>
					</div>
				</div>
		<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
				<div class="<?php if($sidebar == "3"):?>two_columns_33_66<?php elseif($sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
					<?php get_sidebar(); ?>
					</div>
					<div class="column2">
						<div class="column_inner">
							<?php
								get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
        </div>
        </div>
        </div>
                    
<?php get_footer(); ?>