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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="index-main">
        <header class="text-center">
            <h1>No7es</h1>
            A place for UTS students to share notes
        </header>

        <form action="notes.php" method="get">
            <input id="searchBar" class="form-control" name="search" type="text" placeholder="Subject Number or Title">
            <button type="submit" class="btn btn-danger">Find Notes</button>
        </form>

    </main>

    <div class="test"></div>

    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function() {
            $('#searchBar').autocomplete({
                source: 'input-validators/search-input.php'
            });
        });
    </script>

</body>
</html>