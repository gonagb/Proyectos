# pip install db-sqlite3
import sqlite3 as basedatos
import math
## Conectamos a la base de datos
conexion = basedatos.connect("apellidos.db")
#Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
## Realizamos la Sentencia SQL
cursor.execute("SELECT * FROM apellidos;")
## Coge todos los elementos de la bbdd
datos = cursor.fetchall()

## Listame todos los apellidos que empiecen por la misma letra que mi apellido
print("Introduce la letra de la que quieras sacar los apellidos más comunes")
letra = input()
apellidosconletra = []
print("Aquí van todos los apellidos que empiezan por la misma letra que mi apellido, en éste caso la letra "+letra+")

for i in datos:
    if (i[1]).startswith(letra):
        apellidosconletra.append(i[1])

for apellidocona in apellidosconletra:
    print(apellidocona)

print("////////////////////////////////////") # ES UN SEPARADOR


## Cuenta los apellidos que han salido en el listado, usando Python

num_apellidos = len(apellidosconletra)
print("Hay", num_apellidos, "apellidos en la lista")