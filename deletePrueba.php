<?php

session_start();

require_once('./php_librarys/bd.php');


if (isset($_GET['ID_Albums'])) {
    $ID_Albums = $_GET['ID_Albums'];
    borrarAlbum($ID_Albums);
    header('Location: ./index.php');
    exit();
}
?>