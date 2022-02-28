<?php

echo"<h4 class='heda'>Ready to connect </h4><br>";

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
$sql="CREATE DATABASE uzair4";
$creating_result=mysqli_query($conn,$sql);

if($creating_result)

{
    echo "Database  created! $sql <br>";
 
}
else{


    echo "Database already created! <br>";
}
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