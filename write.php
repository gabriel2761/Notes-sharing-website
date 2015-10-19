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
	
        <form method="post" enctype="multipart/form-data" action="review.php">
            <input class="form-control" name=<?php echo POST_NOTE_NUMBER; ?> type="text" placeholder="Subject No.">
            <input class="form-control" name=<?php echo POST_NOTE_TITLE; ?> type="text" placeholder="Title">
            <textarea class="form-control" placeholder="Write notes" name=<?php echo POST_NOTE_CONTENT; ?> id=""></textarea>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        
		<form action = "index.php">
			<button type = "submit" class = "btn btn-danger">Cancel</button>
		</form>
      
    </main>

    <?php include(SCRIPTS); ?>
</body>
</html>
