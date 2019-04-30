// Fig. 13.9: focusblur.js
// Demonstrating the focus and blur events.
var helpArray = [ "Enter your name in this input box.",
"Enter your e-mail address in the format user@domain.",
"Check this box if you liked our site.",
"Enter any comments here that you'd like us to read.",
"This button submits the form to the server-side script.",
"This button clears the form.", "" ];
var helpText;

// initialize helpTextDiv and register event handlers
function init()
{
	helpText = document.getElementById("helpText");
	// register listeners
	registerListeners( document.getElementById( "name" ), 0 );
	registerListeners( document.getElementById( "email" ), 1 );
	registerListeners( document.getElementById( "like" ), 2 );
	registerListeners( document.getElementById( "comments" ), 3 );
	registerListeners( document.getElementById( "submit" ), 4 );
	registerListeners( document.getElementById( "reset" ), 5 );
} // end function init

// utility function to help register events
function registerListeners( object, messageNumber )
{
	object.addEventListener( "focus",
	function() { helpText.innerHTML = helpArray[messageNumber]; },
	false );
	object.addEventListener( "blur",
	function() { helpText.innerHTML = helpArray[6]; }, false );
}
window.addEventListener( "load", init, false );