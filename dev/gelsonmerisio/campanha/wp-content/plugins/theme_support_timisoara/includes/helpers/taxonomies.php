<?php
class Bunch_Taxonomies
{
	var $team_slug = '';
	var $team_cat_slug = '';
	
	var $services_slug = '';
	var $services_cat_slug = '';
	
	var $projects_slug = '';
	var $projects_cat_slug = '';
	
	var $gallerys_slug = '';
	var $gallerys_cat_slug = '';
	
	var $testimonials_slug = '';
	var $testimonials_cat_slug = '';
	
	var $faqs_slug = '';
	var $faqs_cat_slug = '';
	
	var $menu_slug = '';
	var $menu_cat_slug = '';
	
	function __construct()
	{
		// Hook into the 'init' action
		//add_action( 'init', array($this, 'taxonomies'), 0 );
		$theme_option = _WSH()->option(); 
		$this->services_cat_slug = bunch_set($theme_option , 'services_category_permalink' , 'services_category');
		$this->menu_cat_slug = bunch_set($theme_option , 'menu_category_permalink' , 'menu_category');
		
		$this->projects_cat_slug = bunch_set($theme_option , 'projects_category_permalink' , 'projects_category');
		
		$this->gallerys_cat_slug = bunch_set($theme_option , 'gallery_category_permalink' , 'gallery_category');
		
		$this->team_cat_slug = bunch_set($theme_option ,
		'team_category_permalink' , 'team_category');
		$this->testimonials_cat_slug = bunch_set($theme_option , 'testimonial_category_permalink' , 'testimonials_category');
		$this->faqs_cat_slug = bunch_set($theme_option , 'faqs_category_permalink' , 'faqs_category');
		$this->taxonomies();
	}
	// Register Custom Taxonomy
	function taxonomies()  {
		/*** Register project taxonomy projects_category */
		
		$labels = array(
			'name'                       => _x( 'Category', 'Project Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->projects_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'projects_category' , 'bunch-project' , $args );
		/*** Register Gallery taxonomy gallery_category */
		
		$labels = array(
			'name'                       => _x( 'Category', 'gallery Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->gallerys_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'gallery_category' , 'bunch-gallery' , $args );
		
		/*** Register testimonial taxonomy testimonials_category */	
		$labels = array(
			'name'                       => _x( 'Category', 'Testimonial Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->testimonials_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'testimonials_category', 'bunch_testimonials', $args );
		
		/*** Register team taxonomy team_category */	
		$labels = array(
			'name'                       => _x( 'Category', 'Team Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->team_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'team_category', 'bunch_team', $args );
	    /*** Register FAQs taxonomy faqs_category */
	
		$labels = array(
			'name'                       => _x( 'Category', 'FAQs Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Project Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Project Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->faqs_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy( 'faqs_category', 'bunch_faqs', $args );
		
		/*** Register service taxonomy services_category */
		$labels = array(
			'name'                       => _x( 'Category', 'Service Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->services_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy('services_category', 'bunch_services', $args );
		
		/*** Register menu taxonomy menu_category */
		$labels = array(
			'name'                       => _x( 'Category', 'Menu Category', BUNCH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', BUNCH_NAME ),
			'menu_name'                  => __( 'Category', BUNCH_NAME ),
			'all_items'                  => __( 'All Categories', BUNCH_NAME ),
			'parent_item'                => __( 'Parent Category', BUNCH_NAME ),
			'parent_item_colon'          => __( 'Parent Category:', BUNCH_NAME ),
			'new_item_name'              => __( 'New Category Name', BUNCH_NAME ),
			'add_new_item'               => __( 'Add New Category', BUNCH_NAME ),
			'edit_item'                  => __( 'Edit Category', BUNCH_NAME ),
			'update_item'                => __( 'Update Category', BUNCH_NAME ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', BUNCH_NAME ),
			'search_items'               => __( 'Search Categories', BUNCH_NAME ),
			'add_or_remove_items'        => __( 'Add or remove Categories', BUNCH_NAME ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', BUNCH_NAME ),
		);
		$rewrite = array(
			'slug'                       => $this->menu_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
		register_taxonomy('menu_category', 'bunch_menu', $args );
	}
}