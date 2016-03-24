function createCacheMapPng(domIdMap, canvasIdMap, imgCacheMultiplicator, mapType) {
	svgMap = $(domIdMap).html();
	canvg(document.getElementById(canvasIdMap), svgMap);
	
	imgMapDepFr = Canvas2Image.convertToPNG(document.getElementById(canvasIdMap), (280*imgCacheMultiplicator), (300*imgCacheMultiplicator));

	$.ajax({
		url: Routing.generate('eveg_save_repartition_map', {mapType}, true),
		data: {
			'file': imgMapDepFr.src,
			'id': syntaxonId,
			'name': syntaxonName
		},
		error : function(){
			console.log('An error has occurred while saving the map cached image.');
		},
		success: function(data) {
			console.log(mapType+' cache image for id '+data+' was generated.');
		},
		type: 'POST'
	});
}

// check if files already exists
// if not, create it
$.ajax({
	url: Routing.generate('eveg_image_cache_map_exists', true),
	data: {
		'id': syntaxonId,
		'mapType': 'fr'
	},
	error: function(){
		createCacheMapPng('#mapDepFr', 'canvasMapDepFr', 1.5, 'fr');
		$('#download-mapdepfr-image').attr('href', '../../img/cache/maps/fr/{{ syntaxon.id }}-fr.png');
	},
	success: function(){
		$('#download-mapdepfr-image').attr('href', '../../img/cache/maps/fr/{{ syntaxon.id }}-fr.png');
	},
	type: 'POST'
});
$.ajax({
	url: Routing.generate('eveg_image_cache_map_exists', true),
	data: {
		'id': syntaxonId,
		'mapType': 'eu'
	},
	error: function(){
		createCacheMapPng('#mapEurope', 'canvasMapEu', 1.5, 'eu');
		$('#download-mapeurope-image').attr('href', '../../img/cache/maps/eu/{{ syntaxon.id }}-eu.png');
	},
	success: function(){
		$('#download-mapeurope-image').attr('href', '../../img/cache/maps/eu/{{ syntaxon.id }}-eu.png');
	},
	type: 'POST'
});