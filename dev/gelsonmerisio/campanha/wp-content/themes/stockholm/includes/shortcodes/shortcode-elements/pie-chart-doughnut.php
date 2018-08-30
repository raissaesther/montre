<?php
/* Pie Chart Doughnut shortcode */

if (!function_exists('pie_chart3')) {
	function pie_chart3($atts, $content = null) {
		extract(shortcode_atts(array("width" => "150", "height" => "150", "color" => ""), $atts));
		$id = mt_rand(1000, 9999);
		$html = "<div class='q_pie_graf_holder'><div class='q_pie_graf'><canvas id='pie".$id."' height='".$height."' width='".$width."'></canvas></div><div class='q_pie_graf_legend'><ul>";
		$pie_chart_array = explode(";", $content);
		for ($i = 0 ; $i < count($pie_chart_array) ; $i = $i + 1){
			$pie_chart_el = explode(",", $pie_chart_array[$i]);
			$html .= "<li><div class='color_holder' style='background-color: ".trim($pie_chart_el[1]).";'></div><p style='color: ".$color.";'>".trim($pie_chart_el[2])."</p></li>";
		}
		$html .= "</ul></div></div><script>var pie".$id." = [";
		$pie_chart_array = explode(";", $content);
		for ($i = 0 ; $i < count($pie_chart_array) ; $i = $i + 1){
			$pie_chart_el = explode(",", $pie_chart_array[$i]);
			if ($i > 0) $html .= ",";
			$html .= "{value: ".trim($pie_chart_el[0]).",color:'".trim($pie_chart_el[1])."'}";
		}
		$html .= "];
		var \$j = jQuery.noConflict();
		\$j(document).ready(function() {
			if(\$j('.touch .no_delay').length){
				new Chart(document.getElementById('pie".$id."').getContext('2d')).Doughnut(pie".$id.",{segmentStrokeColor : 'transparent',});
			}else{
				\$j('#pie".$id."').appear(function() {
					new Chart(document.getElementById('pie".$id."').getContext('2d')).Doughnut(pie".$id.",{segmentStrokeColor : 'transparent',});
				},{accX: 0, accY: -200});
			}							
		});
	</script>";
		return $html;
	}
	add_shortcode('pie_chart3', 'pie_chart3');
}