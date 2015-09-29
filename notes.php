<?php include('/included-files/connect-database.php'); ?>

<?php
    $searchResult = $_GET["search"];

    $query  = "SELECT * ";
    $query .= "FROM note ";
    $query .= "WHERE subject_id = " . $searchResult . " ;";


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

    <main>
        <article class="row">
            <section class="col-md-12 text-center">
                <p>Search results for  <?php echo $searchResult ?></p>
            </section>
        </article>

        <article class="list-group"> 		
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
						
			
            <a href = "view-note.php?note_id=<?php echo $row['note_id']; ?>" class="list-group-item"> 
                <?php echo "<h4 class = 'list-group-item-heading'>" .$row["title"]. "</h4>" ?> 	
				<?php echo "<p class = 'list-group-item-text'>" .$row["notes"]. "</p>" ?> 
                <?php echo "<p class = 'list-group-item-date'>" .$row["date"]. "</p>" ?> 				
            </a> 
			
            <?php
                }
            ?>			
			
            <?php
                mysqli_free_result($result);
            ?>

        </article>
    </main>


<!-- ERIC INSERT CODE HERE, CAN DELETE CODE ABOVE, WITHIN MAIN -->


    <?php include('/included-files/scripts.php'); ?>
</body>
</html>

<?php mysqli_close($connection) ?>