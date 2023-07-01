<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/editV.css">
    <title>Editar Producto</title>
<body>
<div class="container-fluid">
    <div class="subcontainer">
        <header>
            <div class="sombra">
                <!-- Navbar Inicio -->
                <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark"">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Añadir.php">Añadir Producto</a>
                            </li>
                            </ul>
                        </div>
                </nav>  
                <!-- Fin Navbar -->
                <!-- tabla -->
                <div class="cont-table" >
                    <h1 class="card-title" >Edita tu Producto</h1>
                    <table class="table table-success table-striped">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Actualizar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($productos as $pro){
                        ?>
                        <form action="../controller/C_Update.php" method="post">
                            <tr>
                                <td><input type="text" id="disabledTextInput" value="<?php echo $pro['id_productos']?>" name="id" class="form-control inp-m "></td>
                                <td><input type="text" id="disabledTextInput" value="<?php echo $pro['Nombre']?>" name="Nombre" class="form-control inp-m "></td>
                                <td>  <textarea class="form-control" value="" name="Descripcion" id="floatingTextarea"><?php echo $pro['Descripcion']?></textarea></td>
                                <td><input type="text" id="disabledTextInput" value="<?php echo $pro['Precio']?>" name="Precio" class="form-control inp-m "></td>
                                <td><button type="button" class="btn btn-secondary ">Actualizar</button></td>

                            </tr>
                        </form>
                            
                        <?php }?>
                        </tbody>
                    </table>  
                </div>
                <!-- Fin Tabla-->
            </div> 
        </header>     
    </div>     
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>