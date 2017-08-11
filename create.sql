create table admin_empresa
(
	id_empresa serial not null
		constraint admin_empresa_pkey
			primary key,
	nombre varchar(255) not null,
	descripcion VARCHAR (500)
)
;

create table admin_estructura
(
	id_estructura serial not null
		constraint admin_estructura_pkey
			primary key,
	nombre varchar(255) not null,
	descripcion VARCHAR (500),
	id_empresa integer not null
		constraint admin_empresa_pkey
			references admin_empresa
				on update cascade
)
;


create table admin_unidad_organizacional
(
	id_unidad serial not null
		constraint admin_unidad_organizacional_pkey
			primary key,
	nombre varchar(255) not null,
	nivel integer not null,
	id_padre integer,
	descripcion VARCHAR (500),
	id_estructura integer not null
		constraint admin_estructura_pkey
			references admin_estructura
				on update cascade,
	id_empresa integer not null
		constraint admin_empresa_pkey
			references admin_empresa
				on update cascade

)
;

