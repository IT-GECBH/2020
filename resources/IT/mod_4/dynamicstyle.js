// Fig. 12.16: dynamicstyle.js
// Script to demonstrate dynamic styles.
function start()
{
	var inputColor = prompt( "Enter a color name for the " +
	"background of this page", "" );
	document.body.setAttribute( "style", "background-color: " + inputColor );
} // end function start

window.addEventListener( "load", start, false );