<?php
/**
 * King composer array
 *
 * @package Student WP
 * @author Shahbaz Ahmed <rashidcloud@gmail.com>
 * @version 1.0
 Predefine Variable
 Main  Arrays
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
/** ====Predefine Variable============ */
$orderby = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order By", BUNCH_NAME),
				"name"			=>	"sort",
				'options'		=>	array('date'=>esc_html__('Date', BUNCH_NAME),'title'=>esc_html__('Title', BUNCH_NAME) ,'name'=>esc_html__('Name', BUNCH_NAME), 'author'			=>	esc_html__('Author', BUNCH_NAME),'comment_count' =>esc_html__('Comment Count', BUNCH_NAME),'random' =>esc_html__('Random', BUNCH_NAME) ),
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$rvslider = array(
				'type'			=> 'dropdown',
				'label'			=> esc_html__('Choose Slider', BUNCH_NAME ),
				'name'			=> 'slider_slug',
				'options'		=> bunch_get_rev_slider( 0 ),
				'description'	=> esc_html__('Choose Slider', BUNCH_NAME )
			);
$order = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order", BUNCH_NAME),
				"name"			=>	"order",
				'options'		=>	(array('ASC'=>esc_html__('Ascending', BUNCH_NAME),'DESC'=>esc_html__('Descending', BUNCH_NAME) ) ),			
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$number = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Number', BUNCH_NAME ),
				"name"			=>	"num",
				"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
			);
$text_limit = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Text Limit', BUNCH_NAME ),
				"name"			=>	"text_limit",
				"description"	=>	esc_html__('Enter text limit of posts to Show.', BUNCH_NAME )
			);
$bgtitle = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('BG Title', BUNCH_NAME ),
				"name"			=>	"bgtitle",
				"description"	=>	esc_html__('Enter Background Title.', BUNCH_NAME )
			);			
$title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"title",
				"description"	=>	esc_html__('Enter Title.', BUNCH_NAME )
			);
$title1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Two', BUNCH_NAME ),
				"name"			=>	"title1",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
$title2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Three', BUNCH_NAME ),
				"name"			=>	"title2",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
		
$title3 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Four', BUNCH_NAME ),
				"name"			=>	"title3",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);	
$title4 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title Four', BUNCH_NAME ),
				"name"			=>	"title4",
				"description"	=>	esc_html__('Enter another Title.', BUNCH_NAME )
			);
$tab = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab', BUNCH_NAME ),
				"name"			=>	"tab",
				"description"	=>	esc_html__('Enter Tab', BUNCH_NAME )
			);		
$tab1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Tab Two', BUNCH_NAME ),
				"name"			=>	"tab1",
				"description"	=>	esc_html__('Enter Tab Two', BUNCH_NAME )
			);			
$subtitle = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);
$subtitle1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle1",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);	
$subtitle2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"subtitle2",
				"description"	=>	esc_html__('Enter subtitle.', BUNCH_NAME )
			);
$text = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);	
$textx = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"textx",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$ttitle = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"ttitle",
				"description"	=>	esc_html__('Enter the Title to show.', BUNCH_NAME )
			);	
$ttitle1 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"ttitle1",
				"description"	=>	esc_html__('Enter the Title to show.', BUNCH_NAME )
			);			
$text1 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text1",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$text2 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text2",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$text3 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text3",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$text4 = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text4",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);			
$email = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Email', BUNCH_NAME ),
				"name"			=>	"email",
				"description"	=>	esc_html__('Enter email.', BUNCH_NAME )
			);
$phone = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Phone', BUNCH_NAME ),
				"name"			=>	"phone",
				"description"	=>	esc_html__('Enter phone.', BUNCH_NAME )
			);
$address = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Address', BUNCH_NAME ),
				"name"			=>	"address",
				"description"	=>	esc_html__('Enter address.', BUNCH_NAME )
			);
		
				
$website = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Website', BUNCH_NAME ),
				"name"			=>	"website",
				"description"	=>	esc_html__('Enter website.', BUNCH_NAME )
			);
$working_hours = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Working Hours', BUNCH_NAME ),
				"name"			=>	"working_hours",
				"description"	=>	esc_html__('Enter Working Hours.', BUNCH_NAME )
			);
$latitude = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Latitude', BUNCH_NAME ),
				"name"			=>	"latitude",
				"description"	=>	esc_html__('Enter latitude.', BUNCH_NAME )
			);
$longitude = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Longitude', BUNCH_NAME ),
				"name"			=>	"longitude",
				"description"	=>	esc_html__('Enter longitude.', BUNCH_NAME )
			);
$zoom = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Map Zoom', BUNCH_NAME ),
				"name"			=>	"zoom",
				"description"	=>	esc_html__('Enter map zoom.', BUNCH_NAME )
			);
$btn = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);
$btn1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn1",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);	
$btn2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn2",
				"description"	=>	esc_html__('Enter Button title.', BUNCH_NAME )
			);			
$link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);	
$page_link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"page_link",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);			
$link1 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link1",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);
			
$link2 = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Link', BUNCH_NAME ),
				"name"			=>	"link2",
				"description"	=>	esc_html__('Enter the Link.', BUNCH_NAME ),
				'value'	=> '#',
			);
			
$image = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);	
$image1 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image1",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image2 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image2",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image3 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image3",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$image4 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Image', BUNCH_NAME ),
				"name"			=>	"image4",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Image.', BUNCH_NAME )
			);
$bgimage = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Bg Image', BUNCH_NAME ),
				"name"			=>	"bgimage",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background Image.', BUNCH_NAME )
			);
$bgimage0 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('NO Background Image', BUNCH_NAME ),
				"name"			=>	"bgimage0",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('NO Background Image fot this Section.', BUNCH_NAME )
			);			
$bgimage1 = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Bg Image', BUNCH_NAME ),
				"name"			=>	"bgimage1",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background Image.', BUNCH_NAME )
			);
$multi_img = array(
				"type"			=>	"attach_images",
				"label"			=>	esc_html__('Multi Images', BUNCH_NAME ),
				"name"			=>	"multi_img",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Uplod multi images.', BUNCH_NAME )
			);
$sign = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Signature', BUNCH_NAME ),
				"name"			=>	"sign",
				"description"	=>	esc_html__('Choose Signature.', BUNCH_NAME )
			);	
$video_url = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Video URL', BUNCH_NAME ),
				"name"			=>	"video_url",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Enter video url.', BUNCH_NAME )
			);	
$icon = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);
$icon1 = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon1',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);	
$icon2 = array(
				'type'			=>	'icon_picker',
				'label'			=>	esc_html__('Icon', BUNCH_NAME ),
				'name'			=>	'icon2',
				'description'	=>	esc_html__('Enter your icon', BUNCH_NAME )
			);			
$ff_start = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Start', BUNCH_NAME ),
				'name'			=>	'ff_start',
				'description'	=>	esc_html__('Enter Counter Start', BUNCH_NAME ),
				'value'			=>	'0',
			);
$ff_stop = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Stop', BUNCH_NAME ),
				'name'			=>	'ff_stop',
				'description'	=>	esc_html__('Enter Counter Stop', BUNCH_NAME )
			);
$ff_sign = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Sign', BUNCH_NAME ),
				'name'			=>	'ff_sign',
				'description'	=>	esc_html__('Enter Counter Sign', BUNCH_NAME )
			);
$ff_value = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Counter Sign', BUNCH_NAME ),
				'name'			=>	'ff_value',
				'description'	=>	esc_html__('Enter Counter Sign', BUNCH_NAME )
			);
			
$date = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Date', BUNCH_NAME ),
				'name'			=>	'date',
				'description'	=>	esc_html__('Enter Date', BUNCH_NAME )
			);
$month = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Month', BUNCH_NAME ),
				'name'			=>	'month',
				'description'	=>	esc_html__('Enter Month', BUNCH_NAME )
			);
$year = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Date', BUNCH_NAME ),
				'name'			=>	'year',
				'description'	=>	esc_html__('Enter Year', BUNCH_NAME )
			);	
$time = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Time', BUNCH_NAME ),
				'name'			=>	'time',
				'description'	=>	esc_html__('Enter Time', BUNCH_NAME )
			);	
$digit = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit1 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit1',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit2 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit2',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);
$digit3 = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Number', BUNCH_NAME ),
				'name'			=>	'digit3',
				'description'	=>	esc_html__('Enter Number', BUNCH_NAME )
			);				
$name = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Name', BUNCH_NAME ),
				'name'			=>	'name',
				'description'	=>	esc_html__('Enter Name', BUNCH_NAME )
			);

				

$contact_form = array(
					'type' => 'textarea',
					'label' => esc_html__( 'Contact Form', BUNCH_NAME ),
					'name' => 'contact_form',
					'description' => esc_html__( 'Enter The Contact Form.', BUNCH_NAME ),
				);
$cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__('Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array('taxonomy' =>	'category'), true),
				"description"	=>	__('Choose Category.', BUNCH_NAME)
			);
$services_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'services_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$projects_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'projects_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$gallery_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'gallery_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);			
$team_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'team_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$faq_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'faqs_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);			
$testimonials_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'testimonials_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$blog_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__('Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array('taxonomy' =>	'category'), true),
				"description"	=>	__('Choose Category.', BUNCH_NAME)
			);		
$faqs_cat = array(
				"type"			=>	"dropdown",
				"label"			=>	__( 'Category', BUNCH_NAME),
				"name"			=>	"cat",
				"options"		=>	 bunch_get_categories(array( 'taxonomy' =>	'faqs_category'), true),
				"description"	=>	__( 'Choose Category.', BUNCH_NAME)
			);
$exclude_cats = array(
			   "type"			=>	"textfield",
			   "label"			=>	__('Excluded Categories ID', BUNCH_NAME ),
			   "name"			=>	"exclude_cats",
			   "description"	=>	__('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
			);			
//Pricing
$feature_str = array(
		 'type' => 'textarea',
		 'label' => esc_html__( 'Feature List', BUNCH_NAME ),
		 'name' => 'feature_str',
		 'description' => esc_html__( 'Enter Feature List.', BUNCH_NAME ),
		);
$currency = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Name the Currency', BUNCH_NAME ),
		 'name' => 'currency',
		 'description' => esc_html__( 'Enter The Currency You want to Use', BUNCH_NAME ),
		);	

$amount	= array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Amount of Money', BUNCH_NAME ),
		 'name' => 'amount',
		 'description' => esc_html__( 'Enter The Amount of Money', BUNCH_NAME ),
		);	
		
$duration	= array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Duration of Package', BUNCH_NAME ),
		 'name' => 'duration',
		 'description' => esc_html__( 'Enter The Time validation of Package', BUNCH_NAME ),
		);		
$price_title = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Package Name', BUNCH_NAME ),
		 'name' => 'price_title',
		 'description' => esc_html__( 'Enter The Package Name', BUNCH_NAME ),
		);
$read_titel = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Read More Title', BUNCH_NAME ),
		 'name' => 'read_titel',
		 'description' => esc_html__( 'Enter The Read More Title', BUNCH_NAME ),
		);
$blog_authorby = array(
		 'type' => 'textfield',
		 'label' => esc_html__( 'Posted By', BUNCH_NAME ),
		 'name' => 'blog_authorby',
		 'description' => esc_html__( 'Enter The Posted By Text', BUNCH_NAME ),
		);			
/**====Edited Section======  */			
$layout = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('One', BUNCH_NAME),
				'6'=>esc_html__('Two', BUNCH_NAME) ,
				'4'=>esc_html__('Three', BUNCH_NAME), 
				'3'=>	esc_html__('Four', BUNCH_NAME),
				'2' =>esc_html__('Six', BUNCH_NAME),
				'4' =>esc_html__('Default', BUNCH_NAME) ),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);

$column0 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('Default', BUNCH_NAME),
				),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);			
$column = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Column", BUNCH_NAME),
				"name"			=>	"column",
				'options'		=>	array(
				'12'=>esc_html__('One', BUNCH_NAME),
				'6'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>	esc_html__('Four', BUNCH_NAME),
				'2' =>esc_html__('Six', BUNCH_NAME),
				'4'=>esc_html__('Three', BUNCH_NAME),
				
				),
				
				"description"	=>	esc_html__("Set the number of Column to show", BUNCH_NAME)
			);
		

$class = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Section Class', BUNCH_NAME ),
				'name'			=>	'class',
				'description'	=>	esc_html__('Enter Section Class', BUNCH_NAME )
			);
			
$secid = array(
				'type'			=>	'text',
				'label'			=>	esc_html__('Section ID', BUNCH_NAME ),
				'name'			=>	'secid',
				'description'	=>	esc_html__('Enter Section ID', BUNCH_NAME )
			);			
$fullwidth = array(
    'name' => 'fullwidth',
    'label' => 'Full Width',
    'type' => 'checkbox', 
    'options' => array(  
        'fullwidth' => 'Full Width',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Full-width The Selection',
);
$pullright = array(
    'name' => 'pullright',
    'label' => 'Pull Right',
    'type' => 'checkbox', 
    'options' => array(  
        'pullright' => 'Pull Right',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Pull Right The Selection',
);
$post_text = array(
    'name' => 'post_text',
    'label' => 'Hide Post Text',
    'type' => 'checkbox', 
    'options' => array(  
        'post_text' => 'Hide Post Text',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Hide Post Text',
);
$taged = array(
    'name' => 'taged',
    'label' => 'Special',
    'type' => 'checkbox', 
    'options' => array(  
        'taged' => 'Special',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Pull Right The Selection',
);
$pagination = array(
    'name' => 'pagination',
    'label' => 'Pagination',
    'type' => 'checkbox', 
    'options' => array(  
        'pagination' => 'Pagination',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Pagination',
);
$blog_readmore = array(
    'name' => 'blog_readmore',
    'label' => 'Hide Read More Button',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_readmore' => 'Read More',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Hide Read More Button',
);
$blog_author = array(
    'name' => 'blog_author',
    'label' => 'Hide Blog Author',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_author' => 'Blog Author',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Author',
);
$blog_postmeta = array(
    'name' => 'blog_postmeta',
    'label' => 'Hide Blog Post Meta',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_postmeta' => 'Blog Post Meta',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Post Meta',
);
$blog_date = array(
    'name' => 'blog_date',
    'label' => 'Hide Blog Date',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_date' => 'Blog Date',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Date',
);
$blog_comments = array(
    'name' => 'blog_comments',
    'label' => 'Hide Blog Comments',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_comments' => 'Blog Comments',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Comments',
);
$blog_category = array(
    'name' => 'blog_category',
    'label' => 'Hide Blog Category',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_category' => 'Blog Category',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Category',
);
$blog_tag = array(
    'name' => 'blog_tag',
    'label' => 'Hide Blog Tag',
    'type' => 'checkbox', 
    'options' => array(  
        'blog_tag' => 'Blog Tag',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show/Hide Blog Tag',
);
$blog_symbol = array(
				"type"			=>	"textfield",
				"label"			=>	esc_html__('Meta Divider', BUNCH_NAME ),
				"name"			=>	"blog_symbol",
				"description"	=>	esc_html__('Enter Meta Divider', BUNCH_NAME )
			);
$symbol = array(
				"type"			=>	"textfield",
				"label"			=>	esc_html__('Symbol', BUNCH_NAME ),
				"name"			=>	"blog_symbol",
				"description"	=>	esc_html__('Enter Symbol', BUNCH_NAME )
			);			
$fullwidth0 = array(
    'name' => 'fullwidth0',
    'label' => 'Full Width',
    'type' => 'checkbox', 
    'options' => array(  
        'fullwidth0' => 'Default Width',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Default Width of this Section',
);
$light = array(
    'name' => 'light',
    'label' => 'Light Version',
    'type' => 'checkbox', 
    'options' => array(  
        'light' => 'Light Version',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Light Version of The Selection',
);
$light0 = array(
    'name' => 'light0',
    'label' => 'Light Version',
    'type' => 'checkbox', 
    'options' => array(  
        'light0' => 'Not Applicable',
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Not Applicable for this Section',
);

$show = array(
    'name' => 'show',
    'label' => 'Show',
    'type' => 'checkbox', 
    'options' => array(  
        'show' => 'Show',
        
    ),
    'value' => 'DEFAULT-CONTENT',
    'description' => 'Show The Selection',
);
$style0 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style0",
				'options'		=>	array(
				'1'=>esc_html__('Default Style', BUNCH_NAME),
				),
				"description"	=>	esc_html__("This is Default Style", BUNCH_NAME)
			);		
$style = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);	
$style1 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style1",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);	
			
$style2 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style2",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				'4'=>esc_html__('Four', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);
$style3 = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Select Style", BUNCH_NAME),
				"name"			=>	"style3",
				'options'		=>	array(
				'1'=>esc_html__('One', BUNCH_NAME),
				'2'=>esc_html__('Two', BUNCH_NAME) ,
				'3'=>esc_html__('Three', BUNCH_NAME) ,
				'4'=>esc_html__('Four', BUNCH_NAME) ,
				'5'=>esc_html__('Five', BUNCH_NAME) ,
				),
				"description"	=>	esc_html__("Set the Style", BUNCH_NAME)
			);
$color = array(
			'name' => 'color',
			'label' => 'Select Color',
			'type' => 'color_picker',
			'admin_label' => true,
		);	
$color0 = array(
			'name' => 'color0',
			'label' => 'NOT applicable on This Section',
			'type' => 'color_picker',
			'admin_label' => true,
		);			
			
/**====End of Predefine Variable======  */
$options = array();
/**====Main  Arrays========= */
$options['bunch_revslider'] = array(
					'name' => esc_html__('Revslider', BUNCH_NAME),
					'base' => 'bunch_revslider',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Revolution slider.', BUNCH_NAME),
					'params' => array(
						$class,
						$rvslider,
					),
			);
			
$options['bunch_about'] = array(
					'name' => esc_html__('About Us', BUNCH_NAME),
					'base' => 'bunch_about',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show About ', BUNCH_NAME),
					'params' => array(
						esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						$bgtitle,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
						    $title,
							$subtitle,
							$text,
							
						),
						
					),
			);
			
$options['bunch_services_icon'] = array(
					'name' => esc_html__('Services Icon', BUNCH_NAME),
					'base' => 'bunch_services_icon',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Our Services', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$services_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);	
			
$options['bunch_what_we_do'] = array(
					'name' => esc_html__('What We Do', BUNCH_NAME),
					'base' => 'bunch_what_we_do',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show What We Do', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style,
						$bgimage,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$text,
							$image,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'What We Do', BUNCH_NAME ),
							'name' => 'what_we_do',
							'description' => esc_html__( 'Enter What We Do', BUNCH_NAME ),
							'params' => array(
								$icon,
								$title,
								$text,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
								
							),
						),
						),
						
					),
			);	
			
$options['bunch_testimonials'] = array(
					'name' => esc_html__('Testimonial', BUNCH_NAME),
					'base' => 'bunch_testimonials',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Testimonial', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$image,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$testimonials_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);
			
$options['bunch_gallery'] = array(
					'name' => esc_html__('Gallery', BUNCH_NAME),
					'base' => 'bunch_gallery',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Gallery', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$btn,
							$link,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$gallery_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);		

$options['bunch_pricing']	=	array(
					'name' => esc_html__('Pricing Table', BUNCH_NAME),
					'base' => 'bunch_pricing',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Pricing Table.', BUNCH_NAME),
					'is_container' => true,
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style,
							
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$tab,
							$tab1,
							$text,
							//$btn,
						),
					
					esc_html__( 'Monthly', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Monthly', BUNCH_NAME ),
							'name' => 'month',
							'description' => esc_html__( 'Enter Monthly', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$taged,
										$title,
										$subtitle,
										$currency,
										$amount,
										$feature_str,
										$btn,
										$page_link,
									),
								),
						),
					esc_html__( 'Yearly', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Pricing Yearly', BUNCH_NAME ),
							'name' => 'year',
							'description' => esc_html__( 'Enter Yearly', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$taged,
										$title,
										$subtitle,
										$currency,
										$amount,
										$feature_str,
										$btn,
										$page_link,
									),
								),
						),
							
				),
			);	
			
$options['bunch_funfacts'] = array(
					'name' => esc_html__('Fun Facts', BUNCH_NAME),
					'base' => 'bunch_funfacts',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Fun Facts.', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						$column,
						
					),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Fun Facts', BUNCH_NAME ),
							'name' => 'funfacts',
							'description' => esc_html__( 'Enter Fun Facts Details.', BUNCH_NAME ),
							'params' => array(
								$title,
								$ff_stop,
								$ff_value,
								
							),
						),
						),
						
					),
			);	
			
$options['bunch_blog'] = array(
					'name' => esc_html__('Blog', BUNCH_NAME),
					'base' => 'bunch_blog',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$text,
							$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);		
			
$options['bunch_section_title'] = array(
					'name' => esc_html__('Section Title', BUNCH_NAME),
					'base' => 'bunch_section_title',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Section Title', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
						),	
					),
			);

$options['bunch_contact'] = array(
					'name' => esc_html__('Contact', BUNCH_NAME),
					'base' => 'bunch_contact',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Contact', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$contact_form,
						),
						
					),
			);				
			
$options['bunch_map']	=	array(
					'name' => esc_html__('Google Map', BUNCH_NAME),
					'base' => 'bunch_map',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Google Map.', BUNCH_NAME),
					'params' => array(
								$class,
								array(
									'type' => 'text',
									'label' => esc_html__( 'Latitude', BUNCH_NAME ),
									'name' => 'lat',
									'description' => esc_html__( 'Enter The Latitude.', BUNCH_NAME ),
								),
								array(
									'type' => 'text',
									'label' => esc_html__( 'Longitude', BUNCH_NAME ),
									'name' => 'long',
									'description' => esc_html__( 'Enter The Longitude.', BUNCH_NAME ),
								),
								array(
									'type' => 'textarea',
									'label' => esc_html__( 'Country Name', BUNCH_NAME ),
									'name' => 'city',
									'description' => esc_html__( 'Enter The Country Name.', BUNCH_NAME ),
								),
								array(
									'type' => 'text',
									'label' => esc_html__( 'Mark Title', BUNCH_NAME ),
									'name' => 'mark_title',
									'description' => esc_html__( 'Enter The Mark Title.', BUNCH_NAME ),
								),
								array(
									'type' => 'text',
									'label' => esc_html__( 'Mark Address', BUNCH_NAME ),
									'name' => 'mark_address',
									'description' => esc_html__( 'Enter The Mark Address.', BUNCH_NAME ),
								),
								array(
									'type' => 'text',
									'label' => esc_html__( 'Zoom', BUNCH_NAME ),
									'name' => 'zoom',
									'description' => esc_html__( 'Enter The Zoom', BUNCH_NAME ),
									'value' => '11',
								),
							),
						);
						
$options['bunch_work'] = array(
					'name' => esc_html__('Working', BUNCH_NAME),
					'base' => 'bunch_work',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Working', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						$column,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Working', BUNCH_NAME ),
							'name' => 'work',
							'description' => esc_html__( 'Enter Working', BUNCH_NAME ),
							'params' => array(
								$image,
								$title,
								$text,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
							),
						),
						),
						
					),
			);	
			
$options['bunch_video'] = array(
					'name' => esc_html__('Video', BUNCH_NAME),
					'base' => 'bunch_video',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Video', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$text,
							$image,
							$link,
						),	
					
					),
			);
			
$options['bunch_team'] = array(
					'name' => esc_html__('Team', BUNCH_NAME),
					'base' => 'bunch_team',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Team', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$team_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);
$options['bunch_testimonials_two'] = array(
					'name' => esc_html__('Testimonial Two', BUNCH_NAME),
					'base' => 'bunch_testimonials_two',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Testimonial', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$testimonials_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);
			
$options['bunch_news_h_two']	=	array(
					'name' => esc_html__('Home 2 News', BUNCH_NAME),
					'base' => 'bunch_news_h_two',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Home 2 News', BUNCH_NAME),
					'is_container' => true,
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$title,
							$title1,
							$text,
						),
					
					esc_html__( 'Text', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Text', BUNCH_NAME ),
							'name' => 'txt',
							'description' => esc_html__( 'Enter Text', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$title,
										$text,
										array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
									),
								),
						),
					esc_html__( 'Image', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Image', BUNCH_NAME ),
							'name' => 'img',
							'description' => esc_html__( 'Enter Image', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$image,
										array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
									),
								),
						),
							
				),
			);	
			
$options['bunch_clients'] = array(
					'name' => esc_html__('Clients', BUNCH_NAME),
					'base' => 'bunch_clients',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Clients Facts.', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						
						
					),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Clients', BUNCH_NAME ),
							'name' => 'clients',
							'description' => esc_html__( 'Enter ClientsFacts Details.', BUNCH_NAME ),
							'params' => array(
								$image,
								array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
								
							),
						),
						),
						
					),
			);
			
$options['bunch_mission'] = array(
					'name' => esc_html__('Mission', BUNCH_NAME),
					'base' => 'bunch_mission',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Mission', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$text,
							$image,
						),	
					
					),
			);
			
$options['bunch_services_img'] = array(
					'name' => esc_html__('Services_Img', BUNCH_NAME),
					'base' => 'bunch_services_img',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Our Services', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$subtitle,
							$ttitle,
							$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$services_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);	
			
$options['bunch_projects_mix'] = array(
					'name' => esc_html__('Projects', BUNCH_NAME),
					'base' => 'bunch_projects_mix',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Show Projects', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style1,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$btn,
							$link,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$projects_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);			
			
$options['bunch_projects_details']	=	array(
					'name' => esc_html__('Projects Details', BUNCH_NAME),
					'base' => 'bunch_projects_details',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Projects Details', BUNCH_NAME),
					'is_container' => true,
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$image,
							$ttitle,
							$text,
							$text1,
						),
					
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Projects Details', BUNCH_NAME ),
							'name' => 'projects_details',
							'description' => esc_html__( 'Enter Projects Details', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$title,
										$text,
									),
								),
						),		
				),
			);	

$options['bunch_projects_slider']	=	array(
					'name' => esc_html__('Projects Slider', BUNCH_NAME),
					'base' => 'bunch_projects_slider',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Projects Slider', BUNCH_NAME),
					'is_container' => true,
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$title,
						),
					
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Projects Slider', BUNCH_NAME ),
							'name' => 'projects_slider',
							'description' => esc_html__( 'Enter Projects Slider', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$image,
										$title,
										$text,
										array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
									),
								),
						),		
				),
			);	

$options['bunch_blog_grid'] = array(
					'name' => esc_html__('Blog Grid', BUNCH_NAME),
					'base' => 'bunch_blog_grid',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase',
					'description' => esc_html__('Blog Grid', BUNCH_NAME),
					'params' => array(
					
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
						),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$btn,
						),	
					esc_html__( 'Custom', BUNCH_NAME ) => array(	
						$blog_cat,
						$text_limit,
						$number,
						$orderby,
						$order,
						$exclude_cats,
					),
					),
			);			
$options['bunch_contact_block']	=	array(
					'name' => esc_html__('Contact Block', BUNCH_NAME),
					'base' => 'bunch_contact_block',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Contact Block', BUNCH_NAME),
					'is_container' => true,
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(
							$class,
							$style0,
							$column,
						),
					esc_html__( 'Blocks', BUNCH_NAME ) => array(	
						array(
							'type' => 'group',
							'label' => esc_html__( 'Contact Block', BUNCH_NAME ),
							'name' => 'contact_block',
							'description' => esc_html__( 'Enter Contact Block', BUNCH_NAME ),
							'is_container' => true,
							'params' => array(
										$icon,
										$text,
										$text1,
										$link,
										$link1,
									),
								),
						),		
				),
			);			

$options['bunch_contact_two'] = array(
					'name' => esc_html__('Contact Two', BUNCH_NAME),
					'base' => 'bunch_contact_two',
					'class' => '',
					'category' => esc_html__('Timisoara', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Contact Two', BUNCH_NAME),
					'params' => array(
					esc_html__( 'Basic', BUNCH_NAME ) => array(	
						$class,
						$style0,
						
					),
					esc_html__( 'Input', BUNCH_NAME ) => array(
							$contact_form,
						),
						
					),
			);						
/**=============End of Arrays======== */
return $options;