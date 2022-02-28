<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "uzair4";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$username_name="uzairishfaq1234@gmail.com";
$user_rollno=031;
$user_program="khan1232";

// Create a table in the db
// $sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('Muhammad Uzair', '030', 'BSCS')"; 
// $sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('$username_name', '$user_rollno', '$user_program')"; 
$sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('$username_name ', '$user_rollno', '$user_program');"; 

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The data was inserted successfully!<br>";
}
else{
    echo "The data was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
  
?>