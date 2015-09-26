<?php include('/included-files/connect-database.php'); ?>

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
        
      	<h1>Success!</h1>

        <a href="index.php" type="submit" class="btn btn-success">Back to main page</a>

    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>

<?php mysqli_close($connection) ?>