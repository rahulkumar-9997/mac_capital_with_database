$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(function() {
	$('#toast').delay(10000).fadeOut('show');
	setTimeout(function() {
		$('#toast').delay(10000).fadeOut('show');
	}, 5000);
});
$(document).ready(function() {
	$(document).on('click', 'a[data-ajax-popup="true"]', function() {
		var pageTitle = $(this).data('pagetitle');
		var imageFile = $(this).data('img');
		var currentUrl = $(this).data('currenturl');
		var url = $(this).data('url');		
		var csrfToken = $('meta[name="csrf-token"]').attr('content');

		console.log('Sending data:', {
			_token: csrfToken,
			pageTitle: pageTitle,
			url: url,
			imageFile: imageFile,
			currentUrl: currentUrl,
		});

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				_token: csrfToken,
				pageTitle: pageTitle,
				url: url,
				imageFile: imageFile,
				currentUrl: currentUrl
			},
			headers: {
				'X-CSRF-TOKEN': csrfToken
			},
			success: function(response) {
				console.log('Success response:', response);
				if (response.status === 'success' && response.form) {
					$('#enquiryModalForm').html(response.form);
					$('.modal_popup').addClass('contact-popup-visible');
				} else {
					console.error('Unexpected response format:', response);
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log('AJAX Error:', jqXHR, textStatus, errorThrown);
				if (jqXHR.status === 419) {
					console.error('Session expired. Reloading page.');
					document.location.reload();
				} else if (jqXHR.status === 409) {
					console.error('CSRF Token mismatch or conflict.');
				} else {
					console.error('Unexpected error:', jqXHR.responseText);
				}
			}
		});
	});


	// $(document).keydown(function(e){
	//    if(e.keyCode === 27) {
	//        $('.modal_popup').removeClass('contact-popup-visible');
	//    }
	// });
	//Hide Popup
	$(document).on('click', '.close-modal', function() {
		$('.modal_popup').removeClass('contact-popup-visible');
	});
	$(document).off('submit', '#eachcontact').on('submit', '#eachcontact', function(event) {
		event.preventDefault();
		var form = $(this);
		var submitButton = form.find('button[type="submit"]');
		$('.form-control').removeClass('is-invalid');
		$('.invalid-feedback').remove();
		submitButton.prop('disabled', true).html('<span class="each-spinner spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');
		var formData = new FormData(this);
		$.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(response) {
				submitButton.prop('disabled', false).html('Submit');
				if(response.status === 'success') {
					form[0].reset();
					$('.modal_popup').removeClass('contact-popup-visible');
					$('#toast-messagejs').text(response.message);
					$('#toastjs').addClass('show');
					setTimeout(function() {
						$('#toastjs').removeClass('show');
					}, 5000);
				}
			},
			error: function(xhr) {
				submitButton.prop('disabled', false).html('Submit');
				var errors = xhr.responseJSON.errors;
				if(errors) {
					$.each(errors, function(key, value) {
						var inputField = $('#' + key);
						inputField.addClass('is-invalid');
						inputField.after('<div class="invalid-feedback">' + value[0] + '</div>');
					});
				} else {
					$('.modal_popup').removeClass('contact-popup-visible');
					$('#toast-messagejs').text('Something went wrong. Please try again.');
					$('#toastjs').addClass('show');
					setTimeout(function() {
						$('#toastjs').removeClass('show');
					}, 5000);
				}
			}
		});
	});
});
$(document).ready(function() {
	if($('#toast-messagejs').text().length > 0) {
		$('#toastjs').addClass('show');
		setTimeout(function() {
			$('#toastjs').removeClass('show');
		}, 5000);
	}
});