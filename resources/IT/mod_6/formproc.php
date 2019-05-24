1 <!DOCTYPE html>
23
<!-- Fig. 19.13: form.html -->
4 <!-- HTML form for gathering user input. -->
5 <html>
6 <head>
7 <meta charset = "utf-8">
8 <title>Sample Form</title>
9 <style type = "text/css">
10 label { width: 5em; float: left; }
11 </style>
12 </head>
13 <body>
14 <h1>Registration Form</h1>
15 <p>Please fill in all fields and click Register.</p>
16
17 <!-- post form data to form.php -->
18 <form method = "post" action = "form.php">
19 <h2>User Information</h2>
20
21 <!-- create four text boxes for user input -->
22 <div><label>First name:</label>
23 <input type = "text" name = "fname"></div>
24 <div><label>Last name:</label>
25 <input type = "text" name = "lname"></div>
26 <div><label>Email:</label>
27 <input type = "text" name = "email"></div>
28 <div><label>Phone:</label>
29 <input type = "text" name = "phone"
30 placeholder = "(555) 555-5555"></div>
31 </div>
32
33 <h2>Publications</h2>
34 <p>Which book would you like information about?</p>
35
36 <!-- create drop-down list containing book names -->
37 <select name = "book">
38 <option>Internet and WWW How to Program</option>
39 <option>C++ How to Program</option>
40 <option>Java How to Program</option>
41 <option>Visual Basic How to Program</option>
42 </select>
43
44 <h2>Operating System</h2>
45 <p>Which operating system do you use?</p>
46
47 <!-- create five radio buttons -->
48 <p><input type = "radio" name = "os" value = "Windows"
49 checked>Windows
50 <input type = "radio" name = "os" value = "Mac OS X">Mac OS X
51 <input type = "radio" name = "os" value = "Linux">Linux
52 <input type = "radio" name = "os" value = "Other">Other</p>
53
54 <!-- create a submit button -->
55 <p><input type = "submit" name = "submit" value = "Register"></p>
56 </form>
57 </body>
58 </html>