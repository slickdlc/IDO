CREATE DATABASE IDO2;
use ido2;
SET sql_mode = '';
Create table users(
iduser int primary key auto_increment,
user varchar(40) unique,
password varchar(200),
state tinyint(1),
remember_token varchar(500),
created_at timestamp,
updated_at timestamp);
create table perfil(
idperfil int primary key auto_increment,
perfil varchar(50) unique);
create table user_perfil(
iduser_perfil int primary key auto_increment,
iduser int,
idperfil int,
constraint fk_userperfil_user foreign key (iduser) references users(iduser),
constraint fk_userperfil_perfil foreign key (idperfil) references perfil(idperfil));

create table modulo(
idmodulo int primary key auto_increment,
modulo varchar(40) unique
);
create table submodulo(
idsubmodulo int primary key auto_increment,
submodulo varchar(40),
idmodulo int,
constraint fk_submodulo_modulo foreign key (idmodulo) references modulo(idmodulo)
);
create table permiso(
idpermiso int primary key auto_increment,
iduser int,
idmodulo int,
constraint fk_permiso_user foreign key (iduser) references users(iduser),
constraint fk_permiso_modulo foreign key (idmodulo) references modulo(idmodulo));

create table producto(
idproducto int primary key auto_increment,
en_venta tinyint(1),
precio_unidad double,
producto_grupo int,
alerta_de_bajo_stock int,
estado tinyint(1),
personalizable tinyint(1),
created_at timestamp,
updated_at timestamp
);
create table atributo_grupo(
idatributo_grupo int primary key auto_increment,
es_grupo_color tinyint(1),
position int,
atributo_grupo varchar(30),
created_at timestamp,
updated_at timestamp
);
create table atributo(
idatributo int primary key auto_increment,
atributo varchar(30),
idatributo_grupo int,
color varchar(7),
position int,
constraint fk_atributo_atributo_grupo foreign key (idatributo_grupo) references atributo_grupo(idatributo_grupo),
created_at timestamp,
updated_at timestamp
);

create table categoria(
idcategoria int primary key auto_increment,
categoria varchar(30),
position int,
es_categoria_raiz tinyint(1),
idcategoria_padre int,
created_at timestamp,
updated_at timestamp
);

create table persona(
idpersona int primary key auto_increment,
nombres varchar(50),
apellidoPaterno varchar(30),
apellidoMaterno varchar(30),
email varchar(100),
iduser int,
constraint fk_persona_user foreign key (iduser) references users(iduser)
);
alter table user_perfil add estado tinyint(1);
alter table perfil add estado tinyint(1);
alter table modulo add icono varchar(50);
alter table submodulo add icono varchar(50);
alter table users add is_admin tinyint(1);
alter table permiso drop FOREIGN KEY fk_permiso_user;
alter table permiso drop iduser;
alter table permiso add idperfil int;
alter table permiso add constraint fk_permiso_perfil foreign key (idperfil) references perfil(idperfil);


create table caracteristica(
idcaracteristica int primary key auto_increment,
caracteristica varchar(30),
position int,
created_at timestamp,
updated_at timestamp);
create table caracteristica_valor(
idcaracteristica_valor int primary key auto_increment,
caracteristica_valor varchar(30),
idcaracteristica int,
position int,
created_at timestamp,
updated_at timestamp,
constraint fk_caracteristica_valor_caracteristica foreign key (idcaracteristica) references caracteristica(idcaracteristica));
alter table submodulo add url varchar(100);
create table producto_atributo(
idproducto_atributo int primary key auto_increment,
precio_unidad double,
alerta_de_bajo_stock int,
idproducto int,
constraint fk_producto_atributo_producto foreign key (idproducto) references producto(idproducto)
);
create table producto_atributo_combinacion(
idatributo int,
idproducto_atributo int,
constraint fk_producto_atributo_combinacion_atributo foreign key (idatributo) references atributo(idatributo),
constraint fk_producto_atributo_combinacion_producto_atributo foreign key (idproducto_atributo) references producto_atributo(idproducto_atributo)
);
create table stock_disponible(
idstock_disponible int primary key auto_increment,
idproducto int,
idproducto_atributo int,
cantidad int,
cantidad_reservada int,
constraint fk_stock_disponible_producto foreign key (idproducto) references producto(idproducto),
constraint fk_stock_disponible_producto_atributo foreign key (idproducto_atributo) references producto_atributo(idproducto_atributo)
);
create table stock_movimiento_razon(
idstock_movimiento_razon int primary key auto_increment,
signo int,
created_at timestamp,
updated_at timestamp,
deleted tinyint(1)
);

create table carro_estado(
idcarro_estado int primary key auto_increment,
carro_estado varchar(30)
);

create table carro(
idcarro int primary key auto_increment,
iduser int,
updated_at timestamp,
created_at timestamp,
total double,
idcarro_estado int,
constraint fk_carro_carro_estado foreign key (idcarro_estado) references carro_estado(idcarro_estado)
);

create table carro_detalle(
idcarro_detalle int primary key auto_increment,
idcarro int, 
idproducto_atributo int,
idproducto int,
cantidad int,
modificado tinyint(1),
constraint fk_carro_detalle_carro foreign key (idcarro) references carro(idcarro),
constraint fk_carro_detalle_producto_atributo foreign key (idproducto_atributo) references producto_atributo(idproducto_atributo),
constraint fk_carro_detalle_producto foreign key (idproducto) references producto(idproducto)
);

create table carro_detalle_modificacion(
idcarro_detalle_modificacion int primary key auto_increment,
urlimg varchar(200),
ancho double,
altura double,
x double,
y double,
idcarro_detalle int,
constraint fk_carro_detalle_modificacion_carro_detalle foreign key (idcarro_detalle) references carro_detalle(idcarro_detalle)
);
create table pedido_estado(
idpedido_estado int primary key auto_increment,
pedido_estado varchar(50)
);
create table pedido(
idpedido int primary key auto_increment,
codigo varchar(30) unique,
idcarro int,
idpedido_estado int,
created_at int,
updated_at int,
constraint fk_pedido_pedido_estado foreign key (idpedido_estado) references pedido_estado(idpedido_estado)
);
create table empleado(
idempleado int primary key auto_increment,
iduser int,
created_at timestamp,
updated_at timestamp,
constraint fk_empleado_user foreign key (iduser) references users(iduser)
);

create table stock_movimiento(
idstock_movimiento int primary key auto_increment,
idstock_disponible int,
idstock_movimiento_razon int,
idpedido int,
idempleado int,
cantidad int,
created_at timestamp,
updated_at timestamp,
signo int,
constraint fk_stock_movimiento_stock_disponible foreign key (idstock_disponible) references stock_disponible(idstock_disponible),
constraint fk_stock_movimiento_stock_movimiento_razon foreign key (idstock_movimiento_razon) references stock_movimiento_razon(idstock_movimiento_razon),
constraint fk_stock_movimiento_pedido foreign key (idpedido) references pedido(idpedido),
constraint fk_stock_movimiento_empleado foreign key (idempleado) references empleado(idempleado)
);
