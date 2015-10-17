<?php
    include('../included-files/connect-database.php');

    $subject_table = SUBJECT_TABLE_NAME;
    $subject_no = SUBJECT_NUMBER;

    $query  = " SELECT $subject_no ";
    $query .= " FROM $subject_table ;";

    $result = mysqli_query($connection, $query);

    $ar = [];
    $index = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $ar[$index++] = $row[$subject_no];
    }

    $ar[0] = 'apples';
    $ar[1] = 'this is for testing';

    echo json_encode($ar);
?>