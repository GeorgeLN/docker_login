USE Usuario;

CREATE TABLE usuario(
    id_Usuario int AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar(50),
    Apellido varchar(50),
    correoElectronico varchar(100),
    Contrasena varchar(50)
);