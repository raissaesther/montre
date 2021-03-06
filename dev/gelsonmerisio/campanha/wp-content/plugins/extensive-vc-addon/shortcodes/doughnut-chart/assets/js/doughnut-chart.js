(function ($) {
	'use strict';

	$(document).ready(function () {
		evcInitDoughnutChart();
	});

	/**
	 * Init doughnut chart shortcode
	 */
	function evcInitDoughnutChart() {
		var holder = $('.evc-doughnut-chart');

		if (holder.length) {
			holder.each(function () {
				var thisHolder = $(this),
					holderBorderColor = thisHolder.data('border-color'),
					borderColor = holderBorderColor !== undefined && holderBorderColor !== '' ? holderBorderColor : '#fff',
					holderBorderHoverColor = thisHolder.data('border-hover-color'),
					hoverBorderColor = holderBorderHoverColor !== undefined && holderBorderHoverColor !== '' ? holderBorderHoverColor : '#efefef',
					holderBorderWidth = thisHolder.data('border-width'),
					borderWidth = holderBorderWidth !== undefined && holderBorderWidth !== '' ? parseInt( holderBorderWidth, 10 ) : 2,
					enableLegend = thisHolder.data('enable-legend'),
					legendPosition = thisHolder.data('legend-position'),
					holderLegendTextSize = thisHolder.data('legend-text-size'),
					legendTextSize = holderLegendTextSize !== undefined && holderLegendTextSize !== '' ? parseInt( holderLegendTextSize, 10 ) : 12,
					holderLegendColor = thisHolder.data('legend-color'),
					legendColor = holderLegendColor !== undefined && holderLegendColor !== '' ? holderLegendColor : '#666',
					doughnutChartItem = thisHolder.children('.evc-doughnut-chart-item'),
					canvas = thisHolder.children('canvas'),
					labels = [],
					values = [],
					colors = [];

				doughnutChartItem.each(function(){
					var thisItem = $(this),
						label = thisItem.data('label'),
						value = thisItem.data('value'),
						color = thisItem.data('color');

					if ( label !== undefined && label !== '' ) {
						labels.push(label);
					}

					if ( value !== undefined && value !== '' && color !== undefined && color !== '' ) {
						values.push(value);
						colors.push(color);
					}
				});

				thisHolder.appear(function () {
					thisHolder.addClass('evc-dc-appeared');

					new Chart(canvas, {
						type: 'doughnut',
						data: {
							labels: labels,
							datasets: [{
								data: values,
								backgroundColor: colors,
								borderColor: borderColor,
								hoverBorderColor: hoverBorderColor,
								borderWidth: borderWidth
							}]
						},
						options: {
							responsive: true,
							legend: {
								display: enableLegend,
								position: legendPosition,
								labels: {
									fontSize: legendTextSize,
									fontColor: legendColor
								}
							}
						}
					});
				}, {accX: 0, accY: -80});
			});
		}
	}
	
})(jQuery);