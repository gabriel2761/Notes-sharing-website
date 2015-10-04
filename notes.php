<?php include('/included-files/connect-database.php'); ?>

<?php
    $searchResult = $_GET["search"];
	
    $query  = "SELECT * ";
    $query .= "FROM note ";
    $query .= "WHERE subject_id = '" . $searchResult . "' ";
    $query .= "OR title LIKE '%" . $searchResult . "%';"; 

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
    <?php $_SESSION["searchResult"] = $searchResult?>
	
    <main id = "list-notes-main">     

        <section class="list-group"> 	

			<h1>Search results for  <?php echo $searchResult ?></h1>
			
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
			
            <a href = "view-note.php?note_id=<?php echo $row['note_id']; ?>" class="list-group-item"> 
                <h2 class = 'list-group-item-heading'> <?php echo $row["title"] ?> </h2>	
				<p class = 'list-group-item-text'> <?php echo $row["notes"] ?> </p>
                <span class = 'note-date'> <?php echo $row["date"] ?> </span>			
            </a> 
			
            <?php
                }
            ?>			
			
            <?php mysqli_free_result($result); ?>			
			
        </section>
		
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>

<?php mysqli_close($connection) ?>