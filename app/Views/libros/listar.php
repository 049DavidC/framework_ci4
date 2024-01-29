<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    Lista de libros

    <?php print_r($libros);?>

    <div class="container mt-3">
        <h1>Lista de libros</h1>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td><img src="ruta_de_la_imagen" alt="Imagen del libro" class="img-thumbnail"></td>
                    <td>Nombre del libro</td>
                    <td>
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
                <!-- Otras filas de datos -->
            </tbody>
        </table>
    </div>
</body>
</html>