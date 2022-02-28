<?php
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

?>