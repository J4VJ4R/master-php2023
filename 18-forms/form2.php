
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>
<body>
    <form action="" method="get">
        <label for="genre">Sexo</label>
        <input type="checkbox" name="gnre" id="" value="Hombre">
        <input type="checkbox" name="gnre" id="" value="Mujer"><br>

        <label for="color">Color</label>
        <input type="color" name="color" id=""><br>

        <label for="email">Correo</label>
        <input type="email" name="email" id=""><br>

        <label for="file1">File1</label>
        <input type="file" name="file1" id=""><br>

        <label for="file2">File2</label>
        <input type="file" name="file2" multiple="multiple" id=""><br>

        <label for="number">Número</label>
        <input type="number" name="number" id=""><br>

        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id=""><br>

        <label for="fruits">Frutas</label>
        Naranja: <input type="radio" name="fruits" id="" value="Orange">
        Manzana: <input type="radio" name="fruits" id="" value="Apple">
        Coco: <input type="radio" name="fruits" id="" value="Coconut"><br>

        <label for="url">Url</label>
        <input type="url" name="url" id=""><br>

        <label for="date">Fecha</label>
        <input type="date" name="date" id=""><br>

        <label for="text">Mensaje</label>
        <textarea name="text" id="" maxlength=10 cols="30" rows="10"></textarea><br>

        <label for="selection">Frutas</label>
        <select name="selection" id="">
            <option value="Manzana">Manzana</option>
            <option value="Manzana">Coco</option>
            <option value="Manzana">Pera</option>
            <option value="Manzana">Piña</option>
            <option value="Manzana">Fresa</option>
        </select><br>

        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>