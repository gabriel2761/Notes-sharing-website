<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Note</title>
    <?php include(HEADER_SETUP); ?>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>

    <main id="write-main">
	
		<header>
			<h1>New Note</h1>
		</header>
	
        <form method="post" action="review.php">
            <input name=<?php echo POST_NOTE_NUMBER; ?> type="text" placeholder="Subject No.">
            <input name=<?php echo POST_NOTE_TITLE; ?> type="text" placeholder="Title">
            <textarea placeholder="Write notes" name=<?php echo POST_NOTE_CONTENT; ?> id=""></textarea>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
		
		<form action = "index.php">
			<button type = "submit" class = "btn btn-danger">Cancel</button>
		</form>
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>
