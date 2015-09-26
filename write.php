
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="write-main">
        <form method="post" action="review.php">
            <input name="subject" type="text" placeholder="Subject No.">
            <input name="title" type="text" placeholder="Title">
            <textarea placeholder="Write notes" name="notes" id=""></textarea>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>
