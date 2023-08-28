CREATE DATABASE teste_login;

use teste_login;

CREATE TABLE tbl_usuario (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user VARCHAR (40) NOT NULL,
    senha VARCHAR (8) NOT NULL
);
