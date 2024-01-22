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

function SelectAlbum($idAlbum)
{
    $conexion = openBd();
      $sentenciaText = "SELECT albums.*, artista.Nombre FROM colecciones.albums
    join artista
    On albums.ID_Artista=artista.ID_Artista
    where albums.ID_Albums = " . $idAlbum;
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

function ListarEstilo()
{
    $conexion = openBd();
    $sentenciaText = "SELECT ID_Estilos, Nombre, Origen FROM estilos";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();
    $conexion = closeBD();
    return $resultado;

}

function ListarCanciones()
{
    $conexion = openBd();
    $sentenciaText = "SELECT canciones.Nombre AS Cancion, albums.Nombre AS Album FROM colecciones.canciones
    JOIN colecciones.albums ON canciones.ID_Albums = albums.ID_Albums";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();
    $conexion = closeBD();
    return $resultado;

}

function ListarCancion()
{
    $conexion = openBd();
    $sentenciaText = "SELECT ID_Canciones, ID_Albums, Nombre, Duracion FROM canciones"; 
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();
    $conexion = closeBD();
    return $resultado;

}

function ListarEstilosCanciones()
{
    $conexion = openBd();
    $sentenciaText = "SELECT Id_Canciones, Id_Estilos FROM estilos_canciones"; 
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


function SelectTodasLasCancionesYEstilos() {
    $conexion = openBd();
    $sentenciaText = "SELECT albums.Nombre as Album, canciones.Nombre as Cancion, GROUP_CONCAT(estilos.Nombre) as Estilos FROM albums
    JOIN canciones ON albums.ID_Albums = canciones.ID_Albums
    JOIN estilos_canciones ON canciones.ID_Canciones = estilos_canciones.ID_Canciones
    JOIN estilos ON estilos.ID_Estilos = estilos_canciones.ID_Estilos
    GROUP BY albums.Nombre, canciones.Nombre";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBD();
    return $resultado;
}




function insertAlbum($ID_Artista, $Nombre, $targetFile, $Descripcion)
{
    $conexion = openBd();

    // Verifica si se ha enviado un archivo
    if (isset($_FILES["Imagen"])) {
        
        $rutaImgBD = "./assets/img/" . basename($_FILES["Imagen"]["name"]); // Ruta donde se guardará la ruta en BD
        $rutaImgLocal = "../assets/img/" . basename($_FILES["Imagen"]["name"]); // Ruta que mueve el documento
        // Mueve el archivo subido a la ubicación deseada
        if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $rutaImgLocal)) { 
            // La imagen se ha guardado correctamente
            // Ahora puedes guardar la URL de la imagen en tu base de datos
            // y realizar otras operaciones necesarias
        } else {
            echo "Error al subir la imagen.";
        }
    }

    $sentenciaText = "INSERT INTO albums (ID_Artista, Nombre, Imagen, Descripcion) VALUES (:ID_Artista, :Nombre, :Imagen, :Descripcion)";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Imagen', $rutaImgBD);
    $sentencia->bindParam(':Descripcion', $Descripcion);
    $sentencia->execute();

    // Cierra la conexión a la base de datos
    $conexion = closeBd();
}


function insertArtista($Nombre)
{
    $conexion = openBd();
    $sentenciaText = "INSERT INTO artista (Nombre) VALUES (:Nombre)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->execute();
    // Cierra la conexión a la base de datos
    $conexion = closeBd();
}


function insertCancion($ID_Albums, $Nombre, $Duracion)
{
    $conexion = openBd();
    $sentenciaText = "INSERT INTO canciones (ID_Albums, Nombre, Duracion) VALUES (:ID_Albums, :Nombre, :Duracion)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Albums', $ID_Albums);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Duracion', $Duracion);
    $sentencia->execute();
    // Cierra la conexión a la base de datos
    $conexion = closeBd();
}

function insertCancionConEstilo($ID_Albums, $Nombre, $Duracion, $Id_Estilos)
{
    try{
        $conexion = openBd();
        $conexion->beginTransaction();
        $sentenciaText = "INSERT INTO canciones (ID_Albums, Nombre, Duracion) VALUES (:ID_Albums, :Nombre, :Duracion)";
    
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':ID_Albums', $ID_Albums);
        $sentencia->bindParam(':Nombre', $Nombre);
        $sentencia->bindParam(':Duracion', $Duracion);
        $sentencia->execute();

        $idCancion = $conexion->lastInsertId();
        $sentenciaText = "INSERT INTO estilos_canciones (Id_Canciones, Id_Estilos) VALUES (:Id_Canciones, :Id_Estilos)";

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':Id_Canciones', $idCancion);
        $sentencia->bindParam(':Id_Estilos', $Id_Estilos);
        $sentencia->execute();
        // Cierra la conexión a la base de datos
      
        $conexion->commit();


      
    
    } catch (Exception $e) {
        $conexion->rollBack();
        echo "Fallo: " . $e->getMessage();
    }

    $conexion = closeBd();
}





function insertEstilo($Nombre, $Origen)
{
    $conexion = openBd();
    $sentenciaText = "INSERT INTO estilos (Nombre, Origen) VALUES (:Nombre, :Origen)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Origen', $Origen);
    $sentencia->execute();
    // Cierra la conexión a la base de datos
    $conexion = closeBd();
}

function insertEstiloCanciones($Nombre)
{
    $conexion = openBd();
    $sentenciaText = "INSERT INTO estilos_canciones (Id_Canciones, Id_Estilos) VALUES (:Id_Canciones, :Id_Estilos)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':Id_Canciones', $Id_Canciones);
    $sentencia->bindParam(':Id_Estilos', $Id_Estilos);
    $sentencia->execute();
    // Cierra la conexión a la base de datos
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


function borrarArtista($ID_Artista)
{
    $conexion = openBd();
    $sentenciaText = "DELETE FROM artista WHERE ID_Artista = :ID_Artista";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->execute();
    $conexion = closeBd();
}

function borrarEstilo($ID_Estilos)
{
    $conexion = openBd();
    $sentenciaText = "DELETE FROM estilos WHERE ID_Estilos = :ID_Estilos";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Estilos', $ID_Estilos);
    $sentencia->execute();
    $conexion = closeBd();
}

function borrarCancion($ID_Canciones)
{
    $conexion = openBd();
    $sentenciaText = "DELETE FROM canciones WHERE ID_Canciones = :ID_Canciones";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':ID_Canciones', $ID_Canciones);
    $sentencia->execute();
    $conexion = closeBd();
}

function actualizarAlbum($ID_Artista, $Nombre, $Imagen, $Descripcion)
{
    $conexion = openBd();

    // Verifica si se ha enviado un archivo
    if (isset($_FILES["Imagen"])) {
        $rutaImgBD = "./assets/img/" . basename($_FILES["Imagen"]["name"]);
        $rutaImgLocal = "../assets/img/" . basename($_FILES["Imagen"]["name"]);

        if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $rutaImgLocal)) {
            // La imagen se ha guardado correctamente
        } else {
            echo "Error al subir la imagen.";
        }
    }

    // La condición WHERE depende de tu estructura de base de datos y cómo identificas el registro que deseas actualizar.
    $sentenciaText = "UPDATE albums SET ID_Artista = :ID_Artista, Nombre = :Nombre, Imagen = :Imagen, Descripcion = :Descripcion WHERE ID_Albums = :ID_Albums";
    $sentencia = $conexion->prepare($sentenciaText);
    
    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':Imagen', $rutaImgBD);
    $sentencia->bindParam(':Descripcion', $Descripcion);
    $sentencia->bindParam(':ID_Albums', $ID_Albums);  // Agregamos el parámetro para la condición WHERE
    
    $sentencia->execute();
    // Cierra la conexión a la base de datos
    $conexion = closeBd();
}

function actualizarArtista($ID_Artista, $Nombre)
{
    $conexion = openBd();
    $sentenciaText = "UPDATE artista SET Nombre = :Nombre WHERE ID_Artista = :ID_Artista";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->bindParam(':Nombre', $Nombre);
    $sentencia->bindParam(':ID_Artista', $ID_Artista);
    $sentencia->execute();
    $conexion = closeBd();
}



