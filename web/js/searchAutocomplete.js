$('.searchIcon').hide();
$('.badge-addon').hide();
monkeyPatchAutocomplete();
$('#searchbox').autocomplete({
	source: '{{ url("api_get_syntaxon_search") }}',
	minLength: 3,
	search: function(event, ui) {
		$('.badge-addon').hide();
		$('.searchIcon').show();
	},
	response: function(event, ui) {
		$('.searchIcon').hide();
		$('.badge-addon').text(ui.content.length);
		$('.badge-addon').show();
	},
	focus: function(event, ui) {
        event.preventDefault();
    },
    change: function(event, ui) {
    	$('.badge-addon').hide();
    },
    close: function(event, ui) {
    	$('.badge-addon').hide();
    },
	select : function(event, ui){
		event.preventDefault();
		//console.log( Routing.generate('eveg_show_one_redirect', { id: ui.item.id }, true) );
		window.location.replace(Routing.generate('eveg_show_one_redirect', { id: ui.item.id }, true));
		$('.badge-addon').hide();
	}
});