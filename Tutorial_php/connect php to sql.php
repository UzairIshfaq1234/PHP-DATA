<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connecting mysql</title>
</head>
<style>
    .cointiner
    {
        background-color: greenyellow;
        color: black;
        height: 40px;
        display: flex;
        justify-content: center;        
        align-items: center;
        font-size: 20px;
        margin: 0px;
        
    }
    .heda
    {
        background-color: black;
        color: white;
        height: 80px;
        display: flex;
        justify-content: center;        
        align-items: center;
        font-size: 20px;
        margin: 0px;
        padding: 0px;
    }
    .cointiner2
    {
        background-color: red;
        color: black;
        height: 40px;
        display: flex;
        justify-content: center;        
        align-items: center;
        font-size: 20px;
        margin: 0px;
        
    }
</style>
<body>
<?php

echo"<h4 class='heda'>Ready to connect </h4><br>";

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
error_reporting(0);
if(!$conn)
{

    echo "
    <div class='cointiner2'>
    <h4 >NOT Connected!</h4
    </div>
    ";

}
else
{

    echo "
    <div class='cointiner'>
    <h4>Connected!</h4
    </div>
    ";

}

?>
</body>
</html>




