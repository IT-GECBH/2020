<body>
14 <?php
15 $search = "Now is the time";
16 print( "<p>Test string is: '$search'</p>" );
17
18 // call preg_match to search for pattern 'Now' in variable search
19 if(preg_match( "/Now/", $search ))
20 print( "<p>'Now' was found.</p>" );
21
22 // search for pattern 'Now' in the beginning of the string
23 if(preg_match( "/^Now/", $search ))
24 print( "<p>'Now' found at beginning of the line.</p>" );
25
26 // search for pattern 'Now' at the end of the string
27 if(!preg_match( "/Now$/", $search ))
28 print( "<p>'Now' was not found at the end of the line.</p>" );
29
30 // search for any word ending in 'ow'
31 if (preg_match( "/\b([a-zA-Z]*ow)\b/i", $search, $match ))
32 print( "<p>Word found ending in 'ow': " .
33 $match[ 1 ]. "</p>" );
34
35 // search for any words beginning with 't'
36 print( "<p>Words beginning with 't' found: " );
37
38 while (preg_match( "/\b(t[[:alpha:]]+)\b/", $search, $match ))
39 {
40 print( $match[ 1 ]. " " );
41
42 // remove the first occurrence of a word beginning
43 // with 't' to find other instances in the string
44 $search = preg_replace("/" . $match[ 1 ] . "/", "", $search);
45 } // end while
46
47 print( "</p>" );
48 ?><!-- end PHP script -->
49 </body>