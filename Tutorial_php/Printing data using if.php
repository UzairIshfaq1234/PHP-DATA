<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .heading
    {
        background-color: red;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
        height: 30px;
        text-align: center;
        align-items: center;
        justify-items: center;
        

    }
    .heading2
    {
        background-color: greenyellow;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
        height: 30px;
        text-align: center;
        align-items: center;
        justify-items: center;
        

    }
</style>
<body>
    


<?php

$user_name = "uzair";
$pass_word = 1234;

if ($user_name == "uzair") {
    if ($pass_word == 1234) {
        echo "<h1 class='heading2'> Yeah! $user_name  you make it finally! using password $pass_word </h1>";
    } 
    else {

        echo "<h1 class='heading'>Incorrect Password!</h1>";
    }
} 

else {
    echo "<h1 class='heading'>Incorrect Username!</h1>";
}
?>
</body>
</html>
