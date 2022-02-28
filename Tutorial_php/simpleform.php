<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email_1 = $_POST['username'];
        $pass_word = $_POST['password'];
        $hospital = $_POST['selection_hospital'];




        //Connection with data base
        $server_name = "localhost";
        $username = "root";
        $server_password = "";
        $active_database = "login";

        $conn = mysqli_connect($server_name, $username, $server_password, $active_database);
        if (!$conn) {
            echo '

    <div class="danger">
            <h5><strong>Error!</strong> Sorry your data is not submited!</h5>
    </div>

    ';
            // die("not connected");
        } else {
            // echo"connected:";
            $sql = "INSERT INTO `peoples` (`Username`, `Password`, `hospital`) VALUES ('  $email_1', '     $pass_word', '    $hospital');";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "The data was inserted successfully!<br>";
            } else {
                echo "The data was not inserted successfully because of this error ---> " . mysqli_error($conn);
            }
        }
    }



    ?>
    <form action="/Tutorial_php/simpleform.php" method="POST">

        <div class="namearea">
            <label for="username">Username</label>
            <br>
            <input type="text" name="username">

        </div>

        <div class="passwordarea">
            <label for="password">Username</label>
            <br>
            <input type="password" name="password">

        </div>

        <select name="selection_hospital" class="selecting_hospital" required>
            <option selected hidden value="">Select Hospital</option>
            <option name="selection_hospital" value="PAF">PAF Hospital</option>
            <option name="selection_hospital" value="Shifa">Shifa Hosptial</option>
            <option name="selection_hospital" value="Foji">Foji Foundation</option>
            <option name="selection_hospital" value="Memorial">Memorial Hospital</option>
            <option name="selection_hospital" value="Jinnah">Jinnah Hospital</option>
            <option name="selection_hospital" value="Indus">Indus Hospital</option>
        </select>

        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">






    </form>
</body>

</html>