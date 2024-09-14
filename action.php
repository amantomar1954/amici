<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$value1 = mysqli_real_escape_string($conn, $_POST['value1']); 
$value2 = mysqli_real_escape_string($conn, $_POST['value2']); 
$value3 = mysqli_real_escape_string($conn, $_POST['value3']); 
$value4 = mysqli_real_escape_string($conn, $_POST['value4']); 
$value5 = mysqli_real_escape_string($conn, $_POST['value5']); 


$sql = "INSERT INTO amici (Username, Email, Addr, Mobile,Des) VALUES ('$value1', '$value2', '$value3', '$value4','$value5')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
