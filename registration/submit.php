<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dinesh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$name = $_POST['name'];
$registerNumber = $_POST['registerNumber'];
$courseName = $_POST['cname']; // Change to match your input field name
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$idCard = $_FILES['idCard']['name']; // Assuming you're storing only the file name
$grievance = $_POST['grievance'];

// Upload ID Card
$targetDir = "uploads/"; // Directory where uploaded files will be stored
$targetFile = $targetDir . basename($_FILES["idCard"]["name"]);
move_uploaded_file($_FILES["idCard"]["tmp_name"], $targetFile);

// Insert data into database
$sql = "INSERT INTO StudentInformation (name, registerNumber, courseName, mobile, email, address, idCard, grievance) VALUES ('$name', '$registerNumber', '$courseName', '$mobile', '$email', '$address', '$idCard', '$grievance')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
