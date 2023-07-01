<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/productoV.css">
    <title>Inventario</title>
</head>
<body>  
    <div class="container-fluid">
      <div class="subcontainer">
        <header>
          <div class="sombra">
            <!-- Navbar -->
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
                    <li class="nav-item">
                      <a class="nav-link" href="Añadir.php">Añadir Producto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav> 
              <!-- table -->    
            <div class="Cont-b-t">
              <div class="busqueda">
                <a class="link" href="Busqueda.php"><button type="button busq" class="btn btn-outline-info">Editar Busqueda</button></a>
              </div>
              <h1 class="card-title" >productos del inventario</h1>
              <div class="cont-table" >
                <table class="table table-success table-hover table-striped">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach($productos as $pro){
                          echo"<tr>";
                            echo"<td>".$pro['Nombre']."</td>";
                            echo"<td>".$pro['Descripcion']."</td>";
                            echo"<td>".$pro['Precio']."</td>";
                          echo"</tr>";
                        }
                       ?>
                    </tbody>
                </table>  
              </div>  
            </div>                            
        </header>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
    