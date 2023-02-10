<?php
    include 'database/database.php';

    $sql = "SELECT * FROM blogs";
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
                        while($row = mysqli_fetch_assoc($result)) {
                            $blog_data = '<a href="news.php?q=';
                            $blog_data .= $row['id'];
                            $blog_data .= '"><div class="blog-box"><div>';
                            $blog_data .= $row['title'];
                            $blog_data .= '</div><div>';
                            $blog_data .= $row['description'];
                            $blog_data .= '</div><div><img src=" "/>';
                            $blog_data .= '</div></div></a>';

                            echo $blog_data;
                        }
                    } else {
                            echo "No blog found";
                    }
            ?>
        </div>
    </div>
</body>

</html>