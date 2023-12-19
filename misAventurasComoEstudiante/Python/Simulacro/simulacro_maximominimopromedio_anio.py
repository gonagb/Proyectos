# pip install db-sqlite3
import sqlite3 as basedatos
import math
conexion = basedatos.connect("loterias.sqlite3")
#Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
#Ahora insertamos
#Para las 5 casillas y las 2 estrellas
def apuesta(casilla):
    cursor.execute("SELECT * FROM Euromillones;")
    #establezco variables
    maximo = 0
    minimo = 1000
    contador = 0

    #Si queremos meter el año como una variable y no como un input
    #anioInput = "2011"
    
    #coge todos los elementos de la bbdd
    datos = cursor.fetchall()
    #asigno el valor de contador para las estrellas
    for i in datos:
        if casilla == 6:
            contador = 1
        if casilla == 7:
            contador = 2
     #Extraigo el delimitador de la fecha para que funcione como una lista     
        fechaBd = str(i[0])
        anioBd = fechaBd.split("/")
     #Si el año consultado coincide con el año de la bbdd, saca el máximo y el mínimo    
        if anioInput == anioBd[2]: 
            if int(i[casilla]) > maximo:
                maximo = int(i[casilla])
            if int(i[casilla]) < minimo:
                minimo = int(i[casilla])
                
#MOSTRAR LISTADO DE TODOS LOS NUMEROS (lo tengo oculto para que no me lo muestre por consola)
##            if casilla <= 5:
##                print("fecha",str(i[0])," - n",casilla,":",str(i[casilla]))
##            else:
##                print("fecha",str(i[0])," - estrella",contador,":",str(i[casilla]))
                
#Calculo el promedio y hago un redondeo natural
    media = (maximo+minimo)/2
    redondeomedia = round(media)
        #Si es una casilla sacame el numero de la casilla 
    if casilla <= 5:
        print("El valor máximo de la casilla",casilla," es de: ",maximo)
        print("El valor mínimo de la casilla",casilla," es de: ",minimo)
        print("El valor de la casilla ",casilla, "para el año ",anioInput, "al que tienes que jugar es:" ,redondeomedia,"\n")
        #Pero si es una estrella sacame el numero de contador
    else:
        print("El valor máximo de la estrella",contador," es de: ",maximo)
        print("El valor mínimo de la estrella",contador," es de: ",minimo)
        print("El valor de la estrella ",contador, "para el año ",anioInput, "al que tienes que jugar es:" ,redondeomedia,"\n")
        
#input para introducir el año que queremos buscar        
print("Dime el año concreto de tu búsqueda")
anioInput = input()

apuesta(1)
apuesta(2)
apuesta(3)
apuesta(4)
apuesta(5)
apuesta(6)
apuesta(7)
