<?php include('/included-files/connect-database.php'); ?>

<?php
    $searchResult = $_GET["note_id"];
	
    $query  = "SELECT * ";
    $query .= "FROM note ";
    $query .= "WHERE note_id = " . $searchResult . " ;";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database Query failed");
    }	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main id = "view-note-main">
	
		<?php $row = mysqli_fetch_assoc($result); ?>
     
		<h1> <?php echo $row["title"] ?> </h1>
	 
		<a href = "notes.php?search=<?php echo $_SESSION["searchResult"];?>" class = "back-button"> 
			< Back to search result '<?php echo $_SESSION["searchResult"] ?>' 
		</a>
	 
		<span id = date> Post date: <?php echo $row["date"] ?> </span>
	 
		<article class = "panel panel-default">	
			<p class="panel-body"> <?php echo $row["notes"] ?> </p>			
		</article>
		
		<?php  mysqli_free_result($result); ?>
	
	</main>

    <?php include(SCRIPTS); ?>
</body>
</html>
