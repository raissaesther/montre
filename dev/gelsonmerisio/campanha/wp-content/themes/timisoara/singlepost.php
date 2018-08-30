<?php 
$options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
timisoara_bunch_global_variable();
 ?>
  <div class="news-block">

	<div class="inner-box">
	<?php if(has_post_thumbnail()):?>
		<div class="image-box"><?php the_post_thumbnail();?>
		</div>
		<?php endif;?>
		<div class="lower-content">
		<?php if(timisoara_set($meta, 'sposttitle')):?>
		<h3><?php the_title();?></h3>
		<?php endif ; ?>
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
			
			<div class="text">
				<?php the_content(); ?>
		<div class="clearfix"></div>		
<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'timisoara'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
			</div>

			<!-- Other Options -->
			<div class="post-share-options clearfix">
				
				<?php if(!timisoara_set($options, 'post_tag')):?>    
				<div class="pull-left tags"><?php the_tags('Tag: ', ',', ''); ?></div>
								<?php endif;?>		
					
				
				<div class="pull-right">
					<?php if(!timisoara_set($options, 'post_social')):?>    
									<?php if(function_exists('bunch_share_us')) echo wp_kses_post(bunch_share_us(get_the_id(),$post->post_name ));?>
					<?php endif;?>
				</div>
			</div>
			
			<!-- Author Box -->
			<?php if(get_the_author_meta('description')):?>
			<div class="author-box">
				<div class="inner-box">
					<div class="image-box"><?php echo get_avatar('', 85 ); ?></div>
					<div class="info">
						<span><?php esc_html_e('Written by: ', 'timisoara');?></span>
						<h3><a href="#"><?php the_author(); ?></a></h3>
					</div>
					<p><?php the_author_meta( 'description', get_the_author_meta('ID') );?></p>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>

<?php if(!timisoara_set($options, 'commentbox')):?>	
	<?php comments_template(); ?> 
<?php endif;?> 
 <?php if(!timisoara_set($meta, 'navigation')):?>         
						 <div class="posts-nav">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <?php previous_post_link('%link','<div class="prev-post"><span class="fa fa-long-arrow-left"></span> &nbsp;&nbsp;&nbsp; Prev Post</div>'); ?>
                                            </div>
                                            <div class="pull-right">
                                                <?php next_post_link('%link','<div class="next-post">Next Post &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span> </div>'); ?>
                                            </div>                                
                                        </div>
                                    </div>
					<?php endif; ?>