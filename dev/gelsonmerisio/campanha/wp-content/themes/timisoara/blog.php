<?php 
$options = _WSH()->option();
timisoara_bunch_global_variable();
 ?>
<!-- News Block -->
<div class="news-block">
	<div class="inner-box ">
	<?php if(has_post_thumbnail()):?>
		<div class="image-box"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail();?></a></div>
		<?php endif;?>
		<div class="lower-content">
			
	<h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3>
			<div class="post-info">
<?php if(!timisoara_set($options, 'author')):?>
<span class="meta_infox fa fa-user"></span>
<?php if (timisoara_set($options, 'by_text')) : ?>
<?php echo wp_kses_post(timisoara_set($options, 'by_text')); ?>
<?php else : ?>
<?php esc_html_e('By: ', 'timisoara');?>
<?php endif ; ?>
<?php the_author();?>
<?php endif ; ?>
<?php if(!timisoara_set($options, 'date')):?>
<span class="meta_infox fa fa-calendar"></span>
<?php echo get_the_date();?>
<?php endif ; ?>
<?php if(!timisoara_set($options, 'comments')):?>
<span class="meta_infox fa fa-comments"></span>
<?php comments_number(); ?>
<?php endif ; ?>			
<?php if(!timisoara_set($options, 'tag')):?>		
	
		<span class="meta_tags"><?php the_tags(); ?></span>
<?php endif ; ?>			
</div>	

			<?php the_excerpt();?>
			
			<?php if (timisoara_set($options, 'btn_title')) : ?>	
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more"><?php echo wp_kses_post(timisoara_set($options, 'btn_title'));?> <i class="flaticon-play"></i></a>
				<?php else : ?>
				<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="read-more"><?php esc_html_e(' Read More ', 'timisoara');?> <i class="flaticon-play"></i></a>
				<?php endif ; ?>
			
		</div>
	</div>
</div>