
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
