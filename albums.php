<?php

    require_once('./php_library/bd.php');
    $albums = SelectAlbunes();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>ALBUMS</title>

    <style>
        .card-container {
            margin-bottom: 20px;
        }

        @media (min-width: 576px) {
            .card-container {
                width: calc(33.3333% - 20px);
                margin-right: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <?php foreach ($albums as $album) { ?>
                <div class="card card-container">
                    <img src="<?php echo $album['Imagen']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $album['Nombre']; ?></h5>
                        <p class="card-text"><?php echo $album['Descripcion']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ID Artista: <?php echo $album['ID_Artista']; ?></li>
                        <li class="list-group-item">ID Album: <?php echo $album['ID_Albums']; ?></li>
                    </ul>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Modificar</button>
                        <button type="button" class="btn btn-secondary">Abrir</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>