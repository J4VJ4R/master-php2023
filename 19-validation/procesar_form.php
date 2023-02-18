<?php
$error = "error";

if (!empty($_POST['name'])
    && !empty($_POST['lastname'])
    && !empty($_POST['age'])
    && !empty($_POST['email'])
    && !empty($_POST['pass'])) {
    # code...
    $error = "ok";
    $name = $_POST['name'];    
    $lastname = $_POST['lastname'];
    $age = (int)$_POST['age'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (!is_string($name) || preg_match("[0-9]") ) {
        # code...
        $error = "name";
        header('Location:form4.php?error=name');
    }

    if (!is_string($lastname) || preg_match("[0-9]")) {
        # code...
        $error = "lastname";
        header('Location:form4.php/?error=lastname');
    }


    if (!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)) {
        # code...
        $error = "age";
        header('Location:form4.php/?error=age');
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # code...
        $error = "email";
        header('Location:form4.php/?error=email');
    }

    if (strlen($pass) < 5) {
        # code...
        $error = "password";
        header('Location:form4.php/?error=password');
    }
    
   
}else{
    $error = "error";
    header('Location:form4.php?error=error');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Validated</title>
</head>
<body>
    <?php if ($error == "ok"): ?>
        <h1>Validated data</h1>
        <p><?php echo $name ?> </p>
        <p><?php echo $lastname ?> </p>
        <p><?php echo $age ?> </p>
        <p><?php echo $email ?> </p>
    <?php endif ?>
</body>
</html>
