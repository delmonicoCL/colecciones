<?php

session_start();

require_once('../php_librarys/bd.php');


if (isset($_POST['insert'])) {

    //insertCancion($_POST['Id_Albums'], $_POST['Nombre'], $_POST['Duracion']);
    //insertEstiloCanciones($_POST['Id_Canciones'], $_POST['Id_Estilos']);


    insertCancionConEstilo($_POST['ID_Albums'], $_POST['Nombre'], $_POST['Duracion'], $_POST['ID_Estilos']);

    if (isset($_SESSION['error'])) {
        header('Location: ../canciones.php');
        exit();
    } else {
        header('Location: ../canciones.php');
        exit();
    }
} elseif (isset($_POST['delete'])) {
    printf("Aqui2");
    borrarCancion($_POST['ID_Canciones']);
    header('Location: ../canciones.php');
    exit();
} elseif (isset($_POST['update'])) {
    actualizarAlbum($_POST['ID_Canciones'], $_POST['ID_Artista'], $_POST['Nombre'], $_POST['Imagen'], $_POST['Descripcion']);
    header('Location: ../canciones.php');
    exit();
}


?>