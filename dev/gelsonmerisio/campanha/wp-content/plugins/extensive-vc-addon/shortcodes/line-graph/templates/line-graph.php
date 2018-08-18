<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="evc-line-graph evc-shortcode <?php echo esc_attr( $holder_classes ); ?>" <?php extensive_vc_print_inline_attrs( $holder_data, true ); ?>>
	<canvas class="evc-lg-canvas"></canvas>
	<?php echo do_shortcode( $content ); ?>
</div>