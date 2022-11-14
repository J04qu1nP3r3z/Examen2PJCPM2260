/*Creamos la BD*/
create database Examen2p;
/*se utiliza la BD*/
use Examen2p;
/*Creamos la tabla en la nueva BD*/
create table Datos(
  id bigint auto_increment primary key,
  Nombre Varchar(100) null,
  Edad int null,
  Correo varchar(100)
 );
/*asignamos un usuario y contraseña a la nueva bd*/
GRANT ALL PRIVILEGES on Examen2p.* to 'JCPM2260'@'localhost' IDENTIFIED BY 'J04qu1nP3r3z';
