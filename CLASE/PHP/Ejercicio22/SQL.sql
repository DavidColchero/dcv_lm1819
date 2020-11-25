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

INSERT INTO ORDENADORES(Marca, Procesador, Memoria, Perifericos, Precio, Fecha_compra, idUbicacion) VALUES ('Asus', 'Intel Core i7', '16', '1', '650', '2017/05/16', '1');
INSERT INTO ORDENADORES(Marca, Procesador, Memoria, Perifericos, Precio, Fecha_compra, idUbicacion) VALUES ('MSI', 'Intel Core i5', '8', '0', '450', '2017/05/16', '1');
INSERT INTO ORDENADORES(Marca, Procesador, Memoria, Perifericos, Precio, Fecha_compra, idUbicacion) VALUES ('Gigabyte', 'Intel Core i3', '4', '1', '350', '2017/05/16', '1');