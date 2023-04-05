<?php

$username = $_POST["username"];
$email = $_POST["email"];
$psw = $_POST["password"];

$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "shem";

//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection
if ($conn-> connect_error) {
    die ("connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO bright
(username, email,) VALUES ('shemkoome', 'shemkoome@gmail.com')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql. "<br>"
    . $conn->error;
}

$conn->close();

?>
