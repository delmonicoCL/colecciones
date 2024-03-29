INSERT INTO Estilos (Nombre, Origen) VALUES
('Pop', 'Usa'),
('Rock', 'UK'),
('Electronico', 'Alemania');

INSERT INTO Artista (Nombre) VALUES
('Queen'),
('Red HOT'),
('Paul van Dyk');

INSERT INTO Albums (ID_Artista, Nombre, Descripcion, Imagen) VALUES
(1, 'Queen II', 'Queen II es el segundo álbum de estudio por la banda británica Queen. 
Fue publicado el 8 de marzo de 1974 por EMI Records en el Reino Unido y por Elektra Records 
en los Estados Unidos', 'https://acortar.link/4uXtDF');

INSERT INTO Albums (ID_Artista, Nombre, Descripcion, Imagen) VALUES
(2, 'Californication', 'Californication es el nombre del séptimo álbum de 
estudio de la banda estadounidense de rock alternativo y funk rock Red Hot 
Chili Peppers.', 'https://acortar.link/qn9zE3');

INSERT INTO Albums (ID_Artista, Nombre, Descripcion, Imagen) VALUES
(3, 'Evolution', 'Evolution es el sexto álbum de estudio del DJ alemán Paul van Dyk.​ 
Fue publicado el 3 de abril de 2012 bajo el sello discográfico Vandit el cual 
pertenece a Paul van Dyk.', 'https://acortar.link/kaqIQT');

INSERT INTO Canciones (ID_Albums, Nombre, Duracion) VALUES
(1,'NeverMore','4:30'),
(2,'Around the World','4:02'),
(3,'LOVE','6:10');

INSERT INTO Estilos_Canciones (ID_Canciones, ID_Estilos) VALUES 
(1, 2),
(2, 2),
(3, 3);
