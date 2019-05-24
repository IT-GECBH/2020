<html>
<head>
<meta charset = "utf-8">
<title>Search Results</title>
</head>
<body>
<?php

$rollno = $_POST["rollno"];

$servername = "localhost:4000";
$username = "root";
$password = "root";
$dbname = "test";

$query = "SELECT name, branch FROM registration where rollno =". $rollno;

$conn = mysqli_connect($servername, $username, $password);
// Check connection
if ( !mysqli_select_db( $conn, $dbname ) ) {
    die( "Could not open test database" );;
}
$result = mysqli_query( $conn, $query);
if (mysql_num_rows( $result ) == 0)
{
	die(" No data found");
}
while ($row = mysqli_fetch_row( $result ))
{
		echo "name: " . $row[0]. " - branch: " . $row[1]. "<br>";
}
?>


