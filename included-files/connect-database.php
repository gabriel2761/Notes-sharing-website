<?php
include('Constant.php');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>