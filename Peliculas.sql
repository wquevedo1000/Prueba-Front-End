CREATE DATABASE dbpeliculas;
USE DATBASE dbpeliculas;

CREATE TABLE TblUsuario(
	US_Id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	Us_PNombre Varchar(30) NOT NULL,
	Us_SNombre Varchar(30),
	Us_PApellido Varchar(30) NOT NULL,
	Us_SApellido Varchar(30) NOT NULL,
	Us_Genero Varchar(20);
	Us_Pais Varchar(30),
    Us_Estado Varchar(40),
	Us_Ciudad Varchar(40),
	Us_Telefono Varchar(10),
	Us_Email Varchar(50),
	US_Contraseña Varchar(200) NOT NULL);

