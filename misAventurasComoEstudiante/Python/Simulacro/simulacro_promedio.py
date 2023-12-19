# pip install db-sqlite3
import sqlite3 as basedatos
import math
conexion = basedatos.connect("loterias.sqlite3")
#Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
#Ahora insertamos
#Para las 5 casillas
def apuesta(casilla):
    cursor.execute("SELECT * FROM Euromillones LIMIT 1000;")
    #variables para el promedio
    suma = 0
    numeroelementos = 1000
    #variable para contador de las estrellas
    contador = 0

    datos = cursor.fetchall()
    for i in datos:
        
        if casilla == 6:
            contador = 1
        if casilla == 7:
            contador = 2
            
##        if casilla <= 5:
##          print("fecha",str(i[0])," - n",casilla,":",str(i[casilla]))
##        else:
##          print("fecha",str(i[0])," - estrella",contador,":",str(i[casilla]))
          
        #Para calcular el promedio
        suma = suma + int(i[casilla])
        promedio = suma/numeroelementos
        #redondeo para que no aparezca decimales
        redondeopromedio = round(promedio)

    
    if casilla <= 5:
        print("La suma de todos los numeros es:",suma)
        print("El valor promedio de la casilla",casilla," es de: ",redondeopromedio)
    else:
        print("La suma de todos los numeros es:",suma)
        print("El valor promedio de la estrella",contador," es de: ",redondeopromedio)
        
apuesta(1)
apuesta(2)
apuesta(3)
apuesta(4)
apuesta(5)
apuesta(6)
apuesta(7)
