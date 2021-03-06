<?php

if(!function_exists('qode_contentbottom_options_map')) {
	/**
	 * Content Bottom options page
	 */
	function qode_contentbottom_options_map()
	{

		$contentbottomPage = new QodeAdminPage("15", "Content Bottom");
		qode_framework()->qodeOptions->addAdminPage("Content Bottom", $contentbottomPage);

//Content Bottom Area

		$panel1 = new QodePanel("Content Bottom Area", "content_bottom_area_panel");
		$contentbottomPage->addChild("panel1", $panel1);

		$enable_content_bottom_area = new QodeField("yesno", "enable_content_bottom_area", "no", "Enable Content Bottom Area", "This option will enable Content Bottom area on pages", array(), array("dependence" => true, "dependence_hide_on_yes" => "", "dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"));
		$panel1->addChild("enable_content_bottom_area", $enable_content_bottom_area);

		$enable_content_bottom_area_container = new QodeContainer("enable_content_bottom_area_container", "enable_content_bottom_area", "no");
		$panel1->addChild("enable_content_bottom_area_container", $enable_content_bottom_area_container);

		$preformated_custom_sidebars = get_option( 'qode_sidebars' );
		$custom_sidebars = array();
		if ( is_array( $preformated_custom_sidebars ) && count( $preformated_custom_sidebars ) ) {
			foreach ( $preformated_custom_sidebars as $sidebar ) {
				$custom_sidebars[ sanitize_title( $sidebar ) ] = $sidebar;
			}
		}

		$content_bottom_sidebar_custom_display = new QodeField("selectblank", "content_bottom_sidebar_custom_display", "", "Sidebar to Display", "Choose a Content Bottom sidebar to display", $custom_sidebars);
		$enable_content_bottom_area_container->addChild("content_bottom_sidebar_custom_display", $content_bottom_sidebar_custom_display);

		$content_bottom_in_grid = new QodeField("yesno", "content_bottom_in_grid", "yes", "Display in Grid", "Enabling this option will place Content Bottom in grid");
		$enable_content_bottom_area_container->addChild("content_bottom_in_grid", $content_bottom_in_grid);

		$content_bottom_background_color = new QodeField("color", "content_bottom_background_color", "", "Background Color", "Choose a background color for Content Bottom area");
		$enable_content_bottom_area_container->addChild("content_bottom_background_color", $content_bottom_background_color);

	}
	add_action('qode_options_map','qode_contentbottom_options_map',170);
}