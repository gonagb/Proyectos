## Para poder trabajar con bases de datos:
import sqlite3 as lite
import sys
## Me conecto a una base de datos llamada agenda
conexion = lite.connect("agenda.sqlite")
## Establezco un cursor para saber en un punto de la base de datos voy a trabajar
cursor = conexion.cursor()
## Le pido algo a la base de datos en lenguaje SQL
cursor.execute("SELECT * FROM contactos;")
## Datos contiene lo que me devuelve la BDD
datos = cursor.fetchall()

for i in datos:
    print("ID:",i[0],"\t nombre:",i[1],"\t telefono:",i[2],"\t correo:",i[3])

