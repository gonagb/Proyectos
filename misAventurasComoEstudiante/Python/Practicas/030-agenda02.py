## Programa Agenda por Goncho v0.1
agenda = [["nombre", "telefono", "correo"]]

def miAgenda():
    print("Introduce el nuevo nombre en la agenda")
    nombre = input()
    print ("Introduce el numero de telefono")
    telefono = input()
    print ("Introduce el correo")
    correo = input()
    #Antes de continuar, lo metmos en la lista, y sacamos la lista
    agenda.append([nombre, telefono, correo])
    print(agenda)
    # Guardo en archivo
    archivo = open("agenda.txt", 'a')
    longaniza = nombre+","+telefono+","+correo+"\n"
    archivo.write(str(longaniza))
    archivo.close
    # Ejecuccion Recursivo
    miAgenda()

miAgenda()