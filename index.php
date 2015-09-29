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
    <title>Document</title>
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="index-main">
        <header class="text-center">
            <h1>No7es</h1>
            A resource for UTS students to share and upload notes
        </header>

        <form action="notes.php" method="get">
            <input name="search" type="text" placeholder="Subject Number">
            <button type="submit" class="btn btn-danger">Find Notes</button>
        </form>

    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>