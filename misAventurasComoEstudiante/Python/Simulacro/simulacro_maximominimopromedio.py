# pip install db-sqlite3
import sqlite3 as basedatos
import math
conexion = basedatos.connect("loterias.sqlite3")
#Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
#Ahora insertamos
#Para las 5 casillas
def apuesta(casilla):
    cursor.execute("SELECT * FROM Euromillones LIMIT 10;")
    
    #variables para maximo y minimo
    maximo = 0
    minimo = 1000
    #variable para contador de las estrellas
    contador = 0

    datos = cursor.fetchall()
    for i in datos:
        
        if casilla == 6:
            contador = 1
        if casilla == 7:
            contador = 2
            
        if casilla <= 5:
          print("fecha",str(i[0])," - n",casilla,":",str(i[casilla]))
        else:
          print("fecha",str(i[0])," - estrella",contador,":",str(i[casilla]))
            
        if int(i[casilla]) > maximo:
                maximo = int(i[casilla])
        if int(i[casilla]) < minimo:
                minimo = int(i[casilla])
                


    media = (maximo+minimo)/2
    redondeomedia = round(media)
    
    if casilla <= 5:
        print("El valor máximo de la casilla",casilla," es de: ",maximo)
        print("El valor mínimo de la casilla",casilla," es de: ",minimo)
        print("El valor de la casilla ",casilla, "al que tienes que jugar es:" ,redondeomedia,"\n")
    else:
        print("El valor máximo de la estrella",contador," es de: ",maximo)
        print("El valor mínimo de la estrella",contador," es de: ",minimo)
        print("El valor de la estrella ",contador, "al que tienes que jugar es:" ,redondeomedia,"\n")

apuesta(1)
apuesta(2)
apuesta(3)
apuesta(4)
apuesta(5)
apuesta(6)
apuesta(7)
