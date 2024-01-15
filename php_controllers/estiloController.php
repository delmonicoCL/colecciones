<?php

session_start();

require_once('../php_librarys/bd.php');


if (isset($_POST['insert'])) {

    insertEstilo($_POST['Nombre'], $_POST['Origen']);

    if (isset($_SESSION['error'])) {
        header('Location: ../estilos.php');
        exit();
    } else {
        header('Location: ../estilos.php');
        exit();
    }
} elseif (isset($_POST['delete'])) {
    printf("Aqui2");
    borrarArtista($_POST['ID_Artista']);
    header('Location: ../estilos.php');
    exit();

} elseif (isset($_POST['update'])) {

    $idArtista = $_POST['ID_Artista'];
    $nuevoNombre = $_POST['Nombre'];
    actualizarArtista($idArtista, $nuevoNombre);
    header('Location: ../estilos.php');
    exit();
}


?>