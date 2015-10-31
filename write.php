<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Note</title>
    <?php include(HEADER_SETUP); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <?php
        if ($user_logged_in == true) { ?>

            <main id="write-main">

                <header>
                    <h1>New Note</h1>
                </header>

                <form method="post" enctype="multipart/form-data" onsubmit="return validSubject()" action="review.php">
                    <input id="subject-number-input" class="form-control"
                           name=<?php echo POST_NOTE_NUMBER; ?> type="text" placeholder="Subject No.">
                    <input class="form-control" name=<?php echo POST_NOTE_TITLE; ?> type="text" placeholder="Title">
                    <textarea class="form-control" placeholder="Write notes"
                              name=<?php echo POST_NOTE_CONTENT; ?> id=""></textarea>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>

                <form action="index.php">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>

                <div id="error-check" hidden>
                    <span></span>
                </div>


            </main>

        <?php } ?>

    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="src/jscript/search-subject.js" ></script>
</body>
</html>
