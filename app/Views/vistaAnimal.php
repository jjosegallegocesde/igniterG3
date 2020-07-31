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

                    <h5 class="text-center mt-4"><?php echo(session('mensaje')) ?></h5>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>COMIDA</th>
                            <th>EDAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($animales as $clave=>$valor):?>
                            
                            <tr>
                                <td><?php echo($valor->id)?></td>
                                <td><?php echo($valor->nombre)?></td>
                                <td><?php echo($valor->comida)?></td>
                                <td><?php echo($valor->edad)?></td>
                                <td><a href="" class="btn btn-danger">Eliminar</a></td>
                            </tr>

                        <?php endforeach?>
                    </tbody>
                
                </table>
            </div>
        </div>

        <div class="row">
            <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($animales as $clave=>$valor):?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo(base_url('public/img/safari.png'))?>" class="card-img-top" alt="safari">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($valor->nombre) ?></h5>
                            <p><?php echo( $valor->nombre." Es un animal de ".$valor->edad." años") ?></p>
                            <a href="<?php echo(base_url('public/animales/eliminar/'.$valor->id))?>" class="btn btn-danger">Eliminar</a>

                            <a class="btn btn-info" data-toggle="collapse" href="#formulario<?php echo($valor->id)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Actualizar
                            </a>

                            <div class="collapse" id="formulario<?php echo($valor->id)?>">
                                <form action="<?= base_url('public/animales/modificar/'.$valor->id)?>" method="POST" class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="comida2" name="comida2" value="<?= $valor->comida ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="edad2" name="edad2" value="<?= $valor->edad?>">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-block">Enviar</button>
                                </form>
                            </div>
                            

                        </div>
                    </div>
                </div>
            <?php endforeach?>
        
        </div>

       


    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

