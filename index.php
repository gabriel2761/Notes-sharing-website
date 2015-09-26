<?php
/**
 * Created by PhpStorm.
 * User: nikom
 * Date: 22/08/2015
 * Time: 9:01 PM
 */
?>

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
    <header class="navbar navbar-default navigation-bar">
        <section class="container-fluid">
            <header class="navbar-brand">
                <a href="index.php">No7es</a>
            </header>

            <nav class="navbar-right">
                <!-- <button type="button" class="btn btn-default navbar-btn">Log in</button>
                <button type="button" class="btn btn-default navbar-btn">Sign up</button> -->
                <a href="write.php" class="btn btn-default navbar-btn">Write</a>

            </nav>
        </section>
    </header>

    <main class="index-main">
        <article class="text-center notes-title">
            <h1>No7es</h1>
            A resource for UTS students to share and upload notes
        </article>

        <article class="text-center search">
            <form action="notes.php" method="post">
                <input name="search" type="text" placeholder="Subject Number">
                <button type="submit" class="btn btn-danger">Find Notes</button>
            </form>
        </article>

    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://localhost:35729/livereload.js"></script>
</body>
</html>