<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="http://localhost<?php echo $_SERVER['PHP_SELF'] ?>?name=Diljit-Dosanjh&profession=Singer">Test $GET</a>
    <?php
    if (isset($_GET['name']))
        echo "<br>Name: " . $_GET['name'] . " <br>";
    if (isset($_GET['profession']))
        echo "Profession: " . $_GET['profession'] . " <br>";
    ?>
</body>

</html>