<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="write-main">
        <form method="post" action="review.php">
            <input name="subject" type="text" placeholder="Subject No.">
            <input name="title" type="text" placeholder="Title">
            <textarea placeholder="Write notes" name="notes" id=""></textarea>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>
