//script.js
c=new Array(5);
for ( var i = 0; i < c.length; ++i )
	{   c[i]=window.prompt("enter name" +i); }
document.write("<p>unsorted list</p>");
for ( var i = 0; i < c.length; ++i )
	{  document.write(c[i]+"<br>"); }
         document.write("<h1>sorted list</h1>");
c.sort();
for ( var i = 0; i < c.length; ++i )
	{	document.write(c[i]+"<br>"); }
document.write("<h1>reverse sorted list</h1>");
c.reverse();
for ( var i = 0; i < c.length; ++i ) 
	{  document.write(c[i]+"<br>");}
