<?php include('/included-files/connect-database.php'); ?>

<?php
$first_name = $_POST[POST_FIRST_NAME];
$last_name = $_POST[POST_LAST_NAME];
$username = $_POST[POST_USERNAME];
$password = $_POST[POST_PASSWORD];
$email = $_POST[POST_EMAIL];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <?php include(HEADER_SETUP); ?>
    </head>
    <body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="register-confirm-main">


        <?php
        // declare table column names
        $student_table = STUDENT_TABLE_NAME;
        $student_username = STUDENT_USERNAME;
        $student_firstname = STUDENT_FIRST_NAME;
        $student_lastname = STUDENT_LAST_NAME;
        $student_password = STUDENT_PASSWORD;
        $student_email = STUDENT_EMAIL;

        $query  = "INSERT INTO $student_table ($student_username, $student_firstname,$student_lastname,$student_password, $student_email)";
        $query .= "VALUES ('$username','$first_name','$last_name','$password','$email');";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        } else {
            echo "success!";
        }

        ?>

    </main>

    <?php include(SCRIPTS); ?>
    </body>
    </html>

<?php mysqli_close($connection) ?>