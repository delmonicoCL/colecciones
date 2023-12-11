<?php

session_start();

require_once('../php_librarys/bd.php');


if (isset($_POST['insert'])) {

    insertAlbum($_POST['ID_Albums'], $_POST['ID_Artista'], $_POST['Nombre'], $_POST['Imagen'], $_POST['Descripcion']);

    if (isset($_SESSION['error'])) {
        header('Location: ../index.php');
        exit();
    } else {
        header('Location: ../index.php');
        exit();
    }

  

} 

elseif (isset($_POST['delete'])) {
    borrarAlbum($_POST['ID_Albums']);
    header('Location: ../index.php');
    exit();
}

elseif (isset($_POST['update'])) {
    actualizarAlbum($_POST['ID_Albums'], $_POST['ID_Artista'], $_POST['Nombre'], $_POST['Imagen'], $_POST['Descripcion']);
    header('Location: ../index.php');
    exit();
}


?>