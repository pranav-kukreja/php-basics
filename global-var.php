<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $x = 10;
    echo "$x";
    $GLOBALS['x'] = 20;
    echo "$x";
    function f()
    {
        $GLOBALS['y'] = 40;
    }
    f();
    echo $GLOBALS['y'];
    echo "<br>";
    ?>
</body>

</html>