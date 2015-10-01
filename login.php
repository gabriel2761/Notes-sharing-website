<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
<?php include(NAVIGATION_BAR); ?>

<main class="login-main">
    <header>
        <h1>Log in</h1>
    </header>

    <form method="post" action="login-confirm.php" class="register-form">
        <input name=<?php echo STUDENT_USERNAME ?> placeholder="Username">
        <input name=<?php echo STUDENT_PASSWORD ?> placeholder="Password">
        <button type="submit" class="btn btn-danger">Log in</button>
    </form>


</main>

<?php include(SCRIPTS); ?>
</body>
</html>
