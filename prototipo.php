<!DOCTYPE html>
<html>
<head>
    <title>Mi Colección de Álbumes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light m-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container m-5">
   <div class="row">
       <?php
       $servername = "localhost";
       $username = "root";
       $password = "mysql";
       $dbname = "colecciones";

       // Crear conexión
       $conn = new mysqli($servername, $username, $password, $dbname);

       // Verificar conexión
       if ($conn->connect_error) {
           die("Conexión fallida: " . $conn->connect_error);
       }

       $sql = "SELECT ID_Albums, Nombre, Descripcion, Imagen FROM Albums";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
        // Mostrar datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<img class="card-img-top" src="'.$row['Imagen'].'"/>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$row["Nombre"].'</h5>';
            echo '<p class="card-text">'.$row["Descripcion"].'</p>';
            echo '<form action="editar.php" method="post">';
            echo '<input type="hidden" name="id" value="'.$row["ID_Albums"].'">';
            echo '<input type="submit" value="Editar">';
            echo '</form>';
            echo '<form action="borrar.php" method="post">';
            echo '<input type="hidden" name="id" value="'.$row["ID_Albums"].'">';
            echo '<input type="submit" value="Borrar">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
      } else {
        echo "0 resultados";
      }
       $conn->close();
       ?>
   </div>
</div>
</body>
</html>

</body>
</html>
