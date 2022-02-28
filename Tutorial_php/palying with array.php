<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Data</title>
</head>
<body>
<?php

$t_data=array(array("Muhammad Uzair Ishfaq","030","Bscs"),array("Muhammad Uzair Ishfaq","030","Bscs"),array("Muhammad Uzair Ishfaq","030","Bscs"));
$d = date("dS F Y");
// $d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";
function displaying($student_data)
{

    echo "<h1>Student Data: </h1>";
    for ($i=0; $i <count($student_data) ; $i++) { 
        for ($j=0; $j <count($student_data) ; $j++) { 
            echo $student_data[$i][$j];
            echo "<br>";
           
        }
        echo "<br>";
    } 
}

displaying($t_data);
?>
</body>
</html>