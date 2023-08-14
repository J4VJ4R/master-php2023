<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <div class="row">
        <?php for ($j=0; $j <= 10; $j++): ?>
          <div class="col-6 col-md-2 mb-4">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tabla del <?= $j ?></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i <= 10 ; $i++): ?>
                      <tr>
                          <td><?= $j ?></td>
                          <td><?= $i ?></td>
                          <td><?= $j * $i ?> </td>
                      </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
          </div> 
          <?php endfor; ?>
      </div>
                <!-- Agrega más filas según sea necesario -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
