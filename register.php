
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include('/included-files/head-setup.php'); ?>
</head>
<body>
    <?php include('/included-files/navigation-bar.php'); ?>

    <main class="register-main">
        <header>
            <h1>
                Register
            </h1>
        </header>
        
        <form method="post" action="confirmRegister.php" class="register-form">
            <section class="register-input">
                <input name="username" placeholder="Username">
                <input name="first_name" placeholder="First Name">
                <input name="last_name" placeholder="Last Name">
                <input name="email" placeholder="Email">
                <input name="password" placeholder="Password">
                <input name="password_repeat" placeholder="Repeat Password">
                <button type="submit" class="btn btn-danger">Create Account</button>
            </section>

        </form>


    </main>

    <?php include('/included-files/scripts.php'); ?>
</body>
</html>
