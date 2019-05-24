1 <!DOCTYPE html>
23
<!-- Fig. 19.14: form.php -->
4 <!-- Process information sent from form.html. -->
5 <html>
6 <head>
7 <meta charset = "utf-8">
8 <title>Form Validation</title>
9 <style type = "text/css">
10 p { margin: 0px; }
11 .error { color: red }
12 p.head { font-weight: bold; margin-top: 10px; }
13 </style>
14 </head>
15 <body>
16 <?php
17 // determine whether phone number is valid and print
18 // an error message if not
19 if (!preg_match( "/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/",
20 $_POST["phone"]))
21 {
22 print( "<p class = 'error'>Invalid phone number</p>
23 <p>A valid phone number must be in the form
24 (555) 555-5555</p><p>Click the Back button,
25 enter a valid phone number and resubmit.</p>
26 <p>Thank You.</p></body></html>" );
27	die(); // terminate script execution
28 }
29 ?><!-- end PHP script -->
30 <p>Hi <?php print( $_POST["fname"] ); ?>. Thank you for
31 completing the survey. You have been added to the
32 <?php print( $_POST["book"] ); ?>mailing list.</p>
33 <p class = "head">The following information has been saved
34 in our database:</p>
35 <p>Name: <?php print( $_POST["fname"] );
36 print( $_POST["lname"] ); ?></p>
37 <p>Email: <?php print( "$email" ); ?></p>
38 <p>Phone: <?php print( "$phone" ); ?></p>
39 <p>OS: <?php print( $_POST["os"] ); ?></p>
40 <p class = "head">This is only a sample form.
41 You have not been added to a mailing list.</p>
42 </body>
43 </html>