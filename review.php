<?php 
    $dbhost = "localhost";
    $dbuser = "gabriel";
    $dbpass = "password";
    $dbname = "notes";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }
?>

<?php 
    $subject = $_POST["subject"];
    $title = $_POST["title"];
    $notes = $_POST["notes"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="row review-sheet">
        <h3>Subject Number: <?php echo $subject; ?></h3>
        <h3>Title: <?php echo $title ?></h3>
        <p><?php echo $notes ?></p>

        <?php
            // $query  = "INSERT INTO notes (";
            // $query .= "subno, email, username, date, notes, rating
            // ) VALUES (";
            // $query .= "45765, ";
            // $query .= "student@uts.edu.au, ";
            // $query .= "2015-09-24, ";
            // $query .= "kutyfkuyfk, ";
            // $query .= "0";
            // $query .= "); ";

        $query = "INSERT INTO notes (subno, email, username, date, notes, rating) VALUES ($subject, '$notes', 'fdrg', '2015-09-24', '$notes', 0);";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database Query failed");
        }

        ?>

    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>

<?php mysqli_close($connection) ?>