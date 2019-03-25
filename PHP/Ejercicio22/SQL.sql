CREATE TABLE IF NOT EXISTS UBICACIONES (
idUbicacion INT AUTO_INCREMENT,
Nombre VARCHAR(15),
Descripcion VARCHAR(20),
Localizacion_maps VARCHAR(15),
PRIMARY KEY (idUbicacion)
);

CREATE TABLE IF NOT EXISTS ORDENADORES (
idOrdenador INT AUTO_INCREMENT,
Marca VARCHAR(15),
Procesador VARCHAR(20),
Memoria INT,
Perifericos BOOLEAN,
Precio INT,
Fecha_compra DATE,
idUbicacion INT,
PRIMARY KEY (idOrdenador),
CONSTRAINT fk_ubicaciones FOREIGN KEY (idUbicacion) REFERENCES UBICACIONES (idUbicacion)
);