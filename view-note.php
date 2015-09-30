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
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main id = "note-main">
	
	 <?php $row = mysqli_fetch_assoc($result); ?>
     
	 <?php echo "<h2>" . $row["title"] . "</h2>" ?>
	 
	 <a href = "notes.php?search=<?php echo $_SESSION["searchResult"];?>" class = "back-button"> 
	 <?php echo "< Back to search result '" . $_SESSION["searchResult"] . "'"?>
	 </a>
	 
	 <?php echo "<h5 id = date> Post date: " . $row["date"] . "</h5>" ?>
	 
	
	 	 	 
	 <article class = "well">

	 <?php echo "<p class = content>" . $row["notes"] . "</p>" ?>
	 
	 
	  

	
	</article>
	
	  
	<?php
                mysqli_free_result($result);
            ?>
	
	</main>








    <?php include('/included-files/scripts.php'); ?>
</body>
</html>
