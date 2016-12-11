<!-- SEARCH ENGINE -->
/* jQuery UI Autocomplete Width Set to parent's element width
http://stackoverflow.com/questions/5643767/jquery-ui-autocomplete-width-not-set-correctly
*/
jQuery.ui.autocomplete.prototype._resizeMenu = function () {
	var ul = this.menu.element;
	ul.outerWidth(this.element.outerWidth());
}

/* Highlighting term(s) */
function monkeyPatchAutocomplete() {	
    // don't really need this, but in case I did, I could store it and chain
    //var oldFn = $.ui.autocomplete.prototype._renderItem
    $.ui.autocomplete.prototype._renderItem = function( ul, item) {
    	var res = this.term.split(" ");
    	res[0] = res[0].charAt(0).toUpperCase() + res[0].substring(1);//.toLowerCase();
    	for(var i= 0; i < res.length; i++)
		{

			item.label = item.label.replace(/<span class='highlightSearch'>/g, "#");
			item.label = item.label.replace(/<\/span>/g, "¬");

			//if( i >= 1 ){ res[i] = res[i].toLowerCase(); }
		    var re = new RegExp(res[i], "i"); // var re = new RegExp("^" + this.term);
		    
		    var posStrLower = -1;
		    posStrLower = item.label.search(res[i].charAt(0).toLowerCase() + res[i].substring(1));

		    var posStrUpper = -1;
		    posStrUpper = item.label.search(res[i].charAt(0).toUpperCase() + res[i].substring(1));

		    if(posStrLower >= 0) {
		    	var t = item.label.replace(re,"#" + res[i].charAt(0).toLowerCase() + res[i].substring(1) + "¬");
		    } else if(posStrUpper >= 0) {
		    	var t = item.label.replace(re,"#" + res[i].charAt(0).toUpperCase() + res[i].substring(1) + "¬");
		    }

        	t = t.replace(/#/g, "<span class='highlightSearch'>");
			t = t.replace(/¬/g, "</span>");

        	item.label = t;
		}
		
		//item.label = output;
		//console.log(item.label + ' --- ' + item.level);
		//console.log(res);
        if(/syn/.test(item.level)){
        	return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append( "<synonymeSearch><a>" + t + "</a></synonymeSearch>" )
            .appendTo( ul );
        } else {
        	return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append( "<validSearch><a>" + t + "</a></validSearch>" )
            .appendTo( ul );
        }
    };
}