// Script to demonstrate using the links collection.
function processLinks()
{
	var linksList = ; // get the document's links
	var contents = "<ul>";

	// concatenate each link to contents
	for ( var i = 0; i < linksList.length; ++i )
	{
		var currentLink = linksList[ i ];
		contents += "<li><a href='"+ +"'>" +
		+ "</li>";
	} // end for

	contents += "</ul>";
	document.getElementById( "links" ).innerHTML = contents;
} // end function processLinks

window.addEventListener( "load", processLinks, false );