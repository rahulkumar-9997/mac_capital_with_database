$(document).ready(function () {
    const durationSlider = $('#loan-duration-range');
    const rateSlider = $('#int-rate-range');
    const durationInput = $('#loan-duration-txt');
    const rateInput = $('#int-rate-txt');
    const loanAmountInput = $('#loan-input');
    let loanChart;

    function updateSliderBackground(slider, min, max) {
        const value = ((slider.val() - min) / (max - min)) * 100;
        slider.css('background', `linear-gradient(to right, #4282aa 0%, #4282aa ${value}%, #E3EBF6 ${value}%, #E3EBF6 100%)`);
    }

    updateSliderBackground(durationSlider, 1, 30);
    updateSliderBackground(rateSlider, 1, 30);

    durationSlider.on('input', function () {
        durationInput.val(durationSlider.val());
        updateSliderBackground(durationSlider, 1, 30);
        calculateLoan();
    });

    durationInput.on('input', function () {
        let value = parseInt(durationInput.val()) || 0;
        value = Math.max(1, Math.min(30, value));
        durationInput.val(value);
        durationSlider.val(value);
        updateSliderBackground(durationSlider, 1, 30);
        calculateLoan();
    });

    rateSlider.on('input', function () {
        rateInput.val(rateSlider.val());
        updateSliderBackground(rateSlider, 1, 30);
        calculateLoan();
    });

    rateInput.on('input', function () {
        let value = parseFloat(rateInput.val()) || 0;
        value = Math.max(1, Math.min(30, value));
        rateInput.val(value.toFixed(2));
        rateSlider.val(value);
        updateSliderBackground(rateSlider, 1, 30);
        calculateLoan();
    });

    loanAmountInput.on('input', function () {
        let number = this.value.replace(/[^0-9]/g, '');
        this.value = Number(number).toLocaleString('en-IN');
        calculateLoan();
    });

    function calculateLoan() {
        const P = parseFloat(loanAmountInput.val().replace(/,/g, '')) || 1000000;
        const r = parseFloat(rateInput.val()) || 6.5;
        const n = parseInt(durationInput.val()) || 5;

        const monthlyRate = r / 12 / 100;
        const months = n * 12;

        const emi = (P * monthlyRate * Math.pow(1 + monthlyRate, months)) /
            (Math.pow(1 + monthlyRate, months) - 1);

        const totalPayable = Math.round(emi * months);
        const totalInterest = Math.round(totalPayable - P);
        const roundedEMI = Math.round(emi);
        const formatCurrency = (amount) => '₹ ' + amount.toLocaleString('en-IN');
        $('.emi-amount').text(formatCurrency(roundedEMI));
        $('.principal-amount').text(formatCurrency(P));
        $('.interest-amount').text(formatCurrency(totalInterest));
        $('.total-payable').text(formatCurrency(totalPayable));

        renderLoanChart(P, totalInterest);
    }

    /*Render or update chart*/
    function renderLoanChart(principal, interest) {
        const ctx = document.getElementById('loanChart').getContext('2d');

        if (loanChart) {
            loanChart.data.datasets[0].data = [principal, interest];
            loanChart.update();
        } else {
            loanChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Principal Amount', 'Total Interest'],
                    datasets: [{
                        data: [principal, interest],
                        backgroundColor: ['#4282aa', '#011B30'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return context.label + ': ₹' + context.raw.toLocaleString('en-IN');
                                }
                            }
                        }
                    }
                }
            });
        }
    }
    calculateLoan();
});