$(document).ready(function() {
	const durationSlider = $('#duration');
	const rateSlider = $('#rate');
	const monthlyWithdrawalSlider = $('#fc-pa');
	const durationInput = $('#duration-txt');
	const rateInput = $('#rate-txt');
	const monthlyWithdrawalInput = $('#fc-pa-txt');
	const sipAmountInput = $('.sip-input');

	function updateSliderBackground(slider, min, max) {
		const value = ((slider.val() - min) / (max - min)) * 100;
		slider.css('background', `linear-gradient(to right, #4282aa 0%, #4282aa ${value}%, #E3EBF6 ${value}%, #E3EBF6 100%)`);
	}
	// Initialize the sliders' background
	updateSliderBackground(durationSlider, 1, 30);
	updateSliderBackground(rateSlider, 8, 30);
	updateSliderBackground(monthlyWithdrawalSlider, 500, 50000);
	// Sync sliders with inputs
	durationSlider.on('input', function() {
		durationInput.val(durationSlider.val());
		updateSliderBackground(durationSlider, 1, 30);
		updateSWP();
	});
	durationInput.on('input', function() {
		let value = parseInt(durationInput.val()) || 0;
		value = Math.max(1, Math.min(30, value)); // Restrict between 1 and 30
		durationInput.val(value);
		durationSlider.val(value);
		updateSliderBackground(durationSlider, 1, 30);
		updateSWP();
	});
	rateSlider.on('input', function() {
		rateInput.val(rateSlider.val());
		updateSliderBackground(rateSlider, 8, 30);
		updateSWP();
	});
	rateInput.on('input', function() {
		let value = parseFloat(rateInput.val()) || 0;
		value = Math.max(8, Math.min(30, value)); // Restrict between 8% and 30%
		rateInput.val(value.toFixed(2));
		rateSlider.val(value);
		updateSliderBackground(rateSlider, 8, 30);
		updateSWP();
	});
	monthlyWithdrawalSlider.on('input', function() {
		monthlyWithdrawalInput.val(monthlyWithdrawalSlider.val());
		updateSliderBackground(monthlyWithdrawalSlider, 500, 50000);
		updateSWP();
	});
	monthlyWithdrawalInput.on('input', function() {
		let value = parseInt(monthlyWithdrawalInput.val()) || 0;
		value = Math.max(500, Math.min(50000, value)); // Restrict between 500 and 50,000
		monthlyWithdrawalInput.val(value);
		monthlyWithdrawalSlider.val(value);
		updateSliderBackground(monthlyWithdrawalSlider, 500, 50000);
		updateSWP();
	});
	// SWP Calculation
	function formatCurrency(value) {
		return '' + parseFloat(value).toLocaleString('en-IN');
	}
	var chart = null; // Initialize chart variable
	function renderDoughnutChart(data) {
		const parent = $('#SWPPieChart').parent(); // Get the parent container
		$('#SWPPieChart').remove(); // Remove the old canvas
		parent.append('<canvas id="SWPPieChart"></canvas>'); // Add a new canvas
		const canvas = $('#SWPPieChart')[0];
		const ctx = canvas.getContext('2d');
		// Create the chart
		chart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: data,
					backgroundColor: ['#4282aa', '#eef0ff', '#3f5bd9'],
					borderWidth: 2,
					borderColor: '#fff'
				}],
				labels: ['Invested Amount', 'Total Withdrawal', 'Final value'],
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

	function updateSWP() {
		var investedAmount = parseFloat($('.lumpsum-input').val().replace(/,/g, '') || 0); // Get initial investment
		var PMT = parseFloat(monthlyWithdrawalInput.val() || 0); // Get monthly withdrawal
		var r = parseFloat(rateInput.val() || 0) / 100; // Annual interest rate
		var t = parseInt(durationInput.val() || 0); // Duration in years
		var n = 12; // Monthly compounding
		if(investedAmount && PMT && r && t) {
			var totalWithdrawal = PMT * n * t; // Calculate total withdrawal
			var futureValue = investedAmount * Math.pow(1 + r / n, n * t) - totalWithdrawal; // Example dynamic logic
			// Format and display results
			$('#swp-invested-amt').text(formatCurrency(investedAmount));
			$('#swp-withdrawal-amt').text(formatCurrency(totalWithdrawal));
			$('#final-value').text(formatCurrency(futureValue));
			// Update chart
			renderDoughnutChart([investedAmount, totalWithdrawal, futureValue]);
		}
	}
	// Trigger SWP calculation when input or slider changes
	updateSWP();
	$('.ao-range-slider').on('input', updateSWP);
	$('.lumpsum-input').on('input', updateSWP);
	$('#duration-txt').on('input', updateSWP);
	$('#rate-txt').on('input', updateSWP);
	$('#fc-pa-txt').on('input', updateSWP);
	$('#fc-pa').on('input', updateSWP);
});