<?php
    include 'database/database.php';
    $id = $_GET['q'];

    $sql = "SELECT * FROM blogs WHERE id =";
    $sql .= $id; 
    $result = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="styles.css">

<body>
    <div id="main">
        <div class="left-column">
            <?php include 'navigation/navigation.php' ?>
        </div>
        <div class="right-column">
            <?php
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "<h2>$row[title]</h2>";
                    echo "<p>$row[description]</p>";
                } else {
                    echo "Blog not found";
                }
            ?>
        </div>
    </div>
</body>

</html>