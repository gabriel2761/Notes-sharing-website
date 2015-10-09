<?php include('/included-files/connect-database.php'); ?>

<?php 
    $subject_number = $_POST[POST_NOTE_NUMBER];
    $title = $_POST[POST_NOTE_TITLE];
    $content = $_POST[POST_NOTE_CONTENT];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="row review-sheet">
        <h3>Subject Number: <?php echo $subject_number; ?></h3>
        <h3>Title: <?php echo $title ?></h3>
        <p><?php echo $content ?></p>
        <?php $current_date = date("Y-m-d H:i:s"); ?>
        <p><?php echo $current_date ?></p>

        <?php

        // declare column names
        $note_table = NOTE_TABLE_NAME;
        $note_title = NOTE_TITLE;
        $note_date = NOTE_DATE;
        $note_content = NOTE_CONTENT;
        $student_id = STUDENT_ID;
        $subject_id = SUBJECT_ID;


        $session_student_id = $_SESSION[SESSION_STUDENT_ID];


        $query = "INSERT INTO $note_table ($note_title, $note_date, $note_content, $student_id, $subject_id)
                  VALUES ('$title', '$current_date', '$content', $session_student_id, 111);";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        }

        ?>

    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>

<?php mysqli_close($connection) ?>