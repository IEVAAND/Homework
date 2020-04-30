<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP12</title>
</head>

<body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="submit">
    </form>
</body>

    <?php
    if(isset($_POST['first_name']) && isset($_POST['last_name']))
    {
        echo 'Sveiki, ' . $_POST['first_name'].' '. $_POST['last_name'] . ' !';
    }
?>

</html>
