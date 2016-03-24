var ueFilter;
if(appSessionSF2UeFilter != '') {
	ueFilter = jQuery.parseJSON(appSessionSF2UeFilter);
} else {
	ueFilter = null;
}
for(cb in ueFilter) {
	$(".cbUeFilter[name="+cb+"]").prop('checked', true);
}