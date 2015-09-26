<?php
/**
 * Created by PhpStorm.
 * User: nikom
 * Date: 22/08/2015
 * Time: 9:01 PM
 */
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
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="index-main">
        <header class="text-center">
            <h1>No7es</h1>
            A resource for UTS students to share and upload notes
        </header>

        <form action="notes.php" method="post">
            <input name="search" type="text" placeholder="Subject Number">
            <button type="submit" class="btn btn-danger">Find Notes</button>
        </form>

    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>