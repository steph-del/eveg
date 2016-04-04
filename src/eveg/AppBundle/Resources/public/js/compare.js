function compareItemDiv(id, value) {
	return div = '<div class="compareItem"><i class="fa fa-times removeCompareItem" id="removeCompareItem-'+id+'" value='+id+'></i>'+value+'</div>';
}

function addItemDiv() {
	return div = '<button type="button" class="addCompareItem btn btn-primary btn-sm" style="width: 100%;">Ajouter au comparateur</button>';
}

function addSubmitButton() {
	return div = '<button type="button" class="compareSumbitButton btn btn-success btn-sm" style="width: 100%;">Comparer</button>';
}

function addItem() {
	$.ajax({
		url: Routing.generate('eveg_compare_add_item'),
		success: function() {
			updateComparator();
		},
		error: function() {
			//
		},
		type: 'POST'
	})
}

function removeItem(idItem) {
	$.ajax({
		url: Routing.generate('eveg_compare_remove_item'),
		data: {
			id: idItem
		},
		success: function() {
			updateComparator();
		},
		error: function(e) {
			//
		},
		type: 'POST'
	})
}

$(".compareSpinner").hide();
function updateComparator() {
	$("#comparatorItems").html('<div class="compareSpinner text-center"><i class="fa fa-circle-o-notch fa-spin"></i></div>');
	$("#comparatorButtons").html('');
	$(".compareSpinner").show();
	$.ajax({
		url: Routing.generate('eveg_compare_get_items'),
		success: function(result) {
			$(".compareSpinner").hide();
			var nbItems = Object.keys(result).length;

			// Show items
			for(var item in result) {

				var $newItemDiv = compareItemDiv(item, result[item]);
				$($newItemDiv).appendTo($("#comparatorItems"));
				$("#removeCompareItem-"+item).click(function(e) {
					e.preventDefault();
					removeItem(this.getAttribute("value"));
				});
			}

			// Add new
			if(nbItems < 2) {
				var missing = 2 - nbItems;
				var $addItemDiv = addItemDiv();
				$($addItemDiv).appendTo($("#comparatorButtons"));
				$(".addCompareItem").click(function(e) {
					e.preventDefault();
					addItem();
				});
			// Compare button
			} else {
				var $submitButton = addSubmitButton();
				$($submitButton).appendTo($("#comparatorButtons"));
				$(".compareSumbitButton").click(function(e) {
					e.preventDefault();
					var url = Routing.generate('eveg_compare'); 
					window.open(url, '_blank');
				});
			}
		},
		error: function(result) {
			$(".compareSpinner").hide();
			console.log(result);
		},
		type: 'POST'
	});
}

updateComparator();

$("#compareOption").click(function () {
	updateComparator();
});
//$("#comparator").appendTo("#here");
/*
$(function () {
  $('#compareOption').popover({
  	html: true,
  	//template:'<div class="popover popover-compare" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" id="popover-compare-content"></div></div>',
  	content: function() {
  		return $("#comparatorHidden").clone().html();
  	}
  	//placement: 'auto',
  	trigger: 'hover',
  	content: '<div id="popover-compare-content"></div>'
  })
})
*/


