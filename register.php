<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>
    <?php include(SCRIPTS) ?>

    <main class="register-main">
        <header>
            <h1>Register</h1>
        </header>

        <form method="post" action="confirm-register.php" class="register-form" onsubmit="return validateForm()">
            <input id="username-register" name=<?php echo POST_USERNAME ?> placeholder="Username">
            <span id="username-status"></span>
            <input id="firstname-register" name=<?php echo POST_FIRST_NAME ?> placeholder="First Name">
            <span id="firstname-status"></span>
            <input id="lastname-register" name=<?php echo POST_LAST_NAME ?> placeholder="Last Name">
            <span id="lastname-status"></span>
            <input id="email-register" name=<?php echo POST_EMAIL ?> placeholder="Email">
            <span id="email-status"></span>
            <input id="password-register" type="password" name=<?php echo POST_PASSWORD ?> placeholder="Password">
            <span id="password-status"></span>
            <input id="password-repeat" type="password" name="password_repeat" placeholder="Repeat Password">
            <span id="repass-status"></span>
            <button id="submit-button" type="submit" class="btn btn-danger">Create Account</button>
            <span id="validation-status"></span>
        </form>

    </main>

    <script type="text/javascript" src="src/jscript/register-validation-script.js"></script>

</body>
</html>
