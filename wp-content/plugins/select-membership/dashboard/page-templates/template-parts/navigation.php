<ul class="qode-membership-dashboard-nav clearfix">
	<?php
	$nav_items = qode_membership_get_dashboard_navigation_items();
	$user_action = isset($_GET['user-action']) ? $_GET['user-action'] : 'profile';
	foreach ( $nav_items as $nav_item ) { ?>
		<li>
			<a href="<?php echo $nav_item['url']; ?>" <?php if($user_action == $nav_item['user_action']){ echo 'class="active"'; } ?>>
				<?php echo $nav_item['text']; ?>
			</a>
		</li>
	<?php } ?>
	<li>
		<a href="<?php echo wp_logout_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Log out', 'qode_membership' ); ?>
		</a>
	</li>
</ul>