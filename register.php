<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main class="register-main">
        <header>
            <h1>Register</h1>
        </header>
        
        <form method="post" action="confirm-register.php" class="register-form">
            <input id="username-register" name=<?php echo POST_USERNAME ?> placeholder="Username">
            <span id="username-status"></span>
            <input id="firstname-register" name=<?php echo POST_FIRST_NAME ?> placeholder="First Name">
            <span id="firstname-status"></span>
            <input id="lastname-register" name=<?php echo POST_LAST_NAME ?> placeholder="Last Name">
            <span id="lastname-status"></span>
            <input id="email-register" name=<?php echo POST_EMAIL ?> placeholder="Email">
            <span id="email-status"></span>
            <input id="password-register" name=<?php echo POST_PASSWORD ?> placeholder="Password">
            <span id="password-status"></span>
            <input id="password-repeat" name="password_repeat" placeholder="Repeat Password">
            <span id="repass-status"></span>
            <button type="submit" class="btn btn-danger">Create Account</button>

        </form>

    </main>

    <?php include(SCRIPTS) ?>
    <script type="text/javascript" src="src/jscript/register-form-check.js"></script>

</body>
</html>
