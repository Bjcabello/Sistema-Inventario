<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/añadirV.css">
    <title>Añadir Productos</title>
</head>
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
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Inventario.php">Inventario</a>
                                </li>
                            </ul>
                        </div>
                </nav>  
                <!-- Fin Navbar -->
                <!-- tabla -->
                <div class="formulario">
                    <form action="controller/C_Add.php" method="post">
                    <h5 class="card-title">Ingresar datos del producto</h5>
                    <input type="text" id="disabledTextInput" name="Nombre" class="form-control" placeholder="Añadir nombre del producto">
                    <textarea class="form-control" name="Descripcion" placeholder="Añade la descripcion del producto" id="floatingTextarea"></textarea>
                    <input type="text" id="disabledTextInput" name="Nombre" class="form-control precio" placeholder="Añade el precio">
                    <button class="btn btn-primary" type="submit">Añadir producto al inventario</button>
                    </form>
                </div>     
            </div> 
        </header>    
    </div>     
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>