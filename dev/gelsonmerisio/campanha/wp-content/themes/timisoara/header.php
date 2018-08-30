<?php 
    $options = _WSH()->option();
	$meta = _WSH()->get_meta('_bunch_header_settings');
	timisoara_bunch_global_variable();
	$icon_href = (timisoara_set( $options, 'site_favicon' )) ? timisoara_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.ico';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
	<link rel="shortcut icon" href="<?php echo esc_url($icon_href); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url($icon_href); ?>" type="image/x-icon">
<?php endif; ?>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- =======Body Property  ===-->
    <?php if(timisoara_set($options, 'body_color')) : ?>
	<div class="body_class" style="background-color:<?php echo esc_url(timisoara_set($options, 'body_color'));?>;" >
	<?php else :?>
	<div class="body_class" style="background-image:url(<?php echo esc_url(timisoara_set($options, 'body_image'));?>);" >
	<?php endif ; ?>
	
	<!-- =======Boxed/FullWidth add extra div in footer ===-->
	<div class="page-wrapper <?php if(timisoara_set($options, 'boxed')) echo ' boxed';?>" style="background:<?php echo esc_attr(timisoara_set($options, 'wrapper_color'));?>;" >

	<!-- =======Preloader========= -->	
	<?php if(!timisoara_set($options, 'preloader')):?>
	<div class="preloader"></div>
	<?php endif;?>
   <!-- =======Header Start========= -->
   
<!-- Main Header-->

<?php 
	  $header = timisoara_set($meta, 'meta_header_style'); 
	 
	  $header = (timisoara_set($_GET, 'meta_header_style')) ? timisoara_set($_GET, 'meta_header_style') : $header;
	  switch($header){
	  	case "1":
			get_template_part('includes/modules/header_v1');
			break;
		default:
			get_template_part('includes/modules/header_v2');
		}
?>
 
  