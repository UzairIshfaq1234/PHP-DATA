<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email_1 = $_POST['username'];
    $pass_word = $_POST['password'];





    //Connection with data base
    $server_name = "localhost";
    $username = "root";
    $server_password = "";
    $active_database = "updatinglogin";

    $conn = mysqli_connect($server_name, $username, $server_password, $active_database);
    if (!$conn) {
        echo '

    <div class="danger">
            <h5><strong>Error!</strong> Sorry your data is not submited!</h5>
    </div>

    ';
        // die("not connected");
    } else {

        // #################INSERTING DATA#################
        // // echo"connected:";
        // $sql = "INSERT INTO `peoples` (`Name`, `Password`) VALUES ('$email_1', '$pass_word');";

        // $result = mysqli_query($conn, $sql);

        // if ($result) {
        //     echo "The data was inserted successfully!<br>";
        // } else {
        //     echo "The data was not inserted successfully because of this error ---> " . mysqli_error($conn);
        // }

        // ######################Displaying dtaa###################3
        // echo"connected:";
        // $sql = "SELECT * FROM `peoples`";

        // $result = mysqli_query($conn, $sql);
        // $gettingrows = mysqli_num_rows($result);
        // echo "$gettingrows Number of rows of data is in data base<br><br><br>";

        // if ($gettingrows > 0) {

        //     for ($i = 0; $i < $gettingrows; $i++) {
        //         $data = mysqli_fetch_assoc($result);
        //         echo "<br>";
        //         echo "Sno:".$data['sno']."UserName".$data['Name']."Password".$data['Password'];
        //         echo "<br>";



        //     }
        // }


        // ############################### Where Caluse ###############3
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

        // #######################  Updating data ########################33
    //     $sql = "UPDATE `peoples` SET `Password` = '12us52' WHERE `Name` = 'Muhammad Uzair';";
    //     $aff=mysqli_affected_rows($conn);
    //     echo "Effectde rows are: $aff<br>";
    //     $result = mysqli_query($conn, $sql);

    //     if ($result) {
    //         echo "The data was Updated successfully!<br>";
    //     } else {
    //         echo "The data was not Updated successfully because of this error ---> " . mysqli_error($conn);
    //     }
    // }
        #######################  deleting  data ########################33

        $sql = "DELETE FROM `peoples` WHERE `Name` = 'Muhammad Uzair' LIMIT 3";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "The data was deleted successfully!<br>";
        } else {
            echo "The data was not deleted successfully because of this error ---> " . mysqli_error($conn);
        }






    }
}

?>



<html>

<head>
    <title>updating record</title>
</head>
<style>
    .table1 {
        border: 2px solid black;

    }

    .table2 {
        padding-left: 200px;

    }

    .table3 {
        padding-left: 100px;


    }
</style>

<body>

    <form action="/Tutorial_php/updating record.php" method="POST">

        <div class="namearea">
            <label for="username">Username</label>
            <br>
            <input type="text" name="username">

        </div>

        <div class="passwordarea">
            <label for="password">Password</label>
            <br>
            <input type="password" name="password">

        </div>

        <input type="submit">
        <input type="reset">
    </form>

</body>
</html>