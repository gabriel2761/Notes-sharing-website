<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "password";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
		);
	}
?>

<?php 
	$query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC ";


	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Database Query failed");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases</title>
</head>
<body>

	<?php
		while ($row = mysqli_fetch_assoc($result)) {

            echo $row["id"]. "<br>";
            echo $row["menu_name"]. "<br>";
            echo $row["position"]. "<br>";
            echo $row["visible"]. "<br>";
			echo "<hr> ";
		}
	?>

    <?php
        mysqli_free_result($result);
    ?>

</body>
</html>

<?php mysqli_close($connection) ?>