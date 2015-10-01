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
            <input type="text" id="username-register" name=<?php echo POST_USERNAME ?> placeholder="Username">
            <span id="username-status"></span>

            <input name=<?php echo POST_FIRST_NAME ?> placeholder="First Name">
            <input name=<?php echo POST_LAST_NAME ?> placeholder="Last Name">
            <input name=<?php echo POST_EMAIL ?> placeholder="Email">
            <input name=<?php echo POST_PASSWORD ?> placeholder="Password">
            <input name="password_repeat" placeholder="Repeat Password">
            <button type="submit" class="btn btn-danger">Create Account</button>

        </form>


    </main>

    <?php include(SCRIPTS) ?>
    <script type="text/javascript" >
        $(document).ready(function() {
            var username_input = $('#username-register');
            var status =  $('#username-status');
            $(username_input).keyup(function() {
                $.post('input-checkers/check-register.php', {username: username_input.val()},
                    function(result) {
                        status.text(result);
                    });
            });
        });
    </script>
</body>
</html>
