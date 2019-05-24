1 <!DOCTYPE html>
23
<!-- Fig. 19.8: compare.php -->
4 <!-- Using the string-comparison operators. -->
5 <html>
6 <head>
7 <meta charset = "utf-8">
8 <title>String Comparison</title>
9 <style type = "text/css">
10 p { margin: 0; }
11 </style>
12 </head>
13 <body>
14 <?php
15 // create array fruits
16 $fruits = array( "apple", "orange", "banana" );
17
18 // iterate through each array element
19 for ( $i = 0; $i < count( $fruits ); ++$i )
20 {
21 // call function strcmp to compare the array element
22 // to string "banana"
23 if(strcmp( $fruits[ $i ], "banana" ) < 0)
24 print( "<p>" . $fruits[ $i ] . " is less than banana " );
25 elseif ( strcmp( $fruits[ $i ], "banana" ) > 0 )
26 print( "<p>" . $fruits[ $i ] . " is greater than banana ");
27 else
28 print( "<p>" . $fruits[ $i ] . " is equal to banana " );
29
30 // use relational operators to compare each element
31 // to string "apple"
32 if ( $fruits[ $i ] < "apple" )
33 print( "and less than apple!</p>" );
34 elseif ( $fruits[ $i ] > "apple" )
35 print( "and greater than apple!</p>" );
36 elseif ( $fruits[ $i ] == "apple" )
37 print( "and equal to apple!</p>" );
38 } // end for
39 ?><!-- end PHP script -->
40 </body>
41 </html>