<?php include('/included-files/connect-database.php'); ?>

<?php
    $searchResult = $_GET["search"];
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * 15;
    $query  = "SELECT * ";
    $query .= "FROM note ";
    $query .= "WHERE subject_id = '" . $searchResult . "' ";
    $query .= "OR title REGEXP '[[:<:]]" . $searchResult . "[[:>:]]'"; 
    $query .= "LIMIT " . $start_from . ", 15;";
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
        </section>

			<?php
			$sql = "SELECT COUNT(note_id) FROM note ";
            $sql .= "WHERE subject_id= '" . $searchResult ."' ";
            $sql .= "OR title REGEXP '[[:<:]]" . $searchResult . "[[:>:]]';";
            $rs_result = mysqli_query($connection, $sql);

            if (!$rs_result) {
                die("Database Query failed");
            }
            $row = mysqli_fetch_row($rs_result);
            $total_records = $row[0];
            $total_pages = ceil($total_records / 15);


            $prev_page = $page - 1;
            $next_page = $page + 1;
            ?>

        <div class = "text-center">
            <ul class = "pagination">
                <?php
                    if($page != 1)
                    {
                        echo "<li><a href='notes.php?search=" . $searchResult . "&page=" . $prev_page . "'>
                                <span class = 'glyphicon glyphicon-chevron-left'></span> </a></li>";
                    }

                    for ($i=1; $i<=$total_pages; $i++) {
                        if($total_pages == 1){
                            break;
                        }
                        else if($i == $page){
                           echo "<li class = 'active'><a href ='#'>" . $i . "</a></li>";
                        }
                        else{
                            echo "<li><a href='notes.php?search=" . $searchResult . "&page=" . $i . "'>" . $i . "</a></li>";
                        }
                    }

                    if($page != $total_pages && $total_pages != 0) {
                        echo "<li><a href='notes.php?search=" . $searchResult . "&page=" . $next_page . "''>
                                <span class = 'glyphicon glyphicon-chevron-right'></span> </a></li>";
                    }
                ?>
            </ul>
        </div>

			<?php mysqli_free_result($result); ?>
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>

<?php mysqli_close($connection) ?>