<?php include('/included-files/connect-database.php'); ?>

<?php
$username = $_POST["username"];
$password = $_POST["password"];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <?php include('/included-files/head-setup.php'); ?>
    </head>
    <body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="login-confirm-main">


        <?php

        $query = "SELECT username, password FROM student
                  WHERE username = '$username';";


        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        } else {

            $row = mysqli_fetch_assoc($result);
            if ($password == $row["password"]) {
                echo 'passwords match!';


                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
            } else {
                echo "passwords Don't match!";
            }

        }

        ?>

    </main>

    <?php include('/included-files/scripts.php'); ?>
    </body>
    </html>

<?php mysqli_close($connection) ?>