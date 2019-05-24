<html>
<head>
<meta charset = "utf-8">
<title>Search Results</title>
<style type = "text/css">
body { font-family: sans-serif;
background-color: lightyellow; }
table { background-color: lightblue;
border-collapse: collapse;
border: 1px solid gray; }
td { padding: 5px; }
tr:nth-child(odd) {
background-color: white; }
</style>
</head>
<body>
<?php
$name = $_POST["name"];
$rollno = $_POST["rollno"];
$branch = $_POST["branch"];

$servername = "localhost:4000";
$username = "root";
$password = "root";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password);

if ( !mysqli_select_db( $conn, $dbname ) ) {
    die( "Could not open test database" );;
}

// build SELECT query
$sql = "INSERT INTO REGISTRATION (name, rollno, branch) VALUES('" . $name . "',".$rollno.",'".$branch."')";

if (mysqli_query( $conn, $sql)== TRUE)
{
	echo "new record created successfully";
}
else
{
	echo "Error".$sql."<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?><!-- end PHP script -->

</body>
</html>
