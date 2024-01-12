CREATE DATABASE colecciones;
USE colecciones;

CREATE TABLE Artista (
    ID_Artista INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255)
);

CREATE TABLE Albums (
    ID_Albums INT PRIMARY KEY AUTO_INCREMENT,
    ID_Artista INT,
    Nombre VARCHAR(255),
    Descripcion TEXT,
    Imagen VARCHAR(255),
    FOREIGN KEY (ID_Artista) REFERENCES Artista(ID_Artista)
);

CREATE TABLE Canciones (
    ID_Canciones INT PRIMARY KEY AUTO_INCREMENT,
    ID_Albums INT,
    Nombre VARCHAR(255),
    Duracion TIME,
    FOREIGN KEY (ID_Albums) REFERENCES Albums(ID_Albums)
);

CREATE TABLE Estilos (
    ID_Estilos INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255),
    Origen VARCHAR(255)
);

CREATE TABLE Estilos_Canciones (
    ID_Canciones INT,
    ID_Estilos INT,
    PRIMARY KEY (ID_Canciones, ID_Estilos),
    FOREIGN KEY (ID_Canciones) REFERENCES Canciones(ID_Canciones),
    FOREIGN KEY (ID_Estilos) REFERENCES Estilos(ID_Estilos)
);
