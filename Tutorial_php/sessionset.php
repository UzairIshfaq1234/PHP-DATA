<?php
// What is a session?
// Used to manage information across difference pages
//################# SETTING SESSION ###################33
// Verify the user login info
session_start();
$_SESSION['username'] = "Uzair";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";
//################# START AND GET DATA SESSION ###################33
// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite category is ". $_SESSION['favCat'];
    echo "<br>";
}
else{
    echo "Please login to continue";
}
//################# END SESSION ###################33
// DESTORY SESSION
session_start();
session_unset();
session_destroy();
echo "<br> You have been logged out";

?>