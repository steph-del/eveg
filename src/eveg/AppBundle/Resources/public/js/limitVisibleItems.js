function limitResults(limit, label, item, click){
	// label : node to be shown / hidden
	// item : node to limit repetition
	// click : click this element to toggle
	$(label).hide();
	//var limit = 3;
	var synonymsExpand = false;
	var nbSynonyms = $(item).size();
	var strExpand = 'Afficher tout (' + nbSynonyms + ')';
	var strMini = 'Réduire';
	$(label).html(strExpand);
	//console.log($('.synonymsBox').size());
	if(nbSynonyms > limit) {
		synonymsExpand = true;
		$(item).slice(limit).hide();
		$(label).show();
	}
	$(click).click(function(){
		if(synonymsExpand == true) {
			$(item).show();
			$(label).html(strMini);
			synonymsExpand = false
		} else {
			$(item).slice(limit).hide();
			$(label).html(strExpand);
			synonymsExpand = true;
		}	
	});	
}