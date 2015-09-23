
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
    <header class="navbar navbar-default">
        <section class="container-fluid">
            <header class="navbar-brand">
                <a href="index.php">No7es</a>
            </header>
        </section>
    </header>

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
                <input name="first_name" placeholder="Last Name">
                <input name="email" placeholder="Email">
                <input name="password" placeholder="Password">
                <input name="password-confirm" placeholder="Confirm Password">
                <input name="password-confirm" placeholder="Confirm Password">
            </section>

        </form>


    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
