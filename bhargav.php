<?php
$servername = "ourdb.cbvpejuaz9mq.us-east-2.rds.amazonaws.com";
$username = "bhargav";
$password = "Bhargav#123";
$dbname = "ourdb";
$id = $_POST["id"];
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$address = $_POST["address"];
$city = $_POST["city"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO persons VALUES ('$id','$lastname','$firstname','$address','$city')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
