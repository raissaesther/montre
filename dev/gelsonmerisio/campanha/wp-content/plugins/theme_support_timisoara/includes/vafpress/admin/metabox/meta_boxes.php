<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
$meta_subtitle = array(
					'type' => 'textbox',
					'name' => 'subtitle',
					'label' => __('Subtitle', BUNCH_NAME),
					'default' => '',
				);
				
$meta_link = array(
					'type' => 'textbox',
					'name' => 'meta_link',
					'label' => __('Link Page', BUNCH_NAME),
					'default' => '',
				);
$meta_image =	array(
						'type' => 'upload',
						'name' => 'meta_image',
						'label' => __('Image Icon', BUNCH_NAME),
						'default' => '',
					);
$meta_menu_style = array(
		'type' => 'select',
		'name' => 'meta_menu_style',
		'label' => __( 'Choose Menu Style', BUNCH_NAME ),
		'description' => __('Choose the Menu Style', BUNCH_NAME),
		'items' => array(
			array(
				'value' => '1',
				'label' => __( 'Multi Page', BUNCH_NAME ),
			),
			array(
				'value' => '2',
				'label' => __( 'One Page', BUNCH_NAME ),
			),
			array(
				'value' => '3',
				'label' => __( 'Extra Menu', BUNCH_NAME ),
			),
			
		),
		'default' => '1'
	);					
$meta_header_style = array(
					'type' => 'select',
					'name' => 'meta_header_style',
					'label' => __('Header Style', BUNCH_NAME),
					'description' => __('Choose the Header Style', BUNCH_NAME),
					'items' => array( 
						array(
								'value'=>'1',
								'label'=>'Style One'
							), 
						array(
								'value'=>'2',
								'label'=>'Style Two'
							), 
						array(
								'value'=>'3',
								'label'=>'Style Three'
							), 
						 
						),
					'default' => '1'
				);
$meta_breadcrumb_style = array(
					'type' => 'select',
					'name' => 'meta_breadcrumb_style',
					'label' => __('Breadcrumb Style', BUNCH_NAME),
					'description' => __('Choose Breadcrumb Style', BUNCH_NAME),
					'items' => array( 
						array(
								'value'=>'1',
								'label'=>'Style One'
							), 
						array(
								'value'=>'2',
								'label'=>'Style Two'
							), 
						array(
								'value'=>'3',
								'label'=>'Style Three'
							), 
						 
						),
					'default' => '1'
				);				
$meta_rating = array(
					'type' => 'select',
					'name' => 'meta_rating',
					'label' => __('Client Rating', BUNCH_NAME),
					'description' => __('Choose the Client Rating', BUNCH_NAME),
					'items' => array( 
						array(
								'value'=>'1',
								'label'=>'1'
							), 
						array(
								'value'=>'2',
								'label'=>'2'
							), 
						array(
								'value'=>'3',
								'label'=>'3'
							), 
						array(
								'value'=>'4',
								'label'=>'4'
							), 
						array(
								'value'=>'5',
								'label'=>'5'
							), 
						),
					'default' => '5'
				);					
$meta_icon = array(
					'type' => 'fontawesome',
					'name' => 'meta_icon',
					'label' => __('Icon', BUNCH_NAME),
					'default' => '',
				);
$meta_number = array(
					'type' => 'textbox',
					'name' => 'meta_number',
					'label' => __('Number', BUNCH_NAME),
					'default' => '',
				);
				
				
$meta_date =	array(
					'type' => 'textbox',
					'name' => 'meta_date',
					'label' => __('Date', BUNCH_NAME),
					'default' => '',
				);
$meta_tag =	array(
					'type' => 'textbox',
					'name' => 'meta_tag',
					'label' => __('Tag', BUNCH_NAME),
					'default' => '',
				);
$meta_location =	array(
					'type' => 'textbox',
					'name' => 'meta_location',
					'label' => __('Location', BUNCH_NAME),
					'default' => '',
				);
$meta_designation = array(
					'type' => 'textbox',
					'name' => 'meta_designation',
					'label' => __('Designation', BUNCH_NAME),
					'default' => '',
				);	
$meta_company = array(
					'type' => 'textbox',
					'name' => 'meta_company',
					'label' => __('Company', BUNCH_NAME),
					'default' => '',
				);				
$meta_rating	= array(
					'type' => 'select',
					'name' => 'meta_rating',
					'label' => __('Client Rating', BUNCH_NAME),
					'description' => __('Choose the Client Rating', BUNCH_NAME),
					'items' => array( 
						array(
								'value'=>'1',
								'label'=>'1'
							), 
						array(
								'value'=>'2',
								'label'=>'2'
							), 
						array(
								'value'=>'3',
								'label'=>'3'
							), 
						array(
								'value'=>'4',
								'label'=>'4'
							), 
						array(
								'value'=>'5',
								'label'=>'5'
							), 
						),
					'default' => '5'
				);
$meta_social = array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'meta_social',
					'title'     => __('Social Profile', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', BUNCH_NAME),
							'default' => '#',
						),
					),
				);
$bunch_team_social = array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_team_social',
					'title'     => __('Social Profile', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', BUNCH_NAME),
							'default' => '#',
						),
					),
				);
$meta_slider = array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'meta_slider',
					'title'     => __('Slides', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'textbox',
							'name' => 'title',
							'label' => __('Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textarea',
							'name' => 'text',
							'label' => __('Text', BUNCH_NAME),
							'default' => '',
							'description' => __('Enter the project solution.', BUNCH_NAME)
						),
					),
				);	
				
/*=========Main Meta Area =======*/
$options = array();
$options[] = array(
	'id'          => '_bunch_header_settings',
	'types'       => array('page', 'post', 'bunch-project','bunch_testimonials',),
	'title'       => __('Header Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array( 
			    
			     $meta_header_style,
				 $meta_menu_style,
				  array(
						'type' => 'toggle',
						'name' => 'breadcrumb',
						'label' => __('Hide Breadcrumb', BUNCH_NAME),
						'description' => __('Disable breadcrumb area in header for KC template', BUNCH_NAME),
					),
				$meta_breadcrumb_style,	
				   array(
						'type' => 'textbox',
						'name' => 'header_title',
						'label' => __('Header Title', BUNCH_NAME),
						'description' => __('Enter the Header title', BUNCH_NAME),
					),
					array(
						'type' => 'upload',
						'name' => 'header_img',
						'label' => __('Header image', BUNCH_NAME),
						'default' => '',
					),
					
					array(
						'type' => 'toggle',
						'name' => 'navigation',
						'label' => __('Hide Navigation', BUNCH_NAME),
						'description' => __('Disable Navigation area in header for KC template', BUNCH_NAME),
					),
					array(
						'type' => 'toggle',
						'name' => 'sposttitle',
						'label' => __('Show Post Title', BUNCH_NAME),
						'description' => __('Show Post Title With Content', BUNCH_NAME),
					),
				),
);

$options[] = array(
	'id'          => '_bunch_layout_settings',
	'types'       => array('post', 'page', 'product', 'bunch_services','bunch_testimonials', ),
	'title'       => __('Layout Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', BUNCH_NAME),
						'description' => __('Choose the layout for blog pages', BUNCH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png',
							),
						),
					),
					
					array(
						'type' => 'select',
						'name' => 'sidebar',
						'label' => __('Sidebar', BUNCH_NAME),
						'default' => '',
						'items' => bunch_get_sidebars(true)	
					),
				),
);

/*$options[] =  array(
	'id'          => _WSH()->set_meta_key('post'),
	'types'       => array('post'),
	'title'       => __('Post Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(		
					array(
					'type' => 'select',
					'name' => 'arrow_view',
					'label' => __('Arrow Layout for "Top Blog Posts" shortcode', BUNCH_NAME),
					'default' => 'img_left',
					'items' => array(
									array(
										'value' => 'img_left',
										'label' => __('Image Left', BUNCH_NAME),
									),
									array(
										'value' => 'img_right',
										'label' => __('Image Right', BUNCH_NAME),
									),
									array(
										'value' => 'img_top',
										'label' => __('Image Top', BUNCH_NAME),
									),
								),
					),
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Post Description', BUNCH_NAME),
						'default' => '',
						'description' => __('Enter the post description for detail page.', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'video',
						'label' => __('Video Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is video then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'audio',
						'label' => __('Audio Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is AUDIO then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'quote',
						'label' => __('Quote', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is quote then the content in this textarea will be displayed', BUNCH_NAME)
					),
							
					
			),
);*/
/* Page options */
/** Slides Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_slide'),
	'types'       => array('bunch_slide'),
	'title'       => __('Slides Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_slide_text',
					'title'     => __('Slide Content', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'textarea',
							'name' => 'slide_text',
							'label' => __('Slide Text', BUNCH_NAME),
							'default' => '',
						),
					),
				),
	),
);
/** Services Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_services'),
	'types'       => array( 'bunch_services' ),
	'title'       => __('Services Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				$meta_icon,
				$meta_link,
				//$meta_number,
				
			),
);
/** FAQs Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_faqs'),
	'types'       => array('bunch_faqs'),
	'title'       => __('FAQs Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				$meta_link,
	),
);
/** Project Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch-project'),
	'types'       => array('bunch-project'),
	'title'       => __('Projects Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				$meta_subtitle,
				$meta_designation,
				$meta_link,
				array(
						'type' => 'toggle',
						'name' => 'bigcolumn',
						'label' => __('Show Big Column', BUNCH_NAME),
						'description' => __('Show Big Column', BUNCH_NAME),
					),
				
				
				
	),
);
/** Gallery Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch-gallery'),
	'types'       => array('bunch-gallery'),
	'title'       => __('Image Gallery Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				$meta_subtitle,
				$meta_link,
				$meta_designation,
	),
);
/** Team Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_team'),
	'types'       => array('bunch_team'),
	'title'       => __('Team Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				$meta_designation,
				//$meta_company,
				$meta_link,
				//$meta_social,
				$bunch_team_social,
				
				
	),
);
/** Testimonial Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_testimonials'),
	'types'       => array('bunch_testimonials'),
	'title'       => __('Testimonials Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				$meta_designation,
				//$meta_company,
				$meta_link,
			    //$meta_rating,
	),
);
/** Menu Options 
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_menu'),
	'types'       => array('bunch_menu'),
	'title'       => __('Menu Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'textbox',
						'name' => 'price',
						'label' => __('Menu Price', BUNCH_NAME),
						'default' => '#',
					),
					array(
						'type' => 'textbox',
						'name' => 'banner',
						'label' => __('Menu Banner', BUNCH_NAME),
						'default' => '#',
					),
					array(
						'type' => 'textbox',
						'name' => 'ext_url',
						'label' => __('Read more link', BUNCH_NAME),
						'default' => '#',
					),
	),
);*/
/** Projects Options
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch-projects'),
	'types'       => array('bunch-projects'),
	'title'       => __('Image Gallery Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'textbox',
						'name' => 'ext_url',
						'label' => __('Read more link', BUNCH_NAME),
						'default' => '',
					),
						
									
	),
);*/
/**
 * EOF
 */
 
 
 return $options; 