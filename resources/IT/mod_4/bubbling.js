// Fig. 13.12: bubbling.js
// Canceling event bubbling.
function documentClick()
{
	alert( "You clicked in the document." );
} // end function documentClick

function bubble(e)
{
	alert( "This will bubble." );
} // end function bubble

function noBubble(e)
{
	alert( "This will not bubble." );
	e.cancelBubble = true;
} // end function noBubble

function registerEvents()
{
	window.alert("hi");
	document.addEventListener("click",documentClick, false);
	document.getElementById("bubble").addEventListener("click", bubble, false);
	document.getElementById("noBubble").addEventListener("click", noBubble, false);
} // end function registerEvents
window.addEventListener("load",registerEvents,false);