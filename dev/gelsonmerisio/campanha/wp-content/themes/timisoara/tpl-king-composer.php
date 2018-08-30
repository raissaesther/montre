<?php /* Template Name: King Composer Page */
	get_header() ;
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$header = timisoara_set($meta, 'meta_breadcrumb_style'); 
	$header = (timisoara_set($_GET, 'meta_breadcrumb_style')) ? timisoara_set($_GET, 'meta_breadcrumb_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/bread_v2');
			break;
		default:
			get_template_part('includes/modules/bread/bread_v1');
		}
?>

<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>	
<?php endwhile;  ?>
<?php if(!timisoara_set($meta, 'navigation')):?>
<div class="new-posts">
        <div class="clearfix">
            <div class="pull-left">
				<?php previous_post_link('%link','<div class="prev"><span class="fa fa-long-arrow-left"></span> &nbsp;&nbsp;&nbsp; Prev Post</div>'); ?>
            </div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="grid-btn"><span class="fa fa fa-th"></span></a>
            <div class="pull-right">
               <?php next_post_link('%link','<div class="next">Next Post &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span> </div>'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>	
<?php get_footer() ; ?>