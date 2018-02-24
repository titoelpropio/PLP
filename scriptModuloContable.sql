CREATE TABLE moneda(
id int(11) primary key auto_increment,
nombre varchar(25) DEFAULT NULL,
abreviatura varchar(5) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

CREATE TABLE gestion(
id int(11) primary key auto_increment,
fecha_inicio date DEFAULT NULL,
fecha_fin date DEFAULT NULL,
estado tinyint(4) NOT NULL,
nombre_gestion varchar(25) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

CREATE TABLE categoriacuenta(
id int(11) primary key auto_increment,
nombre varchar(50) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

CREATE TABLE asiento(
id int(11) primary key auto_increment,
nro_asiento int(11) DEFAULT NULL,
tipo tinyint(4) DEFAULT NULL,
glosa varchar(500) DEFAULT NULL,
fecha_creacion TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
fecha_transaccion datetime NULL DEFAULT CURRENT_TIMESTAMP,
cambio_tipo decimal(6,2) NOT NULL,
estado tinyint(4) DEFAULT NULL,
motivo_anulado varchar(200) DEFAULT NULL,
id_categoria int(11) DEFAULT NULL,
id_gestion int(11) DEFAULT NULL,
id_tipo_cambio int(11) DEFAULT NULL,
id_usuario int(11) NOT NULL,
id_moneda int(11) DEFAULT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_categoria) references categoriaCuenta(id),
foreign key(id_gestion) references gestion(id),
foreign key(id_tipo_cambio) references tipocambio(id),
foreign key(id_usuario) references users(idEmpleado),
foreign key(id_moneda) references moneda(id)
);

CREATE TABLE cuenta(
id int(11) primary key auto_increment,
codigo varchar(25) NOT NULL,
id_padre int(11) NOT NULL,
hijo int(11) NOT NULL,
nombre varchar(60) DEFAULT NULL,
estado tinyint(4) DEFAULT NULL,
utilizable tinyint(4) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

CREATE TABLE centrocosto(
id int(11) primary key auto_increment,
codigo varchar(25) NOT NULL,
id_padre int(11) NOT NULL,
hijo int(11) NOT NULL,
nombre varchar(60) DEFAULT NULL,
estado tinyint(4) DEFAULT NULL,
utilizable tinyint(4) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

CREATE TABLE cuentaautomatica(
id int(11) primary key auto_increment,
nombre varchar(100) NOT NULL,
id_cuenta int(11) NOT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_cuenta) references cuenta(id)
);

CREATE TABLE cuentagrupo(
id int(11) primary key auto_increment,
nombre varchar(100) NOT NULL,
descripcion varchar(100) NOT NULL,
id_cuenta int(11) NOT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_cuenta) references cuenta(id)
);

CREATE TABLE cuentaimpuesto(
id int(11) primary key auto_increment,
nombre varchar(100) NOT NULL,
porcentaje decimal(4,2) NOT NULL,
descripcion varchar(100) NOT NULL,
id_cuenta int(11) NOT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_cuenta) references cuenta(id)
);

CREATE TABLE depreciacion(
id int(11) primary key auto_increment,
id_cuenta int(11) NOT NULL,
vida_util int(11) NOT NULL,
depreciacion_anual decimal(6,2) NOT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_cuenta) references cuenta(id)
);

CREATE TABLE detalle(
id int(11) primary key auto_increment,
id_cuenta int(11) DEFAULT NULL,
id_asiento int(11) DEFAULT NULL,
nro_detalle int(11) DEFAULT NULL,
tipo tinyint(4) DEFAULT NULL,
montoSus decimal(15,2) DEFAULT NULL,
montoBs decimal(15,2) DEFAULT NULL,
id_centro_costo int(11) DEFAULT NULL,
deleted_at datetime DEFAULT NULL,
foreign key(id_cuenta) references cuenta(id),
foreign key(id_asiento) references asiento(id),
foreign key(id_centro_costo) references centrocosto(id)
);

CREATE TABLE ufv(
id int(11) primary key auto_increment,
fecha date DEFAULT NULL,
valor decimal(8,4) DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

--Agregar IdAsiento a Tabla Venta
--agregar tipoCuenta y moneda a tabla cuentabanco