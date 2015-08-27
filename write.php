
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

    <main>
        
        <form method="post" action="review.php" class="write-form">
            <section class="row">
                <input name="subject" class="col-sm-3" type="text" placeholder="Subject No.">
                <input name="title" class="col-sm-9"type="text" placeholder="Title">
            </section>

            <section class="row">
                <div class="col-sm-12 textbox">
                    <textarea placeholder="Write notes" name="notes" id=""></textarea>
                </div>
            </section>

            <section class="col-sm-12 buttonbox">
                <button type="submit" class="btn btn-danger">Submit</button>
            </section>
        </form>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
