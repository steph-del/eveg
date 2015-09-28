$(function(){
	// Create the tree inside the <div id="tree"> element.
	$("#divTree").fancytree({
		source: {
			url: Routing.generate('api_get_syntaxons_tree')
		},
		lazyLoad: function(event, data) {
	    	var node = data.node;
	    	// Issue an ajax request to load child nodes
	    	data.result = {
	        	url: Routing.generate('api_get_syntaxon_node', { id: node.key}, true)
	      	}
	      	//alert(data);
	      	//alert(Routing.generate('api_get_syntaxon_node', { key: node.key}, true));
	    },
	    init: function(event, data) {
	    	expandNodes();
	    },
	    click: function(event, data) {
	    	var node = data.node;
	    	node.toggleExpanded();
	    },
	    dblclick: function(event, data) {
	    	var node = data.node;

	    	window.location.href = Routing.generate('eveg_show_one', { id: node.key}, true);
	    }

	});
});

function getActiveNodeKey(){
	var tree = $("#divTree").fancytree("getTree");
	activeNodeKey = tree.getActiveNode().key;
	alert(activeNodeKey);
}

function testExpandActiveNode(){
	var tree = $("#divTree").fancytree("getTree");
	activeNode = tree.getActiveNode();
	activeNode.setExpanded(true);
}

function testExpandNode(){
	var tree = $("#divTree").fancytree("getTree");

	tree.loadKeyPath("/6/7/8/9/12", function(node, status){
	  if(status === "loaded") {
	    //console.log("loaded intermiediate node " + node);
	  }
	  if(status === "ok") {
	    tree.activateKey("12");
	  }
	  console.debug("node [" + node + "]: " + status)
	});
}

function collapseTree(){
	$("#divTree").fancytree("getRootNode").visit(function(node){
		node.setExpanded(false);
		});

}
