-- Lenguaje de Definición de Datos (DDL)
-- Los comandos DDL se utilizan para definir la estructura de la base de datos y sus objetos.

/* Ejemplos de comandos DDL:
   - CREATE: Para crear objetos de la base de datos como tablas, índices, vistas, procedimientos almacenados, etc.
   - ALTER: Para modificar la estructura de objetos existentes en la base de datos.
   - DROP: Para eliminar objetos de la base de datos.
*/

-- Ejemplo CREATE:
CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nombre VARCHAR(50),
    edad INT
);
