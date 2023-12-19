# pip install db-sqlite3
import sqlite3 as basedatos
conexion = basedatos.connect("loterias.sqlite3")
# Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
# Ahora insertamos
'''
Euromillones son
5 numeros del 1 al 50
2 estrellas del 1 al 12

EJEMPLOS DE EXAMEN
El valor máximo de un rango

El valor mínimo de un rango

El valor promedio

El número que más se repite

Todo lo anterior pero de un año concreto

Todo lo anterior, pero de un mes concreto

Simulacro son  5 numeros
Examen con 5 numeros y 2 estrellas


'''
def calcula(casilla):
    cursor.execute('''
    SELECT * FROM Euromillones LIMIT 100;
    ''')

    # creo una lista vacia
    numeros = []  # Asigno 50 elementos 0 a la lista para que la lista tenga un valor inicial de 0
    for i in range(0,50):
        numeros.append(0)
    # Ver el aspecto que tiene la lista
    print(numeros)
    #recupero los datos de la base de datos
    datos = cursor.fetchall()
    #para cadau no de los datos
    for i in datos:
        # Para cada elemento de la lista, le sumo un valor.
       numeros[int (i[casilla])] = numeros [int(i[casilla])] + 1
    print(numeros)
    for i in range(0,50):
       ## if fecha == 2023:
            print("El numero" ,i," ha salido ",numeros[i],"veces")
        
calcula(1)
calcula(2)
calcula(3)
calcula(4)
