# pip install db-sqlite3
import sqlite3 as basedatos
import math
## Conectamos a la base de datos
conexion = basedatos.connect("apellidos.sqlite3")
#Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
## Realizamos la Sentencia SQL
cursor.execute("SELECT * FROM apellidos;")
## Coge todos los elementos de la bbdd
datos = cursor.fetchall()

print("////////////////////////////////////") # ES UN SEPARADOR

## Listame todos los apellidos en Python
print("Aquí van todos los apellidos de España, ordenados (por defecto) desde los más comunes a los menos comunes")
for i in datos:
    apellidos = str(i[1])
    print(apellidos)

print("////////////////////////////////////") # ES UN SEPARADOR

## Listame todos los apellidos que empiecen por la misma letra que mi apellido
print("Introduce tu apellido")
miapellido = input()
print("Por tanto, la primera letra de tu apellido es ")
letra =  input()
apellidosconletra = []
print("Aquí van todos los apellidos que empiezan por la misma letra que mi apellido, en éste caso la letra "+letra+ " ya que mi apellido es "+miapellido)

for i in datos:
    if (i[1]).startswith(letra):
        apellidosconletra.append(i[1])

for apellidocona in apellidosconletra:
    print(apellidocona)

print("////////////////////////////////////") # ES UN SEPARADOR


## Cuenta los apellidos que han salido en el listado, usando Python

num_apellidos = len(datos)
print("Hay", num_apellidos, "apellidos en la lista")

print("////////////////////////////////////") # ES UN SEPARADOR


## Cuenta los apellidos que han salido en el listado de los apellidos que empiezan igual que el tuyo
contador = 0
for i in datos:
    if (i[1]).startswith(letra):
        contador += 1

print("Hay", contador, "apellidos que empiezan por la letra ",letra)



