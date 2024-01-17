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
    <link rel="stylesheet" href="style.css">

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

    <main class="">

        <section class="imagenHeader ">
            <div class="row py-lg-5 ">
                <div class="col-lg-6 col-md-8 mx-auto ">
                    <h1 class="fw-light d-flex justify-content-center">ESTILOS</h1>
                    <p class="lead text-center d-flex justify-content-center">Bienvenido a Colecciones, la plataforma para explorar
                        y descubrir los mejores álbumes de música de todos los tiempos. Descubre joyas atemporales que
                        han dejado una marca en la historia.</p>
                    <p class="d-flex justify-content-center">
                        <a href="index.php" class="btn btn-primary btn-lg mr-4">ÁLBUMES</a>
                        <a href="artistas.php" class="btn btn-secondary btn-lg mr-4">ARTISTAS</a>
                        <a href="canciones.php" class="btn btn-success btn-lg mr-4">CANCIONES</a>
                        <a href="estilos.php" class="btn btn-warning btn-lg mr-4">ESTILOS</a>
                    </p>

                </div>
            </div>
        </section>

        <!-- Opciones Menu -->
        <div id="menuAjustes">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4 py-3 mt-4">
                    <h2 class="text-white d-flex justify-content-center">Opciones Estilos</h2>

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

        <script>
            function eliminarAlbum(albumID) {
                if (confirm('¿Estás seguro de que deseas eliminar este álbum?')) {
                    // Enviar solicitud de eliminación a albumController.php
                    window.location.href = './php_controllers/albumController.php?delete=' + albumID;
                }
            }
        </script>

        <div class="container my-5">
            <h5 class="display-5 d-flex justify-content-center ">Lista de Estilos</h5>
        </div>
        <div class="listados container d-flex justify-content-center">
            <table class="table my-5">
                <thead class="table-dark">
                    <tr>
                        <th>ID_Estilos</th>
                        <th>Nombre</th>
                        <th>Origen</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $estilos = ListarEstilo();
                    foreach ($estilos as $estilo) {
                        echo "<tr>";
                        echo "<td>{$estilo['ID_Estilos']}</td>";
                        echo "<td>{$estilo['Nombre']}</td>";
                        echo "<td>{$estilo['Origen']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>

        <!-- Modal Eliminar -->

        <div class="modal fade" id="ModalEliminar" tabindex="-1" aria-labelledby="ModalEliminarLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalEliminarLabel">Eliminar Estilo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/estiloController.php" method="POST">

                            <div class="form-group">

                                <?php $estilos = ListarEstilo(); ?>
                                <label for="ID_Estilos">Estilo</label>
                                <select class="form-select" name="ID_Estilos">
                                    <?php foreach ($estilos as $estilo): ?>
                                        <option value="<?php echo $estilo['ID_Estilos']; ?>">
                                            <?php echo $estilo['Nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
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
                        <h5 class="modal-title" id="ModalActualizarLabel">Actualizar Nombre Estilo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/estiloController.php" method="POST">

                            <div class="form-group">

                                <?php $estilos = ListarEstilo(); ?>
                                <label for="ID_Estilos">Artista</label>
                                <select class="form-select" name="ID_Estilos">
                                    <?php foreach ($estilos as $estilo): ?>
                                        <option value="<?php echo $estilo['ID_Estilos']; ?>">
                                            <?php echo $estilo['Nombre']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Nombre">Nuevo Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder=""
                                    required>
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
                        <h5 class="modal-title" id="ModalAgregarLabel">Agregar Estilo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php_controllers/estiloController.php" method="POST"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="Nombre">Nuevo Estilo</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre"
                                    required>
                            </div>
                             <div class="form-group">
                            <label for="Nombre">Origen</label>
                            <input type="text" class="form-control" id="Nombre" name="Origen" placeholder=""
                                required>
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



    </main>

    <footer class=" py-5 bg-dark">
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