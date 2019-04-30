// Fig 13.7: mouseoverout.js
// Events mouseover and mouseout.
image1 = new Image();
image1.src = "heading1.gif";
image2 = new Image();
image2.src = "heading2.gif";
function mouseOver( e )
{
	// swap the image when the mouse moves over it
	if ( e.target.getAttribute( "id" ) == "heading" )
	{
		e.target.setAttribute( "src", image2.getAttribute( "src" ) );
	} // end if
	// if the element is an li, assign its id to its color
	// to change the hex code's text to the corresponding color
	if ( e.target.tagName.toLowerCase() == "li" )
	{
		e.target.setAttribute( "style",
		"color: " + e.target.getAttribute( "id" ) );
	} // end if
} // end function mouseOver

function mouseOut( e )
{
	// put the original image back when the mouse moves away
	if ( e.target.getAttribute( "id" ) == "heading" )
	{
		e.target.setAttribute( "src", image1.getAttribute( "src" ) );
	} // end if

	// if the element is an li, assign its id to innerHTML
	// to display the color name
	if ( e.target.tagName.toLowerCase() == "li" )
	{
		e.target.innerHTML = e.target.getAttribute( "id" );
	} // end if
} // end function mouseOut
document.addEventListener( "mouseover", mouseOver, false );
document.addEventListener( "mouseout", mouseOut, false );