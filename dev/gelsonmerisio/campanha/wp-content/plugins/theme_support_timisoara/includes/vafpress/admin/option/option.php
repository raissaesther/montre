<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
/*==== 
Pre-Define Area
Footer Settings
Main Area
General Settings
Header  Settings
Footer Settings
Pages,Blog Pages Settings
Blog Settings
Single Post
Pages Settings
Search Page Settings
Archive Page Settings
Author Page Settings
404 Page Settings
Sidebar Creator
Font settings
*/
/*==== Pre-Define Area Start-============= */
$btn_titlex = array(
		'type' => 'textbox',
		'name' => 'btn_titlex',
		'label' => __( 'Btn Text', BUNCH_NAME ),
		'description' => __( 'Enter Btn Text', BUNCH_NAME ),
		'default' => '',
	 );
$btn_link =array(
	'type' => 'textbox',
	'name' => 'btn_link',
	'label' => __('Btn Link', BUNCH_NAME),
	'description' => __('Enter Btn Link', BUNCH_NAME),
	'default' => '#',
);	 
$title = array(
	'type' => 'textbox',
	'name' => 'title',
	'label' => __( 'Title', BUNCH_NAME ),
	'description' => __( 'Enter the Title', BUNCH_NAME ),
	'default' => '' 
);
$text = array(
	'type' => 'wpeditor',
	'name' => 'text',
	'label' => __( 'Text', BUNCH_NAME ),
	'description' => __( 'Enter the Text', BUNCH_NAME ),
);
$footerclass = array(
	'type' => 'textbox',
	'name' => 'footerclass',
	'label' => __( 'Footer Extra Class', BUNCH_NAME ),
	'description' => __( 'Enter Footer Extra Class', BUNCH_NAME ),
	'default' => '' 
);
$headerexclass = array(
	'type' => 'textbox',
	'name' => 'headerexclass',
	'label' => __( 'Header Extra Class', BUNCH_NAME ),
	'description' => __( 'Enter Header Extra Class', BUNCH_NAME ),
	'default' => '' 
);
$headerexclass2 = array(
	'type' => 'textbox',
	'name' => 'headerexclass2',
	'label' => __( 'Header Extra Class', BUNCH_NAME ),
	'description' => __( 'Enter Header Extra Class', BUNCH_NAME ),
	'default' => '' 
);
$footercolumn = array(
		'type' => 'select',
		'name' => 'footercolumn',
		'label' => __( 'Choose Footer Column', BUNCH_NAME ),
		'items' => array(
			array(
				'value' => '12',
				'label' => __( 'One Column', BUNCH_NAME ),
			),
			array(
				'value' => '6',
				'label' => __( 'Two Column', BUNCH_NAME ),
			),
			array(
				'value' => '4',
				'label' => __( 'Three Column', BUNCH_NAME ),
			),
			array(
				'value' => '3',
				'label' => __( 'Four Column', BUNCH_NAME ),
			),
			array(
				'value' => '2',
				'label' => __( 'Six Column', BUNCH_NAME ),
			),
			
		),
		'default' => '4'
	);

$logo = array(
		'type' => 'upload',
		'name' => 'logo',
		'label' => __('Logo Image', BUNCH_NAME),
		'description' => __('Insert the Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo.png'
	);
$footer_logo = array(
		'type' => 'upload',
		'name' => 'footer_logo',
		'label' => __('Logo Footer Image', BUNCH_NAME),
		'description' => __('Insert the Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo.png'
	);	
$logo2 = array(
		'type' => 'upload',
		'name' => 'logo2',
		'label' => __('Logo Image', BUNCH_NAME),
		'description' => __('Insert the Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo2.png'
	);
$logo3 = array(
		'type' => 'upload',
		'name' => 'logo3',
		'label' => __('Logo Image', BUNCH_NAME),
		'description' => __('Insert the Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo.png'
	);	
	
$logosmall = array(
		'type' => 'upload',
		'name' => 'logosmall',
		'label' => __('Small Logo', BUNCH_NAME),
		'description' => __('Insert the Small Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo-small.png'
	);
$logosmall2 = array(
		'type' => 'upload',
		'name' => 'logosmall2',
		'label' => __('Small Logo', BUNCH_NAME),
		'description' => __('Insert the Small Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo-small.png'
	);	
$logosmall3 = array(
		'type' => 'upload',
		'name' => 'logosmall3',
		'label' => __('Small Logo', BUNCH_NAME),
		'description' => __('Insert the Small Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/logo-small.png'
	);
$logofooter = array(
		'type' => 'upload',
		'name' => 'logofooter',
		'label' => __('Logo Footer', BUNCH_NAME),
		'description' => __('Insert the  Footer Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/footer-logo.png'
	);
$logofooter2 = array(
		'type' => 'upload',
		'name' => 'logofooter2',
		'label' => __('Logo Footer', BUNCH_NAME),
		'description' => __('Insert the  Footer Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/footer-logo.png'
	);
$logofooter3 = array(
		'type' => 'upload',
		'name' => 'logofooter3',
		'label' => __('Logo Footer', BUNCH_NAME),
		'description' => __('Insert the  Footer Logo', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/footer-logo.png'
	);

$welcome = array(
	'type' => 'textbox',
	'name' => 'welcome',
	'label' => __( 'Welcome Text', BUNCH_NAME ),
	'description' => __( 'Enter the Welcome Text', BUNCH_NAME ),
	'default' => '' 
);
$welcome2 = array(
	'type' => 'textbox',
	'name' => 'welcome2',
	'label' => __( 'Welcome Text', BUNCH_NAME ),
	'description' => __( 'Enter the Welcome Text', BUNCH_NAME ),
	'default' => '' 
);
$welcome3 = array(
	'type' => 'textbox',
	'name' => 'welcome3',
	'label' => __( 'Welcome Text', BUNCH_NAME ),
	'description' => __( 'Enter the Welcome Text', BUNCH_NAME ),
	'default' => '' 
);
$time_title = array(
	'type' => 'textbox',
	'name' => 'time_title',
	'label' => __( 'Time Title', BUNCH_NAME ),
	'description' => __( 'Enter the Time Title', BUNCH_NAME ),
	'default' => '' 
);	
$time_title2 = array(
	'type' => 'textbox',
	'name' => 'time_title2',
	'label' => __( 'Time Title', BUNCH_NAME ),
	'description' => __( 'Enter the Time Title', BUNCH_NAME ),
	'default' => '' 
);
$time_title3 = array(
	'type' => 'textbox',
	'name' => 'time_title3',
	'label' => __( 'Time Title', BUNCH_NAME ),
	'description' => __( 'Enter the Time Title', BUNCH_NAME ),
	'default' => '' 
);
$time = array(
	'type' => 'textbox',
	'name' => 'time',
	'label' => __( 'Time Text', BUNCH_NAME ),
	'description' => __( 'Enter the Time Text', BUNCH_NAME ),
	'default' => '' 
);
$time2 = array(
	'type' => 'textbox',
	'name' => 'time2',
	'label' => __( 'Time Text', BUNCH_NAME ),
	'description' => __( 'Enter the Time Text', BUNCH_NAME ),
	'default' => '' 
);
$time3 = array(
	'type' => 'textbox',
	'name' => 'time3',
	'label' => __( 'Time Text', BUNCH_NAME ),
	'description' => __( 'Enter the Time Text', BUNCH_NAME ),
	'default' => '' 
);
$time_close = array(
	'type' => 'textbox',
	'name' => 'time_close',
	'label' => __( 'Closed Time/Day', BUNCH_NAME ),
	'description' => __( 'Enter the Closed Time/Day', BUNCH_NAME ),
	'default' => '' 
);
$time_close2 = array(
	'type' => 'textbox',
	'name' => 'time_close2',
	'label' => __( 'Closed Time/Day', BUNCH_NAME ),
	'description' => __( 'Enter the Closed Time/Day', BUNCH_NAME ),
	'default' => '' 
);
$time_close3 = array(
	'type' => 'textbox',
	'name' => 'time_close3',
	'label' => __( 'Closed Time/Day', BUNCH_NAME ),
	'description' => __( 'Enter the Closed Time/Day', BUNCH_NAME ),
	'default' => '' 
);
$add_title = array(
	'type' => 'textbox',
	'name' => 'add_title',
	'label' => __( 'Address Title', BUNCH_NAME ),
	'description' => __( 'Enter the Address Title', BUNCH_NAME ),
);
$add_title2 = array(
	'type' => 'textbox',
	'name' => 'add_title2',
	'label' => __( 'Address Title', BUNCH_NAME ),
	'description' => __( 'Enter the Address Title', BUNCH_NAME ),
);
$add_title3 = array(
	'type' => 'textbox',
	'name' => 'add_title3',
	'label' => __( 'Address Title', BUNCH_NAME ),
	'description' => __( 'Enter the Address Title', BUNCH_NAME ),
);
$add = array(
	'type' => 'textbox',
	'name' => 'add',
	'label' => __( 'Address', BUNCH_NAME ),
	'description' => __( 'Enter the Address', BUNCH_NAME ),
);
$add2 = array(
	'type' => 'textbox',
	'name' => 'add2',
	'label' => __( 'Address', BUNCH_NAME ),
	'description' => __( 'Enter the Address', BUNCH_NAME ),
);
$add3 = array(
	'type' => 'textbox',
	'name' => 'add3',
	'label' => __( 'Address', BUNCH_NAME ),
	'description' => __( 'Enter the Address', BUNCH_NAME ),
);
$addnd = array(
	'type' => 'textbox',
	'name' => 'addnd',
	'label' => __( 'Address Two', BUNCH_NAME ),
	'description' => __( 'Enter the Address Two', BUNCH_NAME ),
);
$addnd2 = array(
	'type' => 'textbox',
	'name' => 'addnd2',
	'label' => __( 'Address Two', BUNCH_NAME ),
	'description' => __( 'Enter the Address Two', BUNCH_NAME ),
);
$addnd3 = array(
	'type' => 'textbox',
	'name' => 'addnd3',
	'label' => __( 'Address Two', BUNCH_NAME ),
	'description' => __( 'Enter the Address Two', BUNCH_NAME ),
);
$phone_title = array(
	'type' => 'textbox',
	'name' => 'phone_title',
	'label' => __( 'Phone Title', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Title', BUNCH_NAME ),
);
$phone_title2 = array(
	'type' => 'textbox',
	'name' => 'phone_title2',
	'label' => __( 'Phone Title', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Title', BUNCH_NAME ),
);
$phone_title3 = array(
	'type' => 'textbox',
	'name' => 'phone_title3',
	'label' => __( 'Phone Title', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Title', BUNCH_NAME ),
);
$phone = array(
	'type' => 'textbox',
	'name' => 'phone',
	'label' => __( 'Phone', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Number', BUNCH_NAME ),
	'default' => '' 
);
$footer_phone = array(
	'type' => 'textbox',
	'name' => 'footer_phone',
	'label' => __( 'Footer Phone', BUNCH_NAME ),
	'description' => __( 'Enter the Footer Phone Number', BUNCH_NAME ),
	'default' => '' 
);
$phone2 =array(
	'type' => 'textbox',
	'name' => 'phone2',
	'label' => __( 'Phone', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Number', BUNCH_NAME ),
	'default' => '' 
);
$phone3 = array(
	'type' => 'textbox',
	'name' => 'phone3',
	'label' => __( 'Phone', BUNCH_NAME ),
	'description' => __( 'Enter the Phone Number', BUNCH_NAME ),
	'default' => '' 
);
$email_title = array(
	'type' => 'textbox',
	'name' => 'email_title',
	'label' => __( 'e-mail Title', BUNCH_NAME ),
	'description' => __( 'Enter the e-mail Title', BUNCH_NAME ),
);
$email_title2 = array(
	'type' => 'textbox',
	'name' => 'email_title2',
	'label' => __( 'e-mail Title', BUNCH_NAME ),
	'description' => __( 'Enter the e-mail Title', BUNCH_NAME ),
);
$email_title3 = array(
	'type' => 'textbox',
	'name' => 'email_title3',
	'label' => __( 'e-mail Title', BUNCH_NAME ),
	'description' => __( 'Enter the e-mail Title', BUNCH_NAME ),
);
$email=array(
	'type' => 'textbox',
	'name' => 'email',
	'label' => __( 'Email', BUNCH_NAME ),
	'description' => __( 'Enter the Email', BUNCH_NAME ),
);
$footer_email=array(
	'type' => 'textbox',
	'name' => 'footer_email',
	'label' => __( 'Footer Email', BUNCH_NAME ),
	'description' => __( 'Enter the Footer Email', BUNCH_NAME ),
);
$email2 = array(
	'type' => 'textbox',
	'name' => 'email2',
	'label' => __( 'Email', BUNCH_NAME ),
	'description' => __( 'Enter the Email', BUNCH_NAME ),
);
$email3 = array(
	'type' => 'textbox',
	'name' => 'email3',
	'label' => __( 'Email', BUNCH_NAME ),
	'description' => __( 'Enter the Email', BUNCH_NAME ),
);
$fax_title = array(
	'type' => 'textbox',
	'name' => 'fax_title',
	'label' => __( 'Fax Title', BUNCH_NAME ),
	'description' => __( 'Enter the Fax Title', BUNCH_NAME ),
);
$fax_title2 = array(
	'type' => 'textbox',
	'name' => 'fax_title2',
	'label' => __( 'Fax Title', BUNCH_NAME ),
	'description' => __( 'Enter the Fax Title', BUNCH_NAME ),
);
$fax_title3 = array(
	'type' => 'textbox',
	'name' => 'fax_title3',
	'label' => __( 'Fax Title', BUNCH_NAME ),
	'description' => __( 'Enter the Fax Title', BUNCH_NAME ),
);
$fax = array(
	'type' => 'textbox',
	'name' => 'fax',
	'label' => __( 'Fax', BUNCH_NAME ),
	'description' => __( 'Enter the Fax', BUNCH_NAME ),
);
$fax2 = array(
	'type' => 'textbox',
	'name' => 'fax2',
	'label' => __( 'Fax', BUNCH_NAME ),
	'description' => __( 'Enter the Fax', BUNCH_NAME ),
);
$fax3 = array(
	'type' => 'textbox',
	'name' => 'fax3',
	'label' => __( 'Fax', BUNCH_NAME ),
	'description' => __( 'Enter the Fax', BUNCH_NAME ),
);
$quote_title = array(
	'type' => 'textbox',
	'name' => 'quote_title',
	'label' => __( 'Quote Title', BUNCH_NAME ),
	'description' => __( 'Enter the Quote Title', BUNCH_NAME ),
	'dependency' => array(
                                 'field' => 'quote_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);
$quote_title2 = array(
	'type' => 'textbox',
	'name' => 'quote_title2',
	'label' => __( 'Quote Title', BUNCH_NAME ),
	'description' => __( 'Enter the Quote Title', BUNCH_NAME ),
);
$quote_title3 = array(
	'type' => 'textbox',
	'name' => 'quote_title3',
	'label' => __( 'Quote Title', BUNCH_NAME ),
	'description' => __( 'Enter the Quote Title', BUNCH_NAME ),
);
$quote = array(
	'type' => 'textbox',
	'name' => 'quote',
	'label' => __( 'Quote', BUNCH_NAME ),
	'description' => __( 'Enter the Quote', BUNCH_NAME ),
	'dependency' => array(
                                 'field' => 'quote_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);
$quote2 = array(
	'type' => 'textbox',
	'name' => 'quote2',
	'label' => __( 'Quote', BUNCH_NAME ),
	'description' => __( 'Enter the Quote', BUNCH_NAME ),
);
$quote3 = array(
	'type' => 'textbox',
	'name' => 'quote3',
	'label' => __( 'Quote', BUNCH_NAME ),
	'description' => __( 'Enter the Quote', BUNCH_NAME ),
);
$quote_link=array(
	'type' => 'textbox',
	'name' => 'quote_link',
	'label' => __('Quote Link', BUNCH_NAME),
	'description' => __('Enter the Quote Link', BUNCH_NAME),
	'default' => '#',
	'dependency' => array(
                                 'field' => 'quote_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);


$language_title = array(
	'type' => 'textbox',
	'name' => 'language_title',
	'label' => __( 'Language Title', BUNCH_NAME ),
	'description' => __( 'Enter the Language Title', BUNCH_NAME ),
	'dependency' => array(
                                 'field' => 'header_language_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);
$language_title2 = array(
	'type' => 'textbox',
	'name' => 'language_title2',
	'label' => __( 'Language Title', BUNCH_NAME ),
	'description' => __( 'Enter the Language Title', BUNCH_NAME ),
	'dependency' => array(
                                 'field' => 'header_language_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
);
$language_image = array(
		'type' => 'upload',
		'name' => 'language_image',
		'label' => __('Language Image', BUNCH_NAME),
		'description' => __('Insert the  Language Image', BUNCH_NAME),
		'dependency' => array(
                                 'field' => 'header_language_show',
                                'function' => 'vp_dep_boolean' 
                            ),
		'default' => get_template_directory_uri().'/images/icons/flag-icon.jpg',
		
	);
$language_image2 = array(
		'type' => 'upload',
		'name' => 'language_image2',
		'label' => __('Language Image', BUNCH_NAME),
		'description' => __('Insert the  Language Image', BUNCH_NAME),
		'dependency' => array(
                                 'field' => 'header_language_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
		'default' => get_template_directory_uri().'/images/icons/flag-icon.jpg',
		
	);
$language_image3 = array(
		'type' => 'upload',
		'name' => 'language_image3',
		'label' => __('Language Image', BUNCH_NAME),
		'description' => __('Insert the  Language Image', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/icons/flag-icon.jpg'
	);	

$language_title3 = array(
	'type' => 'textbox',
	'name' => 'language_title3',
	'label' => __( 'Language Title', BUNCH_NAME ),
	'description' => __( 'Enter the Language Title', BUNCH_NAME ),
);
$shop = array(
	'type' => 'textbox',
	'name' => 'shop',
	'label' => __( 'Shop', BUNCH_NAME ),
	'description' => __( 'Enter the Shop Text', BUNCH_NAME ),
);
$shop2 = array(
	'type' => 'textbox',
	'name' => 'shop2',
	'label' => __( 'Shop', BUNCH_NAME ),
	'description' => __( 'Enter the Shop Text', BUNCH_NAME ),
);
$shop3 = array(
	'type' => 'textbox',
	'name' => 'shop3',
	'label' => __( 'Shop', BUNCH_NAME ),
	'description' => __( 'Enter the Shop Text', BUNCH_NAME ),
);
$shop_link = array(
	'type' => 'textbox',
	'name' => 'shop_link',
	'label' => __('Shop Link', BUNCH_NAME),
	'description' => __('Enter the Shop Link', BUNCH_NAME),
	'default' => '#',
);
$shop_link2 = array(
	'type' => 'textbox',
	'name' => 'shop_link2',
	'label' => __('Shop Link', BUNCH_NAME),
	'description' => __('Enter the Shop Link', BUNCH_NAME),
	'default' => '#',
);
$shop_link3 = array(
	'type' => 'textbox',
	'name' => 'shop_link3',
	'label' => __('Shop Link', BUNCH_NAME),
	'description' => __('Enter the Shop Link', BUNCH_NAME),
	'default' => '#',
);
$download = array(
	'type' => 'textbox',
	'name' => 'download',
	'label' => __( 'Download', BUNCH_NAME ),
	'description' => __( 'Enter the Download Text', BUNCH_NAME ),
	  'dependency' => array(
                                 'field' => 'header_download_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);


$download2 = array(
	'type' => 'textbox',
	'name' => 'download2',
	'label' => __( 'Download', BUNCH_NAME ),
	'description' => __( 'Enter the Download Text', BUNCH_NAME ),
);
$download3 = array(
	'type' => 'textbox',
	'name' => 'download3',
	'label' => __( 'Download', BUNCH_NAME ),
	'description' => __( 'Enter the Download Text', BUNCH_NAME ),
);
$download_link3 = array(
	'type' => 'textbox',
	'name' => 'download_link3',
	'label' => __('Download Link', BUNCH_NAME),
	'description' => __('Enter the Download Link', BUNCH_NAME),
	'default' => '#',
);
$download_link2 = array(
	'type' => 'textbox',
	'name' => 'download_link2',
	'label' => __('Download Link', BUNCH_NAME),
	'description' => __('Enter the Download Link', BUNCH_NAME),
	'default' => '#',
);
$download_link = array(
	'type' => 'textbox',
	'name' => 'download_link',
	'label' => __('Download Link', BUNCH_NAME),
	'description' => __('Enter the Download Link', BUNCH_NAME),
	'default' => '#',
	 'dependency' => array(
                                 'field' => 'header_download_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);



$link1 = array(
	'type' => 'textbox',
	'name' => 'link1',
	'label' => __('Link', BUNCH_NAME),
	'description' => __('Enter the Link', BUNCH_NAME),
	'default' => '#',
);
$link2 = array(
	'type' => 'textbox',
	'name' => 'link2',
	'label' => __('Link', BUNCH_NAME),
	'description' => __('Enter the Link', BUNCH_NAME),
	'default' => '#',
);
$link3 = array(
	'type' => 'textbox',
	'name' => 'link3',
	'label' => __('Link', BUNCH_NAME),
	'description' => __('Enter the Link', BUNCH_NAME),
	'default' => '#',
);
$link4 = array(
	'type' => 'textbox',
	'name' => 'link4',
	'label' => __('Link', BUNCH_NAME),
	'description' => __('Enter the Link', BUNCH_NAME),
	'default' => '#',
);
$text1 = array(
	'type' => 'textbox',
	'name' => 'text1',
	'label' => __('Text', BUNCH_NAME),
	'description' => __('Enter the Text', BUNCH_NAME),
	'default' => ''
);
$text2 = array(
	'type' => 'textbox',
	'name' => 'text2',
	'label' => __('Text', BUNCH_NAME),
	'description' => __('Enter the Text', BUNCH_NAME),
	'default' => ''
);
$text3 = array(
	'type' => 'textbox',
	'name' => 'text3',
	'label' => __('Text', BUNCH_NAME),
	'description' => __('Enter the Text', BUNCH_NAME),
	'default' => ''
);


$map = array(
			  'type' => 'textbox',
			  'name' => 'map_api_key',
			  'label' => __( 'Map Api Key', BUNCH_NAME ),
			  'default' => '',
			  'description' => __('Enter the map Api key', BUNCH_NAME)
		);
$copy_right = array(
	'type' => 'wpeditor',
	'name' => 'copy_right',
	'label' => __( 'Copyright Text', BUNCH_NAME ),
	'description' => __( 'Enter the Copyright', BUNCH_NAME ),
);
$footerbg = array(
		'type' => 'upload',
		'name' => 'footerbg',
		'label' => __('Footer Background', BUNCH_NAME),
		'description' => __('Insert the  Footer Background', BUNCH_NAME),
		'default' => get_template_directory_uri().'/images/footerbg.png'
	);
//Toggle Options
$copy_show = array(
					'type' => 'toggle',
					'name' => 'copy_show',
					'label' => __( 'Hide Copyright', BUNCH_NAME ),
					'default' => 0,
					'description' => __('Show Copyright', BUNCH_NAME)
				);
$quote_show = array(
					'type' => 'toggle',
					'name' => 'quote_show',
					'label' => __( 'Show Quote', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Quote', BUNCH_NAME)
				);
$shop_show = array(
					'type' => 'toggle',
					'name' => 'shop_show',
					'label' => __( 'Show Shop Input', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Shop', BUNCH_NAME)
				);
$header_download_show = array(
					'type' => 'toggle',
					'name' => 'header_download_show',
					'label' => __( 'Show Header Download', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Download Option', BUNCH_NAME)
				);				
$header_search_show = array(
					'type' => 'toggle',
					'name' => 'header_search_show',
					'label' => __( 'Show Header Search', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Search Option', BUNCH_NAME)
				);
$header_search_show2 = array(
					'type' => 'toggle',
					'name' => 'header_search_show2',
					'label' => __( 'Show Header Search', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Search Option', BUNCH_NAME)
				);				
$search_textx = array(
	'type' => 'textbox',
	'name' => 'search_textx',
	'label' => __('Search Text', BUNCH_NAME),
	'description' => __('Enter the Search Text', BUNCH_NAME),
	'default' => '',
	'dependency' => array(
                                 'field' => 'header_search_show',
                                'function' => 'vp_dep_boolean' 
                            ),
);
$search_textx2 = array(
	'type' => 'textbox',
	'name' => 'search_textx2',
	'label' => __('Search Text', BUNCH_NAME),
	'description' => __('Enter the Search Text', BUNCH_NAME),
	'default' => '',
	'dependency' => array(
                                 'field' => 'header_search_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
);				
$header_language_show = array(
					'type' => 'toggle',
					'name' => 'header_language_show',
					'label' => __( 'Show Language', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Language', BUNCH_NAME)
				);
$header_language_show2 = array(
					'type' => 'toggle',
					'name' => 'header_language_show2',
					'label' => __( 'Show Language', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Language', BUNCH_NAME)
				);				
$footer_search_show = array(
					'type' => 'toggle',
					'name' => 'footer_search_show',
					'label' => __( 'Show Search Footer Button', BUNCH_NAME ),
					'default' => 1,
					'description' => __('Show/Hide Search Button', BUNCH_NAME)
				);
$header_social_show = array(
				'type' => 'toggle',
				'name' => 'header_social_show',
				'label' => __( 'Show Header Social', BUNCH_NAME ),
				'default' => 1,
				'description' => __('Show/Hide Header Social Option', BUNCH_NAME)
			);
$header_social_show2 = array(
				'type' => 'toggle',
				'name' => 'header_social_show2',
				'label' => __( 'Show Header Social', BUNCH_NAME ),
				'default' => 1,
				'description' => __('Show/Hide Header Social Option', BUNCH_NAME)
			);			
$footer_social_show = array(
				'type' => 'toggle',
				'name' => 'footer_social_show',
				'label' => __( 'Hide Footer Social', BUNCH_NAME ),
				'default' => 1,
				'description' => __('Show/Hide Footer Social Option', BUNCH_NAME)
			);
$top_footer_show = array(
				'type' => 'toggle',
				'name' => 'top_footer_show',
				'label' => __( 'Hide Top Footer', BUNCH_NAME ),
				'default' => 0,
				'description' => __('Show/Hide Top Footer', BUNCH_NAME)
			);			
$bottom_footer_show =array(
				'type' => 'toggle',
				'name' => 'bottom_footer_show',
				'label' => __( 'Hide Bottom Footer', BUNCH_NAME ),
				'default' => 0,
				'description' => __('Show/Hide Bottom Footer', BUNCH_NAME)
			);
$top_header_show = array(
				'type' => 'toggle',
				'name' => 'top_header_show',
				'label' => __( 'Hide Top Header', BUNCH_NAME ),
				'default' => 1,
				'description' => __('Show/Hide Top Header', BUNCH_NAME)
			);	
$preloader = array(
	'type' => 'toggle',
	'name' => 'preloader',
	'label' => __( 'Hide Pre-Loader', BUNCH_NAME ),
	'default' => 0,
	'description' => __('show or hide Preloader', BUNCH_NAME)
 );		
$boxed = array(
		'type' => 'toggle',
		'name' => 'boxed',
		'label' => __( 'Show Boxed', BUNCH_NAME ),
		'default' => 0,
		'description' => __('show or hide Boxed', BUNCH_NAME)
	);			
//color and Slider 	
//Basic Color Settings
$wrapper_color = array(
			'type' => 'color',
			'name' => 'wrapper_color',
			'label' => __( 'Wrapper Color Scheme', BUNCH_NAME ),
			'description' => __( 'Choose the Wrapper Color', BUNCH_NAME ),
			'default' => '#ffffff',
		);
$body_color	= array(
			'type' => 'color',
			'name' => 'body_color',
			'label' => __( 'Body Color Scheme', BUNCH_NAME ),
			'description' => __( 'If wish to set Image let the feild empty', BUNCH_NAME ),
		);
$body_image = array(
			'type' => 'upload',
			'name' => 'body_image',
			'label' => __('Body Background Image', BUNCH_NAME),
			'description' => __('Insert the Body Background Image', BUNCH_NAME),
		);
$main_color_scheme = array(
					'type' => 'color',
					'name' => 'main_color_scheme',
					'label' => __( 'Main Color Scheme', BUNCH_NAME ),
					'description' => __( 'Choose the Custom color scheme for the theme.', BUNCH_NAME ),
					'default' => '#fc721e',
					
				);
$color_schemes = array(
							'type' => 'section',
							'repeating' => true,
							'sortable' => true,
							'title' => __( 'Color Scheme', BUNCH_NAME ),
							'name' => 'color_schemes',
							'description' => __( 'This section is used for theme color settings', BUNCH_NAME ),
							'fields' => array(
								$wrapper_color,
								$body_color,
								$body_image,
								$main_color_scheme,
							 )
							);				
	
$footer_slide =   array(
            'title' => __( 'Footer Slider', BUNCH_NAME ),
            'name' => 'footer_slide',
            'icon' => 'font-awesome:fa fa-sliders',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Footer Slide', BUNCH_NAME ),
                    'name' => 'footer_slidex',
                    'description' => __( 'Add Slider', BUNCH_NAME ),
                    'fields' => array(
                         array(
                            'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'default' => '#',
                        ),
                    ) 
                ) 
            ) 
        );
        	
 $site_favicon = array(
				 'type' => 'upload',
				'name' => 'site_favicon',
				'label' => __( 'Favicon', BUNCH_NAME ),
				'description' => __( 'Upload the favicon, should be 16x16', BUNCH_NAME ),
				'default' => get_template_directory_uri().'/images/favicon.png'
			);
			
$menu_style = array(
		'type' => 'select',
		'name' => 'menu_style',
		'label' => __( 'Choose Menu Style', BUNCH_NAME ),
		'items' => array(
			array(
				'value' => '1',
				'label' => __( 'Multi Page', BUNCH_NAME ),
			),
			array(
				'value' => '2',
				'label' => __( 'One Page', BUNCH_NAME ),
			),
			
		),
		'default' => '1'
	);			

$header_style3 = array(
							'type' => 'select',
							'name' => 'header_style',
							'label' => __( 'Choose Header Style', BUNCH_NAME ),
							'items' => array(
								 array(
									'value' => 'header_v1',
									'label' => __( 'Header Default', BUNCH_NAME ),
								),
								array(
									'value' => 'header_v2',
									'label' => __( 'Header Style 2', BUNCH_NAME ),
								),
								array(
									'value' => 'header_v3',
									'label' => __( 'Header Style 3', BUNCH_NAME ),
								),
							),
							'default' => 'header_v1'
						);
$header_style2 = array(
							'type' => 'select',
							'name' => 'header_style',
							'label' => __( 'Choose Header Style', BUNCH_NAME ),
							'items' => array(
								 array(
									'value' => 'header_v1',
									'label' => __( 'Header Default', BUNCH_NAME ),
								),
								array(
									'value' => 'header_v2',
									'label' => __( 'Header Style 2', BUNCH_NAME ),
								),
							),
							'default' => 'header_v1'
						);
$header_style = array(
							'type' => 'select',
							'name' => 'header_style',
							'label' => __( 'Choose Header Style', BUNCH_NAME ),
							'items' => array(
								 array(
									'value' => 'header_v1',
									'label' => __( 'Header Default', BUNCH_NAME ),
								),
							),
							'default' => 'header_v1'
						);	
						
// Footer Social Style  
$social_mediaf = array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Footer Social Media', BUNCH_NAME ),
                    'name' => 'social_mediaf',
                    'description' => __( 'Footer Social Media.', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'default' => '#',
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', BUNCH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', BUNCH_NAME ),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
                        )  
                    ) 
                );
//Header Social Media											
$social_media = array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', BUNCH_NAME ),
                    'name' => 'social_media',
					'description' => __( 'This section is used to add Social Media.', BUNCH_NAME ),
					
                    'fields' => array(
                         array(
                            'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ),
							'dependency' => array(
                                 'field' => 'header_social_show',
                                'function' => 'vp_dep_boolean' 
                            ),
							
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_social_show',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '#',
							
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', BUNCH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', BUNCH_NAME ),
							
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
							'dependency' => array(
                                 'field' => 'header_social_show',
                                'function' => 'vp_dep_boolean' 
                            ),
                        )  
                    ) 
                );
$social_media2 = array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', BUNCH_NAME ),
                    'name' => 'social_media2',
					'description' => __( 'This section is used to add Social Media.', BUNCH_NAME ),
					
                    'fields' => array(
                         array(
                            'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ),
							'dependency' => array(
                                 'field' => 'header_social_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
							
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_social_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '#',
							
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', BUNCH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', BUNCH_NAME ),
							
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
							'dependency' => array(
                                 'field' => 'header_social_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
                        )  
                    ) 
                );				
//Language				
$social_language2 = array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Language Slides', BUNCH_NAME ),
                    'name' => 'social_language2',
                    'description' => __( 'Add Your Language Slides.', BUNCH_NAME ),
                    'fields' => array(
						array(
                            'type' => 'textbox',
                            'name' => 'social_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the Title for  Media.', BUNCH_NAME ),
							'dependency' => array(
                                 'field' => 'header_language_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'default' => ''
                        ),
						array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_language_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '#',
                        ), 
						array(
                            'type' => 'upload',
                            'name' => 'social_image',
                            'label' => __( 'Image', BUNCH_NAME ),
                            'description' => __( 'choose the Language Image', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_language_show2',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '',
                         ), 
                    ) 
                );
$social_language = array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Language Slides', BUNCH_NAME ),
                    'name' => 'social_language',
                    'description' => __( 'Add Your Language Slides.', BUNCH_NAME ),
                    'fields' => array(
						array(
                            'type' => 'textbox',
                            'name' => 'social_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the Title for  Media.', BUNCH_NAME ),
							'dependency' => array(
                                 'field' => 'header_language_show',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'default' => ''
                        ),
						array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_language_show',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '#',
                        ), 
						array(
                            'type' => 'upload',
                            'name' => 'social_image',
                            'label' => __( 'Image', BUNCH_NAME ),
                            'description' => __( 'choose the Language Image', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'header_language_show',
                                'function' => 'vp_dep_boolean' 
                            ),
							'default' => '',
                         ), 
                    ) 
                );				
//Footer Slide Menu
$footer_slidex = array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Footer Slide', BUNCH_NAME ),
                    'name' => 'footer_slidex',
                    'description' => __( 'Add Slider', BUNCH_NAME ),
                    'fields' => array(
                         array(
                            'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'default' => '#',
                        ),
                    ) 
                ); 


/*==== Main Area Start-============= */
return array(
    'title' => __( 'Theme Options', BUNCH_NAME ),
    'logo' => get_template_directory_uri() . '/images/logo.png',
    'menus' => array(
        // General Settings
         array(
             'title' => __( 'General Settings', BUNCH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-cogs',
            'menus' => array(
				
			/* ====General Settings =====	*/
				array(
                    'title' => __( 'General Settings', BUNCH_NAME ),
                    'name' => 'general_sub_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        $preloader,
						$map,
						$boxed,
						$color_schemes,
						
					)
                ),
				
				
			/* ==== Header  Settings =====	*/
                array(
                    'title' => __( 'Header Settings', BUNCH_NAME ),
                    'name' => 'header_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
					   
					    $site_favicon,
						$top_header_show,
						//$menu_style,
					//Header Style Might Be Changed	
						$header_style,
						//$header_style2,
						//$header_style3,
						
					//Header One Settings	
						array(
							'type' => 'section',
							'title' => __('Header Default Settings', BUNCH_NAME),
							'name' => 'header_default_settings',
							'dependency' => array(
								'field' => 'header_style',
								'function' => 'vp_dep_style1',
							),
							'fields' => array(
								    $headerexclass,
									$logo,
									$logo2,
									$logosmall,
									//$welcome,
									//$title,
									//$text,
									//$btn_titlex,
									//$btn_link,
									//$time_title,
									//$add_title,
									//$add,
									//$addnd,
									//$phone_title,
									//$phone,
									//$email_title,
									//$email,
									//$time,
									//$time_close,
									//$shop_show,
									//$shop,
									//$shop_link,
									//$quote_show,
									//$quote_title,
									//$quote,
									//$quote_link,
									//$header_download_show,
									//$download,
									//$download_link,
									$header_search_show,
									$search_textx,
								   // $header_social_show,
									//$social_media,
									//$header_language_show,
									//$language_title,
									//$language_image,
									//$social_language,//Language
									
								),
						),		
						
				//Header Two Settings		
						array(
							'type' => 'section',
							'title' => __('Header Style2 Settings', BUNCH_NAME),
							'name' => 'header_style2_settings',
							'dependency' => array(
								'field' => 'header_style',
								'function' => 'vp_dep_style2',
							),
							'fields' => array(
								    //$logo2,
									//$logosmall2,
									//$welcome2,
									//$time_title2,
									//$time2,
									//$time_close2,
									//$add_title2,
									//$add2,
									//$addnd2,
									//$phone_title2,
									//$phone2,
									//$email_title,
									//$email2,
									//$shop_show,
									//$shop,
									//$shop_link,
									//$quote_show,
									//$quote_title,
									//$quote,
									//$quote_link,
									//$header_download_show,
									//$download,
									//$download_link,
									$header_search_show2,
									$search_textx2,
								   // $header_social_show2,
									//$social_media2,
									//$header_language_show2,
									//$language_title2,
									//$language_image2,
									//$social_language2,
									//$headerexclass2,

							),
						),
						
				//Header Three Settings		
						
						
               
				   
                    )
                ),
				//twitter 
				array(
                     'title' => __( 'Twitter Settings', BUNCH_NAME ),
                    'name' => 'sub_twitter_settings',
                    'icon' => 'font-awesome:fa fa-twitter',
                    'controls' => array(
                        
                         array(
                             'type' => 'textbox',
                            'name' => 'twitter_api',
                            'label' => __( 'API', BUNCH_NAME ),
                            'description' => __( 'Enter Twitter API key Here.', BUNCH_NAME ),
                            'default' => 'EAVuZPOFDqh6YJRoIUn4danY8' 
                        ),
                        
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_api_secret',
                            'label' => __( 'API Secret', BUNCH_NAME ),
                            'description' => __( 'Enter Twitter API Secret Here.', BUNCH_NAME ),
                            'default' => 'HZ5lBxAooSWbLIyva9SioNbzLoPfzk9yKxLscMUGRwGt5XzIyv' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token',
                            'label' => __( 'Token', BUNCH_NAME ),
                            'description' => __( 'Enter Twitter Token here.', BUNCH_NAME ),
                            'default' => '2595337447-sQiBf41a0BYokzTyULmP6LDpC28MU6ajCtllgHq' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token_Secret',
                            'label' => __( 'Token Secret', BUNCH_NAME ),
                            'description' => __( 'Enter Token Secret', BUNCH_NAME ),
                            'default' => 'tjeQG0UiRZLJLua9phO0eVMv5ZpQRvx4Z0dS4b3dwEpk7' 
                        ) 
                    ) 
                ), //End of submenu
				//twitter 
				array(
                     'title' => __( 'Subscribe Settings', BUNCH_NAME ),
                    'name' => 'subscribe_settings',
                    'icon' => 'font-awesome:fa fa-envelope',
                    'controls' => array(
                        
                         array(
                             'type' => 'textbox',
                            'name' => 'id',
                            'label' => __( 'Subscribe ID', BUNCH_NAME ),
                            'description' => __( 'Subscribe ID', BUNCH_NAME ),
                            'default' => 'envato' 
                        ),
                        

                    ) 
                ), //End of submenu
        /**=========Footer Settings======== */
                array(
                     'title' => __( 'Footer Settings', BUNCH_NAME ),
                    'name' => 'sub_footer_settings',
                    'icon' => 'font-awesome:fa fa-edit',
                    'controls' => array(
                        $footercolumn,
						$footerclass,
						//$footer_logo,
						$footerbg,
						$footer_email,
						//$footer_phone,
						 $header_social_show,
						$social_media,
                       // $logofooter,						
						$top_footer_show,
						$bottom_footer_show,
					   //$footer_social_show,
					 //$social_mediaf,
					    $copy_show,
						$copy_right,
                    )
                ), //End of submenu
			) 
        ),
        
		/* Dynamic Social Media Creator
        array(
             'title' => __( 'Social Media ', BUNCH_NAME ),
            'name' => 'social_media',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', BUNCH_NAME ),
                    'name' => 'social_media',
                    'description' => __( 'This section is used to add Social Media.', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', BUNCH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', BUNCH_NAME ),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
                        )  
                    ) 
                ) 
            ) 
        ),
        */
		// Pages,Blog Pages Settings
        array(
             'title' => __( 'Page Settings', BUNCH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-file',
            'menus' => array(
                //********Blog Settings
			
                 array(
                     'title' => __( 'Blog', BUNCH_NAME ),
                    'name' => 'blog_page_settings',
                    'icon' => 'font-awesome:fa fa-folder',
                    'controls' => array(
						array(
							'type' => 'toggle',
							'name' => 'page_title',
							'label' => __( 'Hide Blog Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Blog Banner', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                            'name' => 'btn_title',
                            'label' => __( 'Btn Text', BUNCH_NAME ),
                            'description' => __( 'Enter Btn Text', BUNCH_NAME ),
                            'default' => 'Read More',
							
                        ),
						array(
							'type' => 'toggle',
							'name' => 'author',
							'label' => __( 'Hide Author', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Hide Author Meta', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'date',
							'label' => __( 'Hide Date', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Date Meta', BUNCH_NAME)
						),
						
						array(
							'type' => 'toggle',
							'name' => 'comments',
							'label' => __( 'Hide Comments', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Comments Meta', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'tag',
							'label' => __( 'Hide Tags', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Tags', BUNCH_NAME)
						),
						array(
							'type' => 'textbox',
							'name' => 'Meta Symbol',
							'label' => __( 'Meta Separator Symbol', BUNCH_NAME ),
							'description' => __( 'Post Meta Separator Symbol', BUNCH_NAME ),
						),
						array(
							'type' => 'textbox',
							'name' => 'by_text',
							'label' => __( 'Author By Text', BUNCH_NAME ),
							'description' => __( 'Enter By Text', BUNCH_NAME ),
						),
						
						
						array(
                            'type' => 'textbox',
                            'name' => 'link',
                            'label' => __( 'Share Link', BUNCH_NAME ),
                            'description' => __( 'Enter Share Link', BUNCH_NAME ),
                            'default' => '#',
							
                        ),
                    ) 
                ), 
				// Single Post
				array(
                     'title' => __( 'Single Post', BUNCH_NAME ),
                    'name' => 'post_page_settings',
                    'icon' => 'font-awesome:fa fa-copy',
                    'controls' => array(
						array(
							'type' => 'toggle',
							'name' => 'post_banner',
							'label' => __( 'Hide Post Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Post Banner', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'post_title',
							'label' => __( 'Show Post Title', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Post Title', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'sing_date',
							'label' => __( 'Hide Box Date', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Box Date', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'post_social',
							'label' => __( 'Hide Social Share', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Post Social Sahre', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'post_tag',
							'label' => __( 'Hide Post Tag', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Post Post Tag', BUNCH_NAME)
						),
						array(
							'type' => 'toggle',
							'name' => 'commentbox',
							'label' => __( 'Hide Comment Area', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Post Comment Area', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                            'name' => 'addcomment',
                            'label' => __( 'Add Comment', BUNCH_NAME ),
                            'description' => __( 'Comment Title', BUNCH_NAME ),
                            'default' => 'Add a Comment',
                        ),
						
                    ) 
                ), 
				// Pages Settings
				/*array(
                    'title' => __( 'Pages', BUNCH_NAME ),
                    'name' => 'single_page_settings',
                    'icon' => 'font-awesome:fa fa-copy',
                    'controls' => array(
						
						
                    ) 
                ), // End of Single Page
				*/
				// Search Page Settings 
                 array(
                     'title' => __( 'Tag-Category', BUNCH_NAME ),
                    'name' => 'tag_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        array(
							'type' => 'toggle',
							'name' => 'tag_banner',
							'label' => __( 'Show/Hide Tag-Category Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Search Banner', BUNCH_NAME)
						),
                    ) 
                ), 
                // Search Page Settings 
                 array(
                     'title' => __( 'Search Page', BUNCH_NAME ),
                    'name' => 'search_page_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        array(
							'type' => 'toggle',
							'name' => 'srch_banner',
							'label' => __( 'Show/Hide Search Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide Search Banner', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                            'name' => 'search_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Search Page Title .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'search_page_header_img',
                            'label' => __( 'Header image', BUNCH_NAME ),
                            'description' => __( 'Enter Search Header image .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'search_image',
                            'label' => __( 'Search image', BUNCH_NAME ),
                            'description' => __( 'Enter Search image .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'textbox',
                            'name' => 'search_text',
                            'label' => __( 'Search Text', BUNCH_NAME ),
                            'description' => __( 'Enter Search Page Tag Line ', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                             'type' => 'select',
                            'name' => 'search_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'search_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => get_template_directory_uri() . '//images/vafpress/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/1col.png' 
                                ),
                                
                            ) 
                        ),
                    ) 
                ), // End of submenu
                
                // Archive Page Settings 
                array(
                     'title' => __( 'Archive Page', BUNCH_NAME ),
                    'name' => 'archive_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
                        array(
							'type' => 'toggle',
							'name' => 'arch_banner',
							'label' => __( 'Hide  Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Hide Banner', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                            'name' => 'archive_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Blog Page Title .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'archive_page_header_img',
                            'label' => __( 'Header Image', BUNCH_NAME ),
                            'description' => __( 'Enter Header image url .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						
					    array(
                             'type' => 'select',
                            'name' => 'archive_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'archive_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png' 
                                ),
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png' 
                                ), 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                
				// Author Page Settings 
                array(
                     'title' => __( 'Author Page', BUNCH_NAME ),
                    'name' => 'author_page_settings',
                    'icon' => 'font-awesome:fa fa-user',
                    'controls' => array(
                         array(
							'type' => 'toggle',
							'name' => 'athr_banner',
							'label' => __( 'Show/Hide 404 Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide 404 Banner', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                            'name' => 'author_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Author Page Title .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'author_page_header_img',
                            'label' => __( 'Header Image', BUNCH_NAME ),
                            'description' => __( 'Enter Header image url .', BUNCH_NAME ),
                            'default' => '',
						),
						array(
                             'type' => 'select',
                            'name' => 'author_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'author_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png'
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png' 
                                ), 
                                
                            ) 
                        ) 
                        
                    ) 
                ),
                
                // 404 Page Settings 
               array(
                     'title' => __( '404 Page Settings', BUNCH_NAME ),
                    'name' => '404_page_settings',
                    'icon' => 'font-awesome:fa fa-exclamation-triangle',
                    'controls' => array(
                        array(
							'type' => 'toggle',
							'name' => '404_banner',
							'label' => __( 'Show/Hide 404 Banner', BUNCH_NAME ),
							'default' => 0,
							'description' => __('Show/Hide 404 Banner', BUNCH_NAME)
						),
						array(
                            'type' => 'textbox',
                           'name' => '404_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                           'description' => __( 'Enter Author Page Title .', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => '404_page_header_img',
                            'label' => __( 'Header Image', BUNCH_NAME ),
                            'description' => __( 'Enter Header image url .', BUNCH_NAME ),
                            'default' => '',
						),
                        array(
                            'type' => 'textbox',
                            'name' => '404_text',
                            'label' => __( '404 Text', BUNCH_NAME ),
                            'description' => __( 'Enter the Tagline you want to show on 404 page', BUNCH_NAME ),
                            'default' => '404 Page not Found' 
                        ),
                        
                        array(
                             'type' => 'upload',
                            'name' => '404_page_bg',
                            'label' => __( 'Background  Image', BUNCH_NAME ),
                            'description' => __( 'Upload Image for 404 Page Background', BUNCH_NAME ),
                            'default' => get_template_directory_uri() . '/images/404.png' 
                        ) 
                    ) 
                )
            ) 
        ),
        
        // Sidebar Creator
        array(
             'title' => __( 'Sidebar Settings', BUNCH_NAME ),
            'name' => 'sidebar-settings',
            'icon' => 'font-awesome:fa fa-bars',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Dynamic Sidebar', BUNCH_NAME ),
                    'name' => 'dynamic_sidebar',
                    'description' => __( 'This section is used for theme color settings', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'sidebar_name',
                            'label' => __( 'Sidebar Name', BUNCH_NAME ),
                            'description' => __( 'Choose the default color scheme for the theme.', BUNCH_NAME ),
                            'default' => __( 'Dynamic Sidebar', BUNCH_NAME ) 
                        ) 
                    ) 
                ) 
            ) 
        ),
        
        // Dynamic Social Media Creator
        
        
        
 /* Font settings */
        array(
             'title' => __( 'Font Settings', BUNCH_NAME ),
            'name' => 'font_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                /** heading font settings */
                 array(
                     'title' => __( 'Heading Font', BUNCH_NAME ),
                    'name' => 'heading_font_settings',
                    'icon' => 'font-awesome:fa fa-text-height',
                    
                    'controls' => array(
                        
                         array(
                             'type' => 'toggle',
                            'name' => 'use_custom_font',
                            'label' => __( 'Use Custom Font', BUNCH_NAME ),
                            'description' => __( 'Use custom font or not', BUNCH_NAME ),
                            'default' => 0 
                        ),
                      //anchor a setttings  
						array(
                             'type' => 'section',
                            'title' => __( 'Link a Settings', BUNCH_NAME ),
                            'name' => 'a_settings',
                            'description' => __( 'Link a font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'a_font_family',
                                    'description' => __( 'Select the font family to use for a', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'a_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Color', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
							//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'a_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'a_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'a_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ),
					//Icon	
						
						array(
                             'type' => 'section',
                            'title' => __( 'Icon Settings', BUNCH_NAME ),
                            'name' => 'fa_settings',
                            'description' => __( 'Icon a font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'fa_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'fa_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ),

//h1
					   array(
                            'type' => 'section',
                            'title' => __( 'H1 Settings', BUNCH_NAME ),
                            'name' => 'h1_settings',
                            'description' => __( 'heading 1 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h1_font_family',
                                    'description' => __( 'Select the font family to use for h1', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'h1_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h1_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h1_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h1_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
								
                            ) 
                        ),
					//h2	
                        array(
                             'type' => 'section',
                            'title' => __( 'H2 Settings', BUNCH_NAME ),
                            'name' => 'h2_settings',
                            'description' => __( 'heading h2 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h2_font_family',
                                    'description' => __( 'Select the font family to use for h2', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h2_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) ,
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h2_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h2_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h2_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ),
						//h3
                        array(
                             'type' => 'section',
                            'title' => __( 'H3 Settings', BUNCH_NAME ),
                            'name' => 'h3_settings',
                            'description' => __( 'heading h3 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h3_font_family',
                                    'description' => __( 'Select the font family to use for h3', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h3_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h3', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h3_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h3_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h3_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ),
                        //h4
                        array(
                             'type' => 'section',
                            'title' => __( 'H4 Settings', BUNCH_NAME ),
                            'name' => 'h4_settings',
                            'description' => __( 'heading h4 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h4_font_family',
                                    'description' => __( 'Select the font family to use for h4', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h4_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h4', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h4_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h4_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h4_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End								
                            ) 
                        ),
                     //h5  
                        array(
                             'type' => 'section',
                            'title' => __( 'H5 Settings', BUNCH_NAME ),
                            'name' => 'h5_settings',
                            'description' => __( 'heading h5 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h5_font_family',
                                    'description' => __( 'Select the font family to use for h5', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h5_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h5', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h5_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h5_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h5_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ),
                        //h6
                        array(
                             'type' => 'section',
                            'title' => __( 'H6 Settings', BUNCH_NAME ),
                            'name' => 'h6_settings',
                            'description' => __( 'heading h6 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h6_font_family',
                                    'description' => __( 'Select the font family to use for h6', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h6_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h6', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ),
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'h6_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h6_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'h6_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ) 
                    ) 
                ),
                
                /** body font settings */
                array(
                     'title' => __( 'Body Font', BUNCH_NAME ),
                    'name' => 'body_font_settings',
                    'icon' => 'font-awesome:fa fa-text-width',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'body_custom_font',
                            'label' => __( 'Use Custom Font', BUNCH_NAME ),
                            'description' => __( 'Use custom font or not', BUNCH_NAME ),
                            'default' => 0 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'Body Font Settings', BUNCH_NAME ),
                            'name' => 'body_font_settings1',
                            'description' => __( 'body font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'body_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'body_font_family',
                                    'description' => __( 'Select the font family to use for body', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'body_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading body', BUNCH_NAME ),
                                    'default' => '#686868' 
                                ),
								//New	
								array(
                                    'type' => 'textbox',
                                    'name' => 'body_font_size',
                                    'label' => __( 'Font Size', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Size', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'body_font_style',
                                    'label' => __( 'Font Style', BUNCH_NAME ),
                                    'description' => __( 'Choose the font Style', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								array(
                                    'type' => 'textbox',
                                    'name' => 'body_line_height',
                                    'label' => __( 'Font Line Height', BUNCH_NAME ),
                                    'description' => __( 'Choose the Line Height', BUNCH_NAME ),
                                    'default' => '' 
                                ),
								//End
                            ) 
                        ) 
                    ) 
                ) 
            ) 
        ), 
		
		
    ) 
);
/**
 *EOF
 */