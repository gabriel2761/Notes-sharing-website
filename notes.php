<?php include('/included-files/connect-database.php'); ?>

<?php
    $searchResult = $_POST["search"];

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

        <article class="row">
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <section class="col-md-3">
                <?php
                    echo $row["title"]. "<br>";
                    echo $row["notes"]. "<br>";
                    echo $row["date"]. "<br>";
                ?>
            </section>

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