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
	function calculateSIP(P, r, n) {
		var rateOfReturn = r / 100 / 12; /*Convert percentage to decimal and divide by 12 for monthly rate*/
		var months = n * 12; /*Convert years to months*/
		var futureValue = P * (((Math.pow(1 + rateOfReturn, months) - 1) / rateOfReturn) * (1 + rateOfReturn));
		return futureValue.toFixed(2); /* Round to 2 decimal places*/
	}

	function formatCurrency(value) {
		return '' + parseFloat(value).toLocaleString('en-IN');
	}
	var chart;

	function renderDoughnutChart(data) {
		var ctx = $('#SIPPieChart')[0].getContext('2d');
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

	function updateSIP() {
		var P = parseFloat($('.sip-input').val().replace(/,/g, '') || 0);
		var n = parseInt($('#duration-txt').val() || 0);
		var r = parseFloat($('#rate-txt').val() || 0);
		if(P && n && r) {
			var futureValue = Math.round(calculateSIP(P, r, n));
			var investedAmount = Math.round(P * 12 * n);
			var estimatedReturns = Math.round(futureValue - investedAmount);
			$('.selected-years').text(n + ' Years');
			$('#SIP-total-value').text(formatCurrency(futureValue));
			$('#SIP-initial-value').text(formatCurrency(investedAmount));
			$('#SIP-final-val').text(formatCurrency(estimatedReturns));
			renderDoughnutChart([investedAmount, estimatedReturns]);
		}
	}
	$('.sip-input').on('input', updateSIP);
	$('#duration-txt').on('input', updateSIP);
	$('#rate-txt').on('input', updateSIP);
	$('.ao-range-slider').on('input', function() {
		var sliderValue = $(this).val();
		var inputId = $(this).attr('id');
		if(inputId === 'duration') {
			$('#duration-txt').val(sliderValue);
		} else if(inputId === 'rate') {
			$('#rate-txt').val(sliderValue);
		}
		updateSIP();
	});
	updateSIP();
});