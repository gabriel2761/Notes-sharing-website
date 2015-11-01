<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
<?php include(NAVIGATION_BAR); ?>
<?php include(SCRIPTS); ?>

<main class="login-main">
    <header>
        <h1>Log in</h1>
    </header>

    <form method="post" action="index.php" class="register-form" onsubmit="return validate()">
        <input id="username" class="form-control" name=<?php echo POST_USERNAME ?> placeholder="Username">
        <input id="password" type="password" class="form-control" name=<?php echo POST_PASSWORD ?> placeholder="Password">
        <button type="submit" class="btn btn-danger">Log in</button>
        <span id="login-status"></span>
    </form>

</main>

<script type="text/javascript" src="src/jscript/login-validation-script.js"></script>
</body>
</html>
