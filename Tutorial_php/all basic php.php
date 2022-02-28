<?php


//###############printing statment#######################3
// echo"Finallay i am staring PHP";
// echo"Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos perferendis deleniti sit sint, quo maxime id voluptates, ab inventore laborum accusantium nisi libero ipsum non ipsam laudantium rerum asperiores illum soluta.";
// echo"By uzair";


//#####################VAIRIABLES#######################
$uzair = "MUHAMMAD UZAIR ISHFAQ";
// $income=10002000;

echo "Name is : $uzair  <br>";

// echo"Income is : $income";

// $name = "Harry";
// $income = 200;
#################################### STRING FUNCTION ################################
############################################################################################################
/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// String - sequence of characters
// $name = "Harry";
// $friend = 'Rohan';
// echo "$name ka friend is $friend";


// Integer - Non decimal number
// $income = 455;
// $debts = -655;
// echo "<br>";
// echo $income;
// echo "<br>";
// echo $debts;
// echo "<br>";

// Float - Decimal point number
// $income = 344.5;
// $debts = -45.5;
// echo $income;
// echo "<br>";
// echo $debts;
// echo "<br>";

// Boolean - Can be either true or false
// $x = true;
// $is_friend = false;
// echo var_dump($x);
// echo "<br>";
// echo var_dump($is_friend);
// echo "<br>";

// Object - Instances of classes
// Employee is a class ---> harry can be one object

// Array - Used to store multiple values in a single variable
// $friends = array("rohan", "shubham", "skillf", "Larry");
// $languages=array("C++","java",23,"jquery");
// echo var_dump($languages);
// echo var_dump($friends);
// echo "<br>";
// echo $friends[0];
// echo "<br>";
// echo $friends[1];
// echo "<br>";
// echo $friends[2];
// echo "<br>";
// echo $friends[3];
// echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

// NULL
// $name = NULL;
// echo var_dump($name);
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
################################### OPERATOR IN PHP ###############################
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 40;
$b = 82;

// 1. Arithmetic Operators
// echo "For a + b, the result is ".$a + $b. "<br>";
// echo "For a - b, the result is ". ($a - $b) . "<br>";
// echo "For a * b, the result is ". ($a * $b) . "<br>";
// echo "For a / b, the result is ". ($a / $b) . "<br>";
// echo "For a % b, the result is ". ($a % $b) . "<br>";
// echo "For a ** b, the result is ". ($a ** $b) . "<br>";

// 2. Assignment Operators
$x = $a;
// echo "For x, the value is ". $x . "<br>";

// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x > y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

// echo "For x <> y, the result is "; 
// echo var_dump($x <> $y);
// echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;

// echo "For m and n, the result is "; 
// echo var_dump($m and $n);
// echo "<br>";

// echo "For m && n, the result is "; 
// echo var_dump($m && $n);
// echo "<br>";

// echo "For m or n, the result is "; 
// echo var_dump($m or $n);
// echo "<br>";

// echo "For m || n, the result is "; 
// echo var_dump($m || $n);
// echo "<br>";

// echo "For !m , the result is "; 
// echo var_dump(!$m);
// echo "<br>";

// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
#####################  IF CONDITIONS #########################################33
// $a = 665;
// $b = 9;

// if($a > 78){
//     echo "a is greater than 78";
// }
// else{
//     echo "a is not greater than 78";
// }

$age = 24;

// If else ladder
// if ($age>18){
//     echo "You can drink water with chai and alcohol";
// }
// elseif($age>13){
//     echo "You can drink chai only with water. No alcohol for you";
// }
// else{
//     echo "You can drink water only";
// }


// if ($age>18){
//     echo "You can drink water with chai and alcohol<br>";
// }

// if($age>13){
//     echo "You can drink chai only with water. No alcohol for you<br>";
// }
// else{
//     echo "You can drink water only<br>";
// }


// Quick quiz - 
// 1. Create an if else ladder using more than one elseif 
// 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

// echo "Done";

////////////////////////////////////////////////////
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### S W I T C H s ########################################
// $age = 56;
// $intiger=12;
// switch($intiger){
//     case 12:
//         echo "You are 12 years old <br>";
//         break;

//     case 45:
//         echo "You are 45 years old <br>";
//         break;

//     case 56:
//         echo "You are 56 years old boy <br>";
//         break;

//     default:
//         echo "Your age is weird <br>";
//         break;

//     }
////////////////////////////////////////////////////
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### W H I L E   LOOP ########################
// $i = 0; 
// while($i<5){
//     echo "The value of i is ";
//     echo $i+1;
//     echo "<br>";
//     $i+=1; 
// } 

// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### FOR----   LOOP ########################
// for ($index=1; $index < 6; $index++) { 
//     // for(initialization;condition; updation)
//     echo "The number is $index <br>";
// }


// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### Do while----   LOOP ########################
// $i = 0;
// do{
//     echo "$i <br>";
//     $i++;
// }while($i<5);
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### FOR EACH LOOP----   LOOP ########################
// $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
// foreach ($arr as  $value) {
//     echo "$value <br>";
// }
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### F U N C T I O N  ########################

// function processMarks($marksArr){
//     $sum = 0;
//     foreach ($marksArr as $value) {
//         $sum += $value;
//     }
//     return $sum;
// }

// function avgMarks($marksArr){
//     $sum = 0;
//     $i = 1;
//     foreach ($marksArr as $value) {
//         $sum += $value;
//         $i++;
//     }
//     return $sum/$i;
// }

// $rohanDas = [34, 98, 45, 12, 98, 93];
// // $sumMarks = processMarks($rohanDas);
// $sumMarks = avgMarks($rohanDas);

// $harry = [99, 98, 93, 94, 17, 100];
// // $sumMarksHarry = processMarks($harry);
// $sumMarksHarry = avgMarks($harry);
// echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
// echo "Total marks scored by Harry out of 600 is $sumMarksHarry";

// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### D A T E S  ########################
// // $d = date("dS F Y");
// $d = date("dS F Y, g:i A");
// echo "Todays date is $d <br>";
// // Quick Quiz - Post at least 3 examples of dates in php in the comments below

// // Prints something like: Monday 8th of August 2005 03:12:46 PM
// echo date('l jS \of F Y h:i:s A');

// $year = date("Y");
// echo "<br>";
// echo "Copyright $year | All rights reserved <br>";
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
#########################################  A S S O C I A T I V E --A R R A Y  ########################
// Associative arrays
// $favCol = array('shubham' => 'red','rohan'=> 'green',
//                     'harry'=> 'brown', 8=>'this' );

//                     // echo $favCol['harry'];
//                     // echo "<br>";
//                     // echo $favCol['rohan'];
//                     // echo "<br>";
//                     // echo $favCol[8]; 
// foreach ($favCol as $key => $value) {
//     echo "<br>Favorite color of $key is $value";
// }
// ####################################################################################################3
// ####################################################################################################3
// ####################################################################################################3
######################################### MULTI-DIMENTION --A R R A Y  ########################
// Creating a 2 dimensional array
// $multiDim = array(
//     array(2, 5, 7, 8),
//     array(1, 2, 3, 1),
//     array(4, 5, 0, 1)
// );
// for ($i = 0; $i < count($multiDim); $i++) {
//     for ($j = 0; $j < count($multiDim[$i]); $j++) {
//         echo $multiDim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }

// ####################################################################################################3
// ####################################################################################################3
######################################### local and global vriable   ########################
// $a = 98; // Global Variable
// $b = 9;

// function printValue(){
//     // $a = 97; // Local Variable
//     global $a, $b; // Give me the access to this global variable
//     $a = 100;
//     $b = 1000;
//     echo "<br>The value of your variable a is $a and b is $b";
// }

// echo $a; 
// printValue();
// echo "<br>The value of your variable a is $a and b is $b";
// echo "<br>";
// // echo var_dump($GLOBALS); 
// echo var_dump($GLOBALS["a"]);
// echo var_dump($GLOBALS["b"]);
// ####################################################################################################3
// ####################################################################################################3
######################################### SERVER GET AND POST REQUESYT  ########################
// <?php
// if($_SERVER['REQUEST_METHOD']=='POST')
// {

//   $email_1=$_POST['email'];
//   $pass_word=$_POST['pass'];

//   if($email_1=="uzairishfaq1234@gmail.com")
//   {
//     if($pass_word==1234)
//     {
//             echo '<div class="alert alert-success alert-dismissible fade show myown" role="alert">
//         <strong>Success!</strong> Your email ' . $email_1.' and password '. $pass_word.' has been submitted successfully!
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//           <span aria-hidden="true">×</span>
//         </button>
//       </div>';
//     }
//     else{

//       echo '<div class="alert alert-success alert-dismissible fade show myown2" role="alert">
//       <strong>Alert!</strong> Incorrect Password!
//       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">×</span>
//       </button>
//     </div>';
//     }
//   }
//   else
//   {
//     echo '<div class="alert alert-success alert-dismissible fade show myown2" role="alert">
//     <strong>Alert!</strong> Incorrect UserName!
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">×</span>
//     </button>
//   </div>';
//   }

// }


// 
// ####################################################################################################3
// ####################################################################################################3
######################################### CONNECTING MYSQL TO PHP  ########################
// echo"Ready to connect <br>";

// $servername="localhost";
// $username="root";
// $password="";

// $conn=mysqli_connect($servername,$username,$password);

// if(!$conn)
// {

//     die("NOT Connected!");

// }
// else
// {

//     die("Connected!");

// }

// ####################################################################################################3
// ####################################################################################################3
######################################### CREATING DATABASE WITH PHP  ########################
// $servername="localhost";
// $username="root";
// $password="";

// $conn=mysqli_connect($servername,$username,$password);
// $sql="CREATE DATABASE uzair4";
// $creating_result=mysqli_query($conn,$sql);

// if($creating_result)

// {
//     echo "Database  created! $sql <br>";

// }
// else{


//     echo "Database already created! <br>";
// }
// ####################################################################################################3
// ####################################################################################################3
######################################### CREATING TABLE USING TO PHP  ########################
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "uzair4";

// // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }

// // Create a table in the db
// $sql = "CREATE TABLE `student` ( `sno` INT(11) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(20) NOT NULL ,  `Roll` INT(3) NOT NULL ,  `Program` VARCHAR(6) NOT NULL ,    PRIMARY KEY  (`sno`))"; 

// $result = mysqli_query($conn, $sql);

// // Check for the table creation success
// if($result){
//     echo "The table was created successfully!<br>";
// }
// else{
//     echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// }
//
// ####################################################################################################3
// ####################################################################################################3
######################################### INSERTING DATA USING TO PHP  ########################
// // Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "uzair4";

// // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }

// $username_name="uzairishfaq1234@gmail.com";
// $user_rollno=031;
// $user_program="khan1232";

// // Create a table in the db
// // $sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('Muhammad Uzair', '030', 'BSCS')"; 
// // $sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('$username_name', '$user_rollno', '$user_program')"; 
// $sql = "INSERT INTO `student` (`Name`, `Roll`, `Program`) VALUES ('$username_name ', '$user_rollno', '$user_program');"; 

// $result = mysqli_query($conn, $sql);

// // Check for the table creation success
// if($result){
//     echo "The data was inserted successfully!<br>";
// }
// else{
//     echo "The data was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }

// ####################################################################################################3
// ####################################################################################################3
######################################### error not shown USING TO PHP  ########################
// error_reporting(0);
// ####################################################################################################3
// ####################################################################################################3
######################################### Displaying using php  ########################
// $sql = "SELECT * FROM `peoples`";

// $result = mysqli_query($conn, $sql);
// $gettingrows = mysqli_num_rows($result);
// echo "$gettingrows Number of rows of data is in data base<br><br><br>";

// if ($gettingrows > 0) {
//     for ($i = 0; $i < $gettingrows; $i++) {
//         $data = mysqli_fetch_assoc($result);
//         // echo var_dump($data);
//         $snow = $data['sno'];
//         $nameo = $data['Name'];
//         $passwodo = $data['Password'];


//         echo "Sno:".$data['sno']."UserName".$data['Name']."Password".$data['Password'];

// }
// ####################################################################################################3
// ####################################################################################################3
############################### Where Caluse ###############3
// $sql = "SELECT * FROM `peoples` WHERE `Name`='Muhammad Uzair'";

// $result = mysqli_query($conn, $sql);
// $gettingrows = mysqli_num_rows($result);
// echo "$gettingrows Number of rows of data is in data base<br><br><br>";

// if ($gettingrows > 0) {
//     $j=1;

//     for ($i =0; $i < $gettingrows; $i++) {
//         $data = mysqli_fetch_assoc($result);
//         echo "<br>";
//         echo "Sno:".$j . "UserName" . $data['Name'] . "Password" . $data['Password'];
//         echo "<br>";
//         $j++;
//     }
// }
// ####################################################################################################3
// ####################################################################################################3        
#######################  Updating data ########################33
// $sql = "UPDATE `peoples` SET `Password` = '1232' WHERE `Name2` = 'Muhammad Uzair';";

// $result = mysqli_query($conn, $sql);

// if ($result) {
//     echo "The data was Updated successfully!<br>";
// } else {
//     echo "The data was not Updated successfully because of this error ---> " . mysqli_error($conn);
// }
// ####################################################################################################3
// ####################################################################################################3   
// #######################  deleting  data ########################33

// $sql = "DELETE FROM `peoples` WHERE `Name` = 'Muhammad Uzair'";
// ####################### limited data  deleting  data ########################33

// $sql = "DELETE FROM `peoples` WHERE `Name` = 'Muhammad Uzair' LIMIT 3"; 

// $result = mysqli_query($conn, $sql);

// if ($result) {
//     echo "The data was deleted successfully!<br>";
// } else {
//     echo "The data was not deleted successfully because of this error ---> " . mysqli_error($conn);
// }
// ####################################################################################################3
// ####################################################################################################3   
// ####################### Including data ########################33
// include '_dbconnect1.php'; it will continue showing code
// require '_dbconnect.php'; it will not show any code if file is not entred ok name



// ####################################################################################################3
// ####################################################################################################3   
// ####################### FILE HANDLING ########################33
// ####################################################################################################3   
// ####################################################################################################3   
// Read whole File
// $filh=readfile("basic.html");

// ####################################################################################################3   
// ####################################################################################################3   
// Reading file by reading tag
// $fptr = fopen("filo.txt", "r");
// // echo var_dump($fptr);
// if(!$fptr){
//     die("Unable to open this file.Please enter a valid filename");
// }
// $content = fread($fptr, filesize("filo.txt"));
// fclose($fptr);
// echo $content;


// ####################################################################################################3   
// ####################################################################################################3   
// Reading a file line by line
$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr); 
// echo var_dump(fgets($fptr));

/*
// Reading a file line by line
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/

// echo fgetc($fptr); 
/*
// Reading a file character by character
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
*/
// Write a program which reads the content of a file until . has been encountered
// while($a = fgetc($fptr)){
//     echo $a;
//     if($a == "."){
//         break;
//     }
// }
// fclose($fptr);

// ####################################################################################################3
// ####################################################################################################3   
// ####################### entering dats in FILE HANDLING ########################33
// Writing to a file in php
// echo "Welcome to write files in php";
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
// fwrite($fptr, "This is another content\n"); 
// fwrite($fptr, "This is another content3"); 
// fclose($fptr);


// Appending to a file in php
// $fptr = fopen("myfile2.txt", "a");
// fwrite($fptr, "This is being appended to the file\n"); 
// fclose($fptr);
// ####################################################################################################3
// ####################################################################################################3   
// ####################### COOKIES  ########################33
// echo "Welcome to the world of cookies<br>";

// Cookies | Sessions

// Syntax to set a cookie
// echo time();
// setcookie("category", "Books", time() + 86400, "/"); 
// echo "The cookie is set<br>";
// setcookie("category", "cats", time() + 86400, "/"); 
// setcookie("category", "dogs", time() + 86400, "/"); 
// setcookie("category", "rabbits", time() + 86400, "/"); 

// check for cookies
// $cat = $_COOKIE['category'];
// echo "Here is the list of all $cat";
// ####################################################################################################3
// ####################################################################################################3   
// ####################### SESSIONS  ########################33
// What is a session?
// Used to manage information across difference pages
//################# SETTING SESSION ###################33
// Verify the user login info
// session_start();
// $_SESSION['username'] = "Uzair";
// $_SESSION['favCat'] = "Books";
// echo "We have saved your session";
//################# START AND GET DATA SESSION ###################33
// Start the session and get the data
// session_start();
// if(isset($_SESSION['username'])){
//     echo "Welcome ". $_SESSION['username'];
//     echo "<br> Your favorite category is ". $_SESSION['favCat'];
//     echo "<br>";
// }
// else{
//     echo "Please login to continue";
// }
//################# END SESSION ###################33
// DESTORY SESSION
// session_start();
// session_unset();
// session_destroy();
// echo "<br> You have been logged out";

?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo "PHP IS FUN" ?></title>
</head>

<body>
    <!-- <h3><?php echo "PHP IS FUN" ?></h3>  priniting php statment in html tags -->


</body>

</html>