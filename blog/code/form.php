<?php
// Indlude database connection file - this makes the connection $conn available
include '../database/database.php';
$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO blogs (title, description) VALUES (\"$title\", \"$description\")";

if (!mysqli_query($conn, $sql)) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: /blog/index.php");
die();
