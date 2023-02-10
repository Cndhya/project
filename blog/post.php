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
            <form action="code/form.php" method="POST">
                Title :<br />
                <input type="text" name="title" placeholder="Enter your title"><br/>
                Description:<br/>
                <textarea name="description" placeholder="Description here"></textarea><br />
                image : <br/>
                <input type="file" name="image" placeholder="upload here..."><br/><br/>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>