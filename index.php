<?php

require_once('./php_librarys/bd.php');


?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Album Colecciones · Marcelo Carvajal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- <style>
    .carta-box:hover .carta {
        transform: rotateY(180deg);
    }

    .carta {
        transform-style: preserve-3d;
        transition: all 0.5s linear;
    }

    .cara {
        position: relative;
        backface-visibility: hidden;
        width: 100%;
        height: 100%;
        display: flex;

    }

    .detras {
        transform: rotateY(180deg);
    }
    </style> -->

</head>

<body>


    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h2>Bienvenidos</h2>
                        <p class="text-body-secondary">Conoce la mejor biblioteca de mis Albums Favoritos. presenta una
                            colección cuidadosamente seleccionada de álbumes que han definido géneros, inspirado a
                            generaciones y trascendido el paso del tiempo. Desde clásicos inolvidables hasta obras
                            maestras contemporáneas, cada álbum ha sido elegido por su impacto cultural, innovación
                            musical y calidad artística.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h2>Comunicate</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Sigueme en Twitter</a></li>
                            <li><a href="#" class="text-white">Hablemos por Facebook</a></li>
                            <li><a href="#" class="text-white">Escribeme</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    </svg>
                    <strong>COLECCIONES</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container mt-4"
            style="background-image: url('https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2013/09/cassettes.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5'); background-size: cover; background-position: center;">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Álbumes</h1>
                    <p class="lead">Bienvenido a Colecciones, la plataforma para explorar y
                        descubrir los mejores álbumes de música de todos los tiempos. Descubre joyas atemporales que han
                        dejado una marca en la historia.</p>
                    <p>
                        <a href="#" class="btn btn-primary btn-lg my-2">ÁLBUMES</a>
                        <a href="#" class="btn btn-secondary btn-lg my-2">ARTISTAS</a>
                        <a href="#" class="btn btn-success btn-lg my-2">CANCIONES</a>
                        <a href="#" class="btn btn-warning btn-lg my-2">ESTILOS</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- Opciones Menu -->
        <div id="menuAjustes">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4 py-3 mt-4">
                    <h2 class="text-white d-flex justify-content-center">Opciones Albunes</h2>

                    <div id="BarraAcciones" class="mt-2 d-flex justify-content-center py-3 bg-dark"
                        style="display: none;">

                        <button type="button" class="btn btn-primary  me-2" data-bs-toggle="modal"
                            data-bs-target="#ModalAgregar">
                            AGREGAR
                        </button>
                        <button type="button" class="btn btn-success  me-2" data-bs-toggle="modal"
                            data-bs-target="#ModalActualizar"> ACTUALIZAR
                        </button>
                        <button type="button" class="btn btn-danger  me-2" data-bs-toggle="modal"
                            data-bs-target="#ModalEliminar">
                            ELIMINAR
                        </button>
                        <button type="button" class="btn btn-light  me-2" data-bs-toggle="modal"
                            data-bs-target="#ModalListar">
                            LISTAR
                        </button>

                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark py-3 mt-4  ">
                <div class="container-fluid d-flex justify-content-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>


        </div>

        <!-- Contenedor Albunes -->
        <div id="ContenedorAlbum" class="album py-5 bg-body-tertiary">

            <div class="container">
                <div class="row">
                    <?php
                    $albums = SelectAlbunes();
                    foreach ($albums as $album) { ?>
                    <div class="col-md-4 mb-4 carta-box">
                        <div class="carta">

                            <div class="frente card card-container cardEstilo">
                                <img src="<?php echo $album['Imagen']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $album['Nombre']; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $album['Descripcion']; ?>
                                    </p>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="reverso card card-container cardEstilo">
                                            <div class="card-body">
                                                <!-- <h4 class="card-title mb-4">
                                                    <?php echo "Album: " . $album['Nombre'];
                                                    ?>
                                                </h4> -->
                                                <h5>
                                                    <p>Canciones del Album VERFA</p>
                                                </h5>
                                            </div>

                                            <!-- <ul class="list-group list-group-flush">

                                                <?php
                                                $canciones = SelectCanciones($album['ID_Albums']);
                                                foreach ($canciones as $resultado) { ?>

                                                <li class="list-group-item">

                                                    <?php echo $resultado['Cancion']; ?>
                                                </li>
                                                <?php } ?>
                                            </ul> -->

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Cancion</th>
                                                        <th>Estilos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                $canciones = SelectCancionesEstilos($album['ID_Albums']);

                                                    foreach ($canciones as $resultado) {
                                                    echo "<tr>";
                                                    echo "<td>{$resultado['Cancion']}</td>";
                                                    echo "<td>{$resultado['Estilos']}</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Artista:
                                        <?php echo $album['NombreArtista']; ?>
                                    </li>
                                    <li class="list-group-item">ID Album:
                                        <?php echo $album['ID_Albums']; ?>
                                    </li>
                                    <!-- <?php
                                        $canciones = SelectCanciones($album['ID_Albums']);
                                        foreach ($canciones as $resultado) { ?>
                                    <li class="list-group-item">
                                        <?php echo $resultado['Cancion']; ?>
                                    </li>
                                    <?php } ?> -->
                                </ul>


                                <div class="card-body">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample"> Abrir </button>
                                    <button type="button" class="btn btn-success  me-2" data-bs-toggle="modal"
                                        data-bs-target="#ModalActualizar"> ACTUALIZAR </button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="eliminarAlbum(<?php echo $album['ID_Albums']; ?>)">Borrar</button>

                                </div>
                            </div>


                        </div>
                    </div>
                    <?php } ?>
                </div>


            </div>
        </div>

        <script>
        function eliminarAlbum(albumID) {
            if (confirm('¿Estás seguro de que deseas eliminar este álbum?')) {
                // Enviar solicitud de eliminación a albumController.php
                window.location.href = './php_controllers/albumController.php?delete=' + albumID;
            }
        }
        </script>

        <!-- Modal Eliminar -->

        <div class="modal fade" id="ModalEliminar" tabindex="-1" aria-labelledby="ModalEliminarLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalEliminarLabel">Eliminar Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/albumController.php" method="POST">

                            <div class="form-group mt-2">
                                <label for="identificador">Ingresa N Identificador</label>
                                <input type="number" class="form-control" id="ID_Albums" name="ID_Albums"
                                    placeholder="ID_Albums">
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="submit" class="btn btn-danger align-items-center"
                                    name="delete">Eliminar</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Actualizar -->
        <div class="modal fade" id="ModalActualizar" tabindex="-1" aria-labelledby="ModalActualizar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalActualizarLabel">Actualizar Álbum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/albumController.php" method="POST">

                            <div class="form-group">
                                <label for="ID_Albums">ID_Albums</label>
                                <input type="number" class="form-control" id="ID_Albums" name="ID_Albums"
                                    placeholder="Identificador" required>
                            </div>
                            <div class="form-group">
                                <label for="ID_Artista">ID_Artista</label>
                                <input type="number" class="form-control" id="ID_Artista" name="ID_Artista"
                                    placeholder="Identificador" required>
                            </div>
                            <div class="form-group">
                                <label for="Nombre">Nombre Disco</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre"
                                    placeholder="Nombre Disco" required>
                            </div>
                            <div class="form-group">
                                <label for="Imagen">Ruta Imagen</label>
                                <input type="url" class="form-control" id="Imagen" name="Imagen" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Descripcion">Descripción</label>
                                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="submit" class="btn btn-primary" name="update">Actualizar</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Agregar -->
        <div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="ModalAgregar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalAgregarLabel">Agregar Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/albumController.php" method="POST">

                            <div class="form-group">
                                <label for="ID_Albums">ID_Albums</label>
                                <input type="number" class="form-control" id="ID_Albums" name="ID_Albums"
                                    placeholder="Identificador" required>
                            </div>
                            <div class="form-group">
                                <label for="ID_Artista">ID_Artista</label>
                                <input type="number" class="form-control" id="ID_Artista" name="ID_Artista"
                                    placeholder="Identificador" required>
                            </div>
                            <div class="form-group">
                                <label for="Nombre">Nombre Disco</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre"
                                    placeholder="Nombre Disco" required>
                            </div>
                            <div class="form-group">
                                <label for="Imagen">Ruta Imagen</label>
                                <input type="url" class="form-control" id="Imagen" name="Imagen" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Descripcion">Descripción</label>
                                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="submit" class="btn btn-primary" name="insert">Agregar</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Listar Todo -->
        <div class="modal fade" id="ModalListar" tabindex="-1" aria-labelledby="ModalListarLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalListarLabel">Lista de Álbums</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID_Albums</th>
                                    <th>ID_Artista</th>
                                    <th>Nombre</th>
                                    <th>Ruta Imagen</th>
                                    <th>Descripción</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($albums as $album) {
                                    echo "<tr>";
                                    echo "<td>{$album['ID_Albums']}</td>";
                                    echo "<td>{$album['ID_Artista']}</td>";
                                    echo "<td>{$album['Nombre']}</td>";
                                    echo "<td>{$album['Imagen']}</td>";
                                    echo "<td>{$album['Descripcion']}</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class=" py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Volver Arriba</a>
            </p>

            <p class="mb-0">Proyecto PHP <a href="/">Visita mi portafolio </a>
        </div>
    </footer>




    <!-- 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 -->

</body>

</html>