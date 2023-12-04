DROP DATABASE IF EXISTS bancoriaDB;
CREATE DATABASE bancoriaDB;
USE bancoriaDB;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    IBAN VARCHAR(24) NOT NULL,
    pass VARCHAR(15) NOT NULL,
    DNI VARCHAR(9) NOT NULL,
    email VARCHAR(90) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    direccion VARCHAR(80) NOT NULL,
    cp NUMERIC NOT NULL,
    ciudad VARCHAR(50) NOT NULL,
    provincia VARCHAR(50) NOT NULL,
    pais VARCHAR(50) NOT NULL,
    fecha_registro DATETIME NOT NULL
);

CREATE TABLE cuentas_bancarias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    iban VARCHAR(34) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE movimientos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cuenta INT,
    tipo_movimiento VARCHAR(50) NOT NULL,
    monto DECIMAL(10, 2) NOT NULL,
    fecha_hora TIMESTAMP NOT NULL,
    FOREIGN KEY (id_cuenta) REFERENCES cuentas_bancarias(id)
);

CREATE TABLE chat (
	id INT AUTO_INCREMENT PRIMARY KEY,
	id_usuario_1 int,
	id_usuario_2 int,
	FOREIGN KEY (id_usuario_1) REFERENCES usuario(id),
	FOREIGN KEY (id_usuario_2) REFERENCES usuario(id)
);

CREATE TABLE mensaje (
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_chat int,
    emisor int,
    fecha_msg DATETIME,
	mensaje VARCHAR(500),
    FOREIGN KEY (id_chat) REFERENCES chat(id),
    FOREIGN KEY (emisor) REFERENCES usuario(id)
);

INSERT INTO usuarios (nombre, apellidos,IBAN, pass, DNI, email, fecha_nacimiento, direccion, cp, ciudad, provincia, pais, fecha_registro) VALUES
("admin","","","admin", "","","2023-11-27","","","","","","2023-11-27"),
("torovi","torover torover","101010101010","torovi", "20062277k","torovi@torovi.com","2023-12-04","leon XIII","41500","Sevilla","Sevilla","España","2023-12-04"),
("torovi2","torover torover2","1010101010101","torovi2", "20062277k","torovi@torovi.com","2023-12-04","leon XIII","41500","Sevilla","Sevilla","España","2023-12-04");

INSERT INTO chat (id_usuario_e, id_usuario_r) VALUES (2, 3);

