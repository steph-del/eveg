function checkInputCatminatCode(inputTarget, formGroupTarget){
	$(inputTarget).keyup(function(){ 
		var catCode = $(inputTarget).val();
		var catminatCode = "catminatCode=" + catCode;
		if(catCode != '') {
			$.ajax({
		        type: "POST",
		        url: Routing.generate('eveg_admin_catCode'),
		        data: catminatCode,
		        datatype: 'json',
		        cache: false,
		        success: function(data) {
		            if(data.wellFormed) {
			           	setSuccess(formGroupTarget);
			        } else {
			        	setError(formGroupTarget);
			        }
		        },
		        error: function(xhr, status, error) {
					var err = eval("(" + xhr.responseText + ")");
					console.log(err.Message);
				}
			});
		} else {
			setDefault(formGroupTarget);
		}
		
		return false;
	}); 
}

function setSuccess(formGroupTarget) { 
	$(formGroupTarget).attr('class', 'form-group has-success has-feedback');
   	//$('#formCatCodeGlyphicon').attr('class', 'glyphicon glyphicon-ok form-control-feedback');
}

function setError(formGroupTarget) { 	
	$(formGroupTarget).attr('class', 'form-group has-error has-feedback');
   	//$('#formCatCodeGlyphicon').attr('class', 'glyphicon glyphicon-remove form-control-feedback');
}

function setWaiting(formGroupTarget) {
	$(formGroupTarget).attr('class', 'form-group has-error has-warning');
}

function setDefault(formGroupTarget) { 	
	$(formGroupTarget).attr('class', 'form-group has-feedback');
   	//$('#formCatCodeGlyphicon').attr('class', 'glyphicon form-control-feedback');
}