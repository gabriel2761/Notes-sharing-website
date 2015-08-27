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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src/style/css/style.css">
</head>
<body>
    <header class="navbar navbar-default">
        <section class="container-fluid">
            <header class="navbar-brand">
                <a href="index.php">No7es</a>
            </header>
        </section>
    </header>

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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://localhost:35729/livereload.js"></script>
</body>
</html>

<?php mysqli_close($connection) ?>