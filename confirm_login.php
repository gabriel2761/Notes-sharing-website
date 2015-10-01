<?php include('/included-files/connect-database.php'); ?>

<?php
$post_username = $_POST[POST_USERNAME];
$post_password = $_POST[POST_PASSWORD];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <?php include(HEADER_SETUP); ?>
    </head>
    <body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="login-confirm-main">


        <?php

        $username = STUDENT_USERNAME;
        $password = STUDENT_PASSWORD;

        $query  = " SELECT $username, $password ";
        $query .= " FROM student ";
        $query .= " WHERE $username = '$post_username';";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        } else {

            $row = mysqli_fetch_assoc($result);
            if ($post_password == $row[STUDENT_PASSWORD]) {
                echo 'passwords match!';


                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $post_username;
            } else {
                echo "passwords Don't match!";
            }

        }

        ?>

    </main>

    <?php include(SCRIPTS); ?>
    </body>
    </html>

<?php mysqli_close($connection) ?>