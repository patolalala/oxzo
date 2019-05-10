create table usuarios (
  id_usuario int not null auto_increment,
  usuario text,
  clave text,
  nombre text,
  rol_usuario int,
  avatar text,
  primary key (id_usuario));

create table region (
  id_region int not null auto_increment,
  nom_region text,
  primary key (id_region));

create table ciudad (
  id_ciudad int not null auto_increment,
  nom_ciudad text,
  id_region int,
  primary key (id_ciudad),
  foreign key (id_region) references region (id_region));

create table cliente (
  id_cliente int not null auto_increment,
  rut_cliente varchar(15),
  razon_cliente text,
  giro_cliente text,
  dir_cliente text,
  id_ciudad int,
  primary key (id_cliente),
  foreign key (id_ciudad) references ciudad (id_ciudad));

create table centro (
  id_centro int not null auto_increment,
  id_cliente int,
  nom_centro text,
  dir_centro text,
  maps_centro text,
  contacto_centro text,
  eml_centro text,
  primary key (id_centro),
  foreign key (id_cliente) references cliente (id_cliente));

create table usr_cliente (
  id_usrcliente int not null auto_increment,
  nom_usrcliente text,
  usr_usrcliente text,
  pas_usrcliente text,
  id_cliente int,
  rol_usrcliente int,
  primary key (id_usrcliente),
  foreign key (id_cliente) references cliente (id_cliente));

create table modulo (
  id_modulo int not null auto_increment,
  nom_modulo text,
  id_centro int,
  primary key (id_modulo),
  foreign key (id_centro) references centro (id_centro));

create table oxyview (
  id_oxyview int not null auto_increment,
  nserie_oxyview varchar(30),
  id_modulo int,
  primary key (id_oxyview),
  foreign key (id_modulo) references modulo(id_modulo));

create table grupo (
  id_grupo int not null auto_increment,
  nom_grupo varchar (20),
  id_oxyview int,
  primary key (id_grupo),
  foreign key (id_oxyview) references oxyview (id_oxyview));

create table tiposensor (
  id_tiposensor int not null auto_increment,
  tiposensor text,
  primary key (id_tiposensor));

create table sensor (
  id_sensor int not null auto_increment,
  nserie_sensor varchar(30),
  id_tiposensor int,
  prof_sensor int,
  id_grupo int,
  primary key (id_sensor),
  foreign key (id_tiposensor) references tiposensor (id_tiposensor),
  foreign key (id_grupo) references grupo(id_grupo));

create table lectura (
  id_lectura int not null auto_increment,
  fecha datetime,
  id_sensor int,
  temperatura int,
  salinidad int,
  saturacion int,
  oxigeno int,
  conexion boolean,
  voltaje int,
  primary key (id_lectura),
  foreign key (id_sensor) references sensor (id_sensor));

create table empresa (
  id_empresa int not null,
  nom_empresa text,
  slogan_empresa text,
  dir_empresa text,
  primary key (id_empresa));

create table parametros (
  id int not null,
  min_temp int,
  max_temp int,
  min_sal int,
  max_sal int,
  min_sat int,
  max_sat int,
  min_oxy int,
  max_oxy int,
  primary key (id));

create table tipo_alrma (
  id_tipoalarma int not null auto_increment,
  tipoalarma text,
  primary key (id_tipoalarma));

create table log_alarma (
  id_logalarma int not null auto_increment,
  id_alarma int,
  fecha_alarma datetime,
  id_lectura int,
  id_sensor int,
  primary key (id_logalarma),
  foreign key (id_alarma) references tipo_alrma (id_tipoalarma),
  foreign key (id_lectura) references lectura (id_lectura),
  foreign key (id_sensor) references sensor (id_sensor));
