<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoologico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url('public/estilos.css')) ?>">
</head>
<body class="fondo">


    <h1 class="text-center">HOLA MUCHACHOS</h1>

    <img src="<?php echo(base_url('public/img/lion.png')) ?>" alt="nombre1" class="mx-auto d-block">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="text-white" action="<?php echo(base_url('public/animales/crear'))?>" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Comida</label>
                        <input type="text" class="form-control" id="comida" name="comida">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                        
                    
                    <h5 class="text-center"><?php echo(session('mensaje')) ?></h5>

                </form>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

