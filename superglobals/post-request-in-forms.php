<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php + html </title>
</head>

<body>
    <form method="post" action=$_SERVER['PHP_SELF']>
        <input id="input-student-name" type="text" name="student_name">
        <label for="input-student-name">Enter name: </label>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST["student_name"]);
        echo "Hello $name";
    }
    ?>

</body>

</html>