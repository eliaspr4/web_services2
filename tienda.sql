drop database if exists tienda;

create database if not exists tienda character set utf8;

use tienda;


create table productos(

id_producto tinyint(2) not null auto_increment primary key,

producto varchar(30) not null,

descripcion varchar(35) not null,

existencias tinyint(3) not null,

precio_venta smallint(5) not null,

precio_compra smallint(5) not null

)
engine InnoDB;



insert into productos(producto, descripcion, existencias, precio_venta, precio_compra) values
('Condones', 'Condones texturizados', '69','20','35'),
('Jabón asepxia', 'Jabón asepxia anti-acné', '50','30','45'),
('Jarabe para la tos', 'Jarabe de miel', '100','25','34'),
('Pasta de dientes', 'Pasta de dientes Colgate', '50','20','30'),
('Toallas femeninas', 'Toallas Cotex', '69','18','28');