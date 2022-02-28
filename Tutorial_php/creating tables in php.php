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

// Create a table in the db
$sql = "CREATE TABLE `student` ( `sno` INT(11) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(20) NOT NULL ,  `Roll` INT(3) NOT NULL ,  `Program` VARCHAR(6) NOT NULL ,    PRIMARY KEY  (`sno`))"; 

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
