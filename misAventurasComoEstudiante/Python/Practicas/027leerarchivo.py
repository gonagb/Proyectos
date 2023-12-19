## Python Open Flags https://www.programiz.com/python-programming/methods/built-in/open

archivo = open("miarchivo.txt", 'r')

## print(archivo.readline()) ## lee una linea del archivo
## print(archivo.readline()) ## lee la siguiente linea del archivo

##print(archivo.read()) ## lee todo el documento

contador = 0

for i in range(0,10):
    contador += 1
    print(archivo.readline())
    if archivo.readline() == "" and contador > 3:
        break       ## break sirve para parar el bucle