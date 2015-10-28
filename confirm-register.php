<?php include('/included-files/connect-database.php'); ?>

<?php
    $first_name = $_POST[POST_FIRST_NAME];
    $last_name = $_POST[POST_LAST_NAME];
    $username = $_POST[POST_USERNAME];
    $password = $_POST[POST_PASSWORD];
    $email = $_POST[POST_EMAIL];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <?php include(HEADER_SETUP); ?>
    </head>
<body>
<?php include(NAVIGATION_BAR); ?>

<main id="register-confirm-main" class="text-center">

    <?php
    $result = "";

    // declare table column names
    $student_table = STUDENT_TABLE_NAME;
    $student_username = STUDENT_USERNAME;
    $student_firstname = STUDENT_FIRST_NAME;
    $student_lastname = STUDENT_LAST_NAME;
    $student_password = STUDENT_PASSWORD;
    $student_email = STUDENT_EMAIL;

    // encrypt password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $query  = "INSERT INTO $student_table ($student_username, $student_firstname,$student_lastname,$student_password, $student_email)";
    $query .= "VALUES ('$username','$first_name','$last_name','$hashed_password','$email');";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        $result = "Something went wrong";
    } else {
        $result =  "Success!";
    }
    ?>
    
    <header>
    <h1 class = "text-success"><?php echo $result ?></h1>
    </header>
    
    <section class="message">
      <p> You have been successfully registered into the system.</p>
      <p> You can now start writing notes!</p>
    </section>
    
    <div class="return_btn">
      <a href="index.php" class = "btn btn-danger">Return to main page</a>
    </div>
    
    <?php include(SCRIPTS); ?>
</main>1
</body>
</html>

<?php mysqli_close($connection) ?>