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
$rollno = $_POST["rollno"];

$servername = "localhost:4000";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, branch FROM registration where rollno =". $rollno;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - branch: " . $row["branch"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

