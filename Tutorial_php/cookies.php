<?php
echo "Welcome to the world of cookies<br>";

// Cookies | Sessions

// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time() + 86400, "/"); 
echo "The cookie is set<br>";
setcookie("category", "cats", time() + 86400, "/"); 
setcookie("category", "dogs", time() + 86400, "/"); 
setcookie("category", "rabbits", time() + 86400, "/"); 

// check for cookies
$cat = $_COOKIE['category'];
echo "Here is the list of all $cat";

?>