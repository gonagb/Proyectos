## Programa Agenda por Goncho v0.1
agenda = [["nombre", "telefono", "correo"]]

## Antes que nada, vamos a cargar los registros que teniamos en el archivo .txt
archivo = open("agenda.txt", 'r')
for i in range (1,10):
    nuevalinea = archivo.readline().split(",")
    agenda.append(nuevalinea)
    
## Antes de seguir, dime en que estado está la agenda
print(agenda)

def miAgenda():
    ## Menu inicial
    print("Escoge tu opcion")
    print("1.- Introduce un nuevo registro")
    print("2.- Listar registros")
    print("3.- Buscar registro")
    opcion = input()
    if opcion == "1":
        print("Introduce el nuevo nombre en la agenda")
        nombre = input()
        print ("Introduce el numero de telefono")
        telefono = input()
        print ("Introduce el correo")
        correo = input()
        #Antes de continuar, lo metmos en la lista, y sacamos la lista
        agenda.append([nombre,telefono,correo])
        ## print(agenda)
        # Guardo en archivo
        archivo = open("agenda.txt", 'a')
        longaniza = nombre+","+telefono+","+correo+"\n"
        archivo.write(str(longaniza))
        archivo.close
    if opcion == "2":
        for i in range(1,len(agenda)):
            print(agenda[i])
    ## if opcion == "3":
                
    # Ejecuccion Recursivo
    miAgenda()

miAgenda()