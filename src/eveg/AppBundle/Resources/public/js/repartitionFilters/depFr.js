var depFrFilter;
if(appSessionSF2DepFrFilter != '') {
	depFrFilter = jQuery.parseJSON(appSessionSF2DepFrFilter);
} else {
	depFrFilter = null;
}
for(cb in depFrFilter) {
	$(".cbFrFilter[name="+cb+"]").prop('checked', true);
}