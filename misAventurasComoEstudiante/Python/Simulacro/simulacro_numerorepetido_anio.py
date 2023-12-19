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
'''

def calcula(casilla):
  #anioInput = "2011"
  cursor.execute('''
  SELECT * FROM Euromillones;
  ''')
  # creo una lista vacía
  numeros = []
  # asigno 50 elementos 0 a la lista para que la lista tenga un valor inicial de 0
  for i in range(0,51):
    numeros.append(0)
  # voy a ver qué aspecto tiene la lista
  #print(numeros)
  # recupero los datos de la base de datos
  datos = cursor.fetchall()
  # Para cada uno de los datos
  for i in datos:
    #Extraigo el delimitador de la fecha para que funcione como una lista
    fechaBd = str(i[0])
    anioBd = fechaBd.split("/")
    #Si el año consultado coincide con el año de la bbdd
    if anioInput == anioBd[2]:
        # para cada elemento de la lista, le sumo un valor
        numeros[int(i[casilla])] = numeros[int(i[casilla])] + 1
   
  #print(numeros)
  print("casilla:",casilla)
  for i in range(0,51):
    print("el numero ",i," ha salido ",numeros[i]," veces")

  masveces = max(numeros)
  maximo = numeros.index(masveces)
  
  print("El número de la casilla",casilla," que más se repite en el año",anioInput,"es: ",maximo,"\n")
  
#input para introducir el año que queremos buscar        
print("Dime el año concreto de tu búsqueda")
anioInput = input()

calcula(1)
calcula(2)
calcula(3)
calcula(4)
calcula(5)

def estrella(casilla):

  cursor.execute('''
  SELECT * FROM Euromillones;
  ''')
  # creo una lista vacía
  numeros = []
  # asigno 12 elementos 0 a la lista para que la lista tenga un valor inicial de 0
  for i in range(0,13):
    numeros.append(0)
  # voy a ver qué aspecto tiene la lista
  #print(numeros)
  # recupero los datos de la base de datos
  datos = cursor.fetchall()
  # Para cada uno de los datos
  for i in datos:
    #Extraigo el delimitador de la fecha para que funcione como una lista
    fechaBd = str(i[0])
    anioBd = fechaBd.split("/")
    #Si el año consultado coincide con el año de la bbdd
    if anioInput == anioBd[2]:
        # para cada elemento de la lista, le sumo un valor
        numeros[int(i[casilla])] = numeros[int(i[casilla])] + 1
    
  contador = 0

  for i in datos:
    if casilla == 6:
            contador = 1
    if casilla == 7:
            contador = 2
            
  #print(numeros)
  print("estrella:",contador)
  for i in range(0,13):
    print("el numero ",i," ha salido ",numeros[i]," veces")
    
  masveces = max(numeros)
  maximo = numeros.index(masveces)
  
  print("El número de la estrella",contador," que más se repite en el año",anioInput,"es: ",maximo,"\n")
  
estrella(6)
estrella(7)
