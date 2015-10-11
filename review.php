<?php include('/included-files/connect-database.php'); ?>

<?php 
    $subject_number = $_POST[POST_NOTE_NUMBER];
    $title = $_POST[POST_NOTE_TITLE];
    $content = $_POST[POST_NOTE_CONTENT];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation</title>
    <?php include(HEADER_SETUP); ?>	
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main id = "note-confirm">

	    <div class="alert alert-success">
		<span class="glyphicon glyphicon-ok"></span>
			<strong> The note has been successfully submitted!</strong> 
		</div>
		
		<p><b>Title: </b><?php echo $title ?> </p>
        <p><b>Subject Number: </b><?php echo $subject_number; ?></p> 		
        
		<?php $current_date = date("Y-m-d H:i:s"); ?>
        <p><b>Time: </b> <?php echo $current_date ?> </p>
		
		<p><?php echo $content ?></p>		
       
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
        
		<form action = "index.php">
			<button type = "submit" class = "btn btn-danger btn-md">
				<span class = "glyphicon glyphicon-home"></span> Return to home
			</button>
	    </form>	
		
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>

<?php mysqli_close($connection) ?>