<?php


function openBd() {

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
   
    $conexion = new PDO("mysql:host=$servername;dbname=colecciones", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");

    return $conexion;
   
}


function closeBd(){

    return null;
}


function SelectAlbunes()
{

    $conexion = openBd();
    $sentenciaText = "SELECT albums.*, artista.Nombre as NombreArtista FROM colecciones.albums
    join artista
    On albums.ID_Artista=artista.ID_Artista";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();
    $conexion = closeBD();
    return $resultado;

}


function ListarArtista()
{
    $conexion = openBd();
    $sentenciaText = "SELECT ID_Artista, Nombre FROM artista"; 
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();
    $conexion = closeBD();
    return $resultado;

}




function SelectCanciones($idAlbum)
{
    $conexion = openBd();
    $sentenciaText = "SELECT * , canciones.Nombre as Cancion from albums join canciones
    on albums.ID_Albums = canciones.ID_Albums
    where albums.ID_Albums = " . $idAlbum;
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();

    $conexion = closeBD();
    return $resultado;

}

function SelectCancionesEstilos($idAlbum)
{
    $conexion = openBd();
    $sentenciaText = "SELECT canciones.Nombre as Cancion, GROUP_CONCAT(estilos.Nombre) as Estilos FROM albums
    JOIN canciones ON albums.ID_Albums = canciones.ID_Albums
    JOIN estilos_canciones ON canciones.ID_Canciones = estilos_canciones.ID_Canciones
    JOIN estilos ON estilos.ID_Estilos = estilos_canciones.ID_Estilos
    WHERE albums.ID_Albums = " . $idAlbum . "
    GROUP BY albums.Nombre, canciones.Nombre";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBD();
    return $resultado;
}


function insertAlbum($ID_Artista, $Nombre, $Imagen, $Descripcion)
{
    $conexion = openBd();
    $ruta_archivo = "../assets/img/";

    
    $Imagen ="./img/" . $_FILES['imagen']['name'];
    $archivo_subido = $ruta_archivo . $_FILES['imagen']['name'];
    
    move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);


    $sentenciaText = "insert into albums (ID_Artista, Nombre, Imagen, Descripcion) values ( :ID_Artista, :Nombre, :Imagen, :Descripcion)";
    $sentencia = $conexion->prepare($sentenciaText);
   
    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Imagen', $Imagen);
    $sentencia->bindParam(':Descripcion', $Descripcion);
    $sentencia->execute();
    $conexion = closeBd();


}


function borrarAlbum($ID_Albums)
{
    $conexion = openBd();
    $sentenciaText = "DELETE FROM albums WHERE ID_Albums = :ID_Albums";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Albums', $ID_Albums);
    $sentencia->execute();
    $conexion = closeBd();
}

function actualizarAlbum($ID_Albums, $ID_Artista, $Nombre, $Imagen, $Descripcion)
{
    $conexion = openBd();
    $sentenciaText = "UPDATE albums SET ID_Artista = :ID_Artista, Nombre = :Nombre, Imagen = :Imagen, Descripcion = :Descripcion WHERE ID_Albums = :ID_Albums";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Albums', $ID_Albums);
    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Imagen', $Imagen);
    $sentencia->bindParam(':Descripcion', $Descripcion);

    $sentencia->execute();

    $conexion = closeBd();
}

?>

