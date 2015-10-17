<header class="navbar navbar-default">
    <section class="container-fluid">
        <header class="navbar-brand">
            <a href="index.php">No7es</a>
        </header>

        <nav class="navbar-right">

        <?php
            session_start();

            include('SessionConstant.php');

        if (isset($_SESSION[SESSION_STATUS]) && $_SESSION[SESSION_STATUS] == true) {
            echo "Logged in as " . $_SESSION[SESSION_STUDENT_USERNAME] ."!";
            ?>
                <a href="../notes-sharing-website/write.php" class="btn btn-default navbar-btn">Write</a>
                <a href="?link=1" name="link1" class="btn btn-default navbar-btn">Log out</a>
            <?php
        } else {
            echo "Not logged in";
            ?>
                <a href="../notes-sharing-website/login.php" class="btn btn-default navbar-btn">Log in</a>
                <a href="../notes-sharing-website/register.php" class="btn bt1n-default navbar-btn">Sign up</a>
            <?php
        }

        if (isset($_GET['link'])) {
            $link = $_GET['link'];
            if ($link == '1') {
                session_start();
                session_destroy();
                header('Location: index.php');
                exit();
            }
        }

        ?>

        </nav>
    </section>
</header>
