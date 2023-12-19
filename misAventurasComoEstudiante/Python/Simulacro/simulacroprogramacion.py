# pip install db-sqlite3
import sqlite3 as basedatos
conexion = basedatos.connect("loterias.sqlite3")
# Establezco un cursor para realizar peticiones
cursor = conexion.cursor()
# Ahora insertamos

## +" - n2:"+str(i[2]))+"- n3:"+str(i[3])+" - n4:"+str(i[4])+" - n5:"+str(i[5])+" - e1:"+str(i[6])+" - e2:"+str(i[6])

def apuesta(casilla):
    cursor.execute('''
    SELECT * FROM Euromillones LIMIT 10;
    ''')
    maximo = 0
    minimo = 10000
    datos = cursor.fetchall()
    for i in datos:
        print("fecha "+str(i[0])+" - n",casilla,":"+str(i[casilla])) 
        if int(i[casilla]) > maximo:
            maximo = int(i[casilla])
        if int(i[casilla]) < minimo:
            minimo = int(i[casilla])


    print("el valor máximo es de: ",maximo)
    print("el valor minimo es de: ",minimo)
    media = (maximo+minimo)/2
    print("El valor de la casilla ",casilla," al que tienes que jugar es:",media)

apuesta(1)
apuesta(2)
apuesta(3)
apuesta(4)
apuesta(5)
apuesta(6)
apuesta(7)

