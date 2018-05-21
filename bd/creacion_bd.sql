
/*se borra si existe la base de datos para hacer esta nueva, que funciona correctamente*/
drop schema if exists hmis;

/*se crea la bd*/
create schema hmis;

use hmis;

/*se crea la tabla que contiene la informacion de los usuarios*/
CREATE TABLE usuario(
  user varchar(40),
  pass varchar(40),
  email varchar(40),
  admin boolean,
  activo boolean,
  CONSTRAINT clave_primaria PRIMARY KEY (user)
);
