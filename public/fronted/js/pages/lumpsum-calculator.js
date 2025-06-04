$(document).ready(function() {
	const durationSlider = $('#duration');
	const rateSlider = $('#rate');
	const durationInput = $('#duration-txt');
	const rateInput = $('#rate-txt');
	const sipAmountInput = $('.sip-input');

	function updateSliderBackground(slider, min, max) {
		const value = ((slider.val() - min) / (max - min)) * 100;
		slider.css('background', `linear-gradient(to right, #4282aa 0%, #4282aa ${value}%, #E3EBF6 ${value}%, #E3EBF6 100%)`);
	}
	// Initialize the sliders' background
	updateSliderBackground(durationSlider, 1, 30);
	updateSliderBackground(rateSlider, 8, 30);
	// Sync duration slider and input
	durationSlider.on('input', function() {
		durationInput.val(durationSlider.val());
		updateSliderBackground(durationSlider, 1, 30);
	});
	durationInput.on('input', function() {
		let value = parseInt(durationInput.val()) || 0;
		value = Math.max(1, Math.min(30, value)); // Restrict between 1 and 30
		durationInput.val(value);
		durationSlider.val(value);
		updateSliderBackground(durationSlider, 1, 30);
	});
	// Sync expectedROR slider and input
	rateSlider.on('input', function() {
		rateInput.val(rateSlider.val());
		updateSliderBackground(rateSlider, 8, 30);
	});
	rateInput.on('input', function() {
		let value = parseFloat(rateInput.val()) || 0;
		value = Math.max(8, Math.min(30, value)); // Restrict between 8% and 30%
		rateInput.val(value.toFixed(2));
		rateSlider.val(value);
		updateSliderBackground(rateSlider, 8, 30);
	});
	// Ensure sipAmount only allows numbers
	sipAmountInput.on('input', function() {
		// Remove non-numeric characters except commas
		this.value = this.value.replace(/[^0-9,]/g, '');
	});
});
$(document).ready(function() {
	function calculateLumpsum(P, r, t, n) {
		/*Convert rate of return to percentage and use the lumpsum formula*/
		var futureValue = P * Math.pow(1 + r / 100, t); /*Lumpsum formula*/
		return futureValue.toFixed(2);
	}

	function formatCurrency(value) {
		return '' + parseFloat(value).toLocaleString('en-IN');
	}
	var chart;

	function renderDoughnutChart(data) {
		var ctx = $('#LumpsumPieChart')[0].getContext('2d');
		if(chart) {
			chart.destroy();
		}
		chart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: data,
					backgroundColor: ['#4282aa', '#eef0ff'],
					borderWidth: 2,
					borderColor: '#fff'
				}],
				labels: [],
			},
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					tooltip: {
						enabled: false
					}
				}
			}
		});
	}

	function updateLumpsum() {
		var P = parseFloat($('.lumpsum-input').val().replace(/,/g, '') || 0); /*Get the amount*/
		var t = parseInt($('#duration-txt').val() || 0); /* Get the duration in years*/
		var r = parseFloat($('#rate-txt').val() || 0); /* Get the rate of return*/
		var n = 12; /* Compounding frequency (monthly)*/
		if(P && t && r) {
			var futureValue = Math.round(calculateLumpsum(P, r, t, n));
			var investedAmount = Math.round(P); /* Total invested*/
			var estimatedReturns = Math.round(futureValue - investedAmount); /* Estimated returns*/
			$('.selected-years').text(t + ' Years');
			$('#Lumpsum-total-value').text(formatCurrency(futureValue)); /* Total value of the investment*/
			$('#Lumpsum-initial-value').text(formatCurrency(investedAmount)); /* Total invested amount*/
			$('#Lumpsum-final-val').text(formatCurrency(estimatedReturns)); /* Estimated returns*/
			renderDoughnutChart([investedAmount, estimatedReturns]); /* Update the doughnut chart*/
		}
	}
	$('.lumpsum-input').on('input', updateLumpsum);
	$('#duration-txt').on('input', updateLumpsum);
	$('#rate-txt').on('input', updateLumpsum);
	$('.ao-range-slider').on('input', function() {
		var sliderValue = $(this).val();
		var inputId = $(this).attr('id');
		if(inputId === 'duration') {
			$('#duration-txt').val(sliderValue);
		} else if(inputId === 'rate') {
			$('#rate-txt').val(sliderValue);
		}
		updateLumpsum();
	});
	updateLumpsum();
});