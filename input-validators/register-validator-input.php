<?php
    include('../included-files/connect-database.php');

    $post_username = 'username';
    $post_email = 'email';
    $required_message = 'Required';

   if (isset($_POST[$post_username])) {
        $username = mysqli_real_escape_string($connection, $_POST[$post_username]);
        checkUsername($connection, $username);
    }

    if (isset($_POST[$post_email])) {
        $email = mysqli_real_escape_string($connection, $_POST[$post_email]);
        checkEmail($connection, $email);
    }

    function checkUsername($connection, $username) {
        $student_table = STUDENT_TABLE_NAME;
        $student_username = STUDENT_USERNAME;

        $query  = " SELECT $student_username ";
        $query .= " FROM $student_table ";
        $query .= " WHERE $student_username = '$username';";

        $result = mysqli_query($connection, $query);
        $num_rows = mysqli_num_rows($result);

        if ($num_rows < 1) {
            echo 'Available';
        } else {
            echo 'Taken';
        }
    }

    function checkEmail($connection, $email) {

        $student_table = STUDENT_TABLE_NAME;
        $student_email = STUDENT_EMAIL;

        $query  = " SELECT $student_email ";
        $query .= " FROM $student_table ";
        $query .= " WHERE $student_email = '$email';";

        $result = mysqli_query($connection, $query);
        $num_rows = mysqli_num_rows($result);

        if ($num_rows < 1) {
            echo 'Available';
        } else {
            echo 'Taken';
        }
    }

    mysqli_close($connection);
?>