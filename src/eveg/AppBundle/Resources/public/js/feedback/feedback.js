function feedback(ajaxFormFeedback, feedbackSpinDivId, feedbackSubmitDivId, feedbackSubmitTextDivId, emailInputDivId, aboutInputDivId, syntaxonInputDivId, typeInputDivId, messageInputDivId, ajaFeddBackResponseDivId){
		feedbackSpinDivId.hide();
		feedbackSubmitText = feedbackSubmitTextDivId.html();
		feedbackSubmitWaitingText = 'Envoi en cours';

		ajaxSuccessReturnDiv = '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+messageFeedbackSuccess+'</div>';
		ajaxErrorReturnDiv = '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+messageFeedbackError+'</div>';

		ajaxFormFeedback.on('submit', function(event) {
			event.preventDefault();

			feedbackSpinDivId.show();
			feedbackSubmitDivId.prop('disabled', true);
			feedbackSubmitTextDivId.html(feedbackSubmitWaitingText);

			$.ajax({
				url: Routing.generate('eveg_feedback', true),
				data: {
					'email':   		emailInputDivId.val(),
					'about':   		aboutInputDivId.val(),
					'syntaxonName': syntaxonInputDivId.val(),
					'type':    		typeInputDivId.val(),
					'message': 		messageInputDivId.val()
				},
				error: function(){
					feedbackSpinDivId.hide();
					feedbackSubmitDivId.prop('disabled', false);
					feedbackSubmitTextDivId.html(feedbackSubmitText);
					ajaFeddBackResponseDivId.html(ajaxErrorReturnDiv);
				},
				success: function(){
					feedbackSpinDivId.hide();
					feedbackSubmitDivId.prop('disabled', false);
					feedbackSubmitTextDivId.html(feedbackSubmitText);

					messageInputDivId.val('');
					ajaFeddBackResponseDivId.html(ajaxSuccessReturnDiv);
				},
				type: 'POST'
			});
		});
	}