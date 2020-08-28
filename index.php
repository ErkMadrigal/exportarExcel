<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<?php 
    include "db.php";
    include "backEnd.php";

    $consultas = new consultas();
    $datos = $consultas->getData();

?>

<body>
    <div class="container">
        <h1>tableToExcel Demo</h1>
        <p>Exporting the W3C Example Table</p>
    
        <input class="btn btn-primay" type="button" id="export" value="Export to Excel">

        <table id="testTable" class="table mt-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fecha de ingeso</th>
                <th scope="col">precio</th>
                <th scope="col">marca</th>
            </tr>
            </thead>
            <tbody>
            <?php $contador = 1; ?>
            <?php foreach($datos as $data):?>
                <tr>
                    <th scope="row"><?= $contador++; ?></th>
                    <td><?= $data['Nombre'];?></td>
                    <td><?= $data['Cantidad'];?></td>
                    <td><?= $data['Fecha_Ingreso'];?></td>
                    <td><?= $data['Precio'];?></td>
                    <td><?= $data['marca'];?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <script src="app.js"></script>
</body>

</html>