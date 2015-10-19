<?php
include('/included-files/connect-database.php');

$searchResult = $_GET['id'];

$query  = "SELECT * ";
$query .= "FROM note ";
$query .= "WHERE note_id = " . $searchResult . " ;";

$result = mysqli_query($connection, $query);
if (!$result){
    die("Database Query failed");
}

$row = mysqli_fetch_assoc($result);
$size = $row['size'];
$type = $row['type'];
$name = $row['name'];
$filepath = $row['filepath'];
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: inline; filename=$name");
header("Content-Transfer-Encoding: binary");
header('Expires: 0');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
ob_clean();
flush();

readfile($filepath);