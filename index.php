<?php
/**
 * Created by PhpStorm.
 * User: nikom
 * Date: 22/08/2015
 * Time: 9:01 PM
 */
?>

<?php include('included-files/Constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="index-main">
        <header class="text-center">
            <h1>No7es</h1>
            A resource for UTS students to share and upload notes
        </header>

        <form action="notes.php" method="get">
            <input class="form-control" name="search" type="text" placeholder="Subject Number or Title">
            <button type="submit" class="btn btn-danger">Find Notes</button>
        </form>

    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>