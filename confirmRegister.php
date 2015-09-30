<?php include('/included-files/connect-database.php'); ?>

<?php
$first_name = $_POST[STUDENT_FIRST_NAME];
$last_name = $_POST[STUDENT_LAST_NAME];
$username = $_POST[STUDENT_USERNAME];
$password = $_POST[STUDENT_PASSWORD];
$email = $_POST[STUDENT_EMAIL];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <?php include('/included-files/head-setup.php'); ?>
    </head>
    <body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="register-confirm-main">


        <?php

        $query = "INSERT INTO student (first_name, last_name, username, password, email)
                  VALUES ('$first_name','$last_name', '$username', '$password','$email');";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        } else {
            echo "success!";
        }

        ?>

    </main>

    <?php include('/included-files/scripts.php'); ?>
    </body>
    </html>

<?php mysqli_close($connection) ?>