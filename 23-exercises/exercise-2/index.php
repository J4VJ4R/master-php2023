<?php


if (isset($_GET['error'])) {
    if ($_GET['error'] == "email") {
        $error = "Enter a correct email";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php if ($_GET['error'] == "email"):?>
        <h1 style="color: red"><?php echo $error ?></h1>
    <?php    endif ?>
    <form action="./validation.php" method="GET">
        <label for="email">Email</label>
        <input type="text" name="email" id="">
        <input type="submit" value="Send">
    </form>
</body>
</html>