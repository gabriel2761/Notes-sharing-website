<?php
    include('../included-files/connect-database.php');
    // this method prevents sql injection security risks
    $username = mysqli_real_escape_string($connection, $_POST['username']);

    $query = "SELECT * FROM student WHERE " . STUDENT_USERNAME."='$username';";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);

    if ($row < 1) {
        echo 'available';
    } else {
        echo 'taken';
    }

?>