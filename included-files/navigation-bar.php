<header class="navbar navbar-default">
    <section class="container-fluid">
        <header class="navbar-brand">
            <a href="index.php">No7es</a>
        </header>

        <nav class="navbar-right">

        <?php
            session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "Logged in as " . $_SESSION['username'] . "!";
            ?>
                <a href="../notes-sharing-website/write.php" class="btn btn-default navbar-btn">Write</a>
                <a href="../notes-sharing-website/logout.php" class="btn btn-default navbar-btn">Log out</a>
            <?php
        } else {
            echo "Not logged in";
            ?>
                <a href="../notes-sharing-website/login.php" class="btn btn-default navbar-btn">Log in</a>
                <a href="../notes-sharing-website/register.php" class="btn bt1n-default navbar-btn">Sign up</a>
            <?php
        }
        ?>




        </nav>
    </section>
</header>
