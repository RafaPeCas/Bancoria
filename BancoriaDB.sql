DROP DATABASE IF EXISTS bancoriaDB;
CREATE DATABASE bancoriaDB;
USE bancoriaDB;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    fecha_registro DATE NOT NULL,
    pass VARCHAR(100) NOT NULL
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

INSERT INTO usuarios (nombre, fecha_registro, pass) VALUES
("admin", "2023-11-27", "admin"),
("Torovi", "2023-11-27", "marica");

select * from usuarios;