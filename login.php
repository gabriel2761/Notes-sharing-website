
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
<?php include('/included-files/navigation-bar.php'); ?>

<main class="login-main">
    <header>
        <h1>
            Log in
        </h1>
    </header>

    <form method="post" action="login-confirm.php" class="register-form">
        <input name="username" placeholder="Username">
        <input name="password" placeholder="Password">
        <button type="submit" class="btn btn-danger">Log in</button>
    </form>


</main>

<?php include('/included-files/scripts.php'); ?>
</body>
</html>
