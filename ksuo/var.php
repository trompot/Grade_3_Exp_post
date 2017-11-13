<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    <?php
        session_start();
        $name = $_SESSION['name'];
        print ($name);
    ?>

</body>
</html>