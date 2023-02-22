<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads</title>
</head>
<body>
    <h1>Upload files</h1>
    <form method="POST" action="uploads.php" enctype="multipart/form-data">
        <label for="archivo">Upload iamges</label>
        <input type="file" name="archivo">
        <input type="submit" value="Sent data">
    </form>
    <?php
        $gestor = opendir('./images');
        if($gestor):
            while (($image = readdir($gestor)) !== false):
                # code...
                if ($image != '.' && $image != '..'):
                    # code...
                    echo "<br><img src='./images/$image' width='200px'><br>";
                endif;
            endwhile;
        endif;
    ?>
</body>
</html>