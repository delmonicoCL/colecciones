<?php

session_start();

require_once('../php_librarys/bd.php');


if (isset($_POST['insert'])) {

    insertAlbum( $_POST['ID_Artista'], $_POST['Nombre'], $_POST['Imagen'], $_POST['Descripcion']);

    if (isset($_SESSION['error'])) {
        header('Location: ../index.php');
        exit();
    } else {
        header('Location: ../index.php');
        exit();
    }
} 

elseif (isset($_POST['delete'])) {
    $ID_Albums = $_POST['ID_Albums'];
    $ID_Albums = $_POST['ID_Albums'];

    // Mostrar un cuadro de confirmación en JavaScript
    echo '<script>
            var confirmacion = confirm("¿Estás seguro que quieres eliminar?");
            if (confirmacion) {
                window.location.href = "../deletePrueba.php?ID_Albums=' . $ID_Albums . '";
            } else {
                window.location.href = "../index.php";
            }
          </script>';
    exit();
}






elseif (isset($_POST['update'])) {
    actualizarAlbum($_POST['ID_Artista'], $_POST['Nombre'], $_POST['Imagen'], $_POST['Descripcion']);
    header('Location: ../index.php');
    exit();
}


?>