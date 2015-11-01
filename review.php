<?php include('/included-files/connect-database.php'); ?>

<?php 
    $post_subject_number = $_POST[POST_NOTE_NUMBER];
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
        <p><b>Subject Number: </b><?php echo $post_subject_number; ?></p>
        
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
        $subject_number = SUBJECT_NUMBER;
        $subject_table = SUBJECT_TABLE_NAME;


        $fileName = '';
        $fileType = 0;
        $fileSize = 0;
        $filePath = "";

        $session_student_id = $_SESSION[SESSION_STUDENT_ID];

        if ($_FILES['fileToUpload']['size'] > 0) {

            $target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileExtension = pathinfo($target_file, PATHINFO_EXTENSION);

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $_FILES['fileToUpload']['tmp_name']);
            $uploadOk = 0;
            switch ($mime) {
                case 'application/pdf':
                case 'application/msword': //.doc
                case 'application/vnd.ms-powerpoint': //.ppt
                case 'application/vnd.ms-excel': //.xls
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': //.docx
                case 'application/vnd.openxmlformats-officedocument.presentationml.presentation': //.pptx
                case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': //xlsx
                    $uploadOk = 1;
                    break;
                case 'inode/x-empty':
                    echo "The file is empty<br>";
                    $uploadOk = 0;
                    break;
                default:
                    echo "The file is not a valid file type <br>";
                    echo "Only .pdf, .doc, .docx, .ppt, .pptx, .xls, .xlsx files are accepted. <br>";
            }

            while ($uploadOk == 1) {
                $filePath = "uploads/" . uniqid() . '.' . $fileExtension;
                if (!file_exists($filePath))
                    break;
            }


            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filePath)) {
                    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $fileName = $_FILES['fileToUpload']['name'];
            $fileType = $_FILES['fileToUpload']['type'];
            $fileSize = $_FILES['fileToUpload']['size'];

        }

        $subno_query =  " SELECT $subject_id ";
        $subno_query .= " FROM $subject_table ";
        $subno_query .= " WHERE $subject_number = '$post_subject_number'; ";

        $subid = mysqli_fetch_assoc(mysqli_query($connection, $subno_query))[$subject_id];

        $query = "INSERT INTO $note_table ($note_title, $note_date, $note_content, $student_id, $subject_id, name, type, size, filepath)
                  VALUES ('$title', '$current_date', '$content', $session_student_id, $subid, '$fileName','$fileType', '$fileSize', '$filePath')";

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