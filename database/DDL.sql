CREATE TABLE restaurantes(
    nit_restaurante varchar(25) not null unique,
	PRIMARY KEY (nit_restaurante)
);

CREATE TABLE empleados(
    documento_mesero varchar(25) not null unique ,
    nombres VARCHAR(100) not null,
    primer_apellido VARCHAR(50) not null,
    segundo_apellido VARCHAR(50) not null,
    fecha_nacimiento date not null,
    nit_restaurante varchar(50) not null,
    tipo varchar(10) not null,
	PRIMARY KEY (documento_mesero)
);


CREATE TABLE pedidos (
	cod_pedido int AUTO_INCREMENT not null,
    numero_mesa int not null,
    documento_mesero VARCHAR (25) not null,
    PRIMARY KEY (cod_pedido)
);

CREATE TABLE facturas (
	cod_factura int AUTO_INCREMENT not null,
    fecha date not null,
    propina double not null,
    precio_total double not null,
    cod_pedido int not null,
    PRIMARY KEY (cod_factura)
);

CREATE TABLE pedido_producto (
	cod_pedido_producto int AUTO_INCREMENT not null,
    cod_comida int not null,
    cod_pedido int not null,
    cod_bebida int not null,
    PRIMARY KEY (cod_pedido_producto)
);

CREATE TABLE comidas(
    cod_comida int AUTO_INCREMENT not null,
    nombre_comida VARCHAR(100) not null,
    descripcion VARCHAR(100) not null,
    tipo varchar(100) not null,
    precio double not null,
	PRIMARY KEY (cod_comida)
);

CREATE TABLE bebidas(
    cod_bebida int AUTO_INCREMENT not null,
    nombre_bebida VARCHAR(100) not null,
    tipo varchar(100) not null,
    precio double not null,
	PRIMARY KEY (cod_bebida)
);


ALTER TABLE `empleados` ADD CONSTRAINT `fk_empleado_restaurante` FOREIGN KEY (`nit_restaurante`)REFERENCES `restaurantes`(`nit_restaurante`)ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE empleados ADD foto VARCHAR(255) NULL;

ALTER TABLE `pedidos` ADD CONSTRAINT `fk_pedidos_empleado` FOREIGN KEY (`documento_empleado`) REFERENCES `empleados`(`documento_empleado`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `pedido_producto` ADD CONSTRAINT `FK_pedidos_productos_pedidos` FOREIGN KEY (`cod_pedido`) REFERENCES `pedidos`(`cod_pedido`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `pedido_producto` ADD CONSTRAINT `FK_pedidos_productos_bebidas` FOREIGN KEY (`cod_bebida`) REFERENCES `bebidas`(`cod_bebida`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `pedido_producto` ADD CONSTRAINT `FK_pedidos_productos_comidas` FOREIGN KEY (`cod_comida`) REFERENCES `comidas`(`cod_comida`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `facturas` ADD CONSTRAINT `FK_facturas_pedidos` FOREIGN KEY (`cod_pedido`) REFERENCES `pedidos`(`cod_pedido`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE comidas ADD foto VARCHAR(255) NULL;
ALTER TABLE bebidas ADD foto VARCHAR(255) NULL;

ALTER TABLE restaurantes ADD nombre VARCHAR(255) NULL;
