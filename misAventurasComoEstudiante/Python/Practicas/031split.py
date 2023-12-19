## Python Open Flags https://www.programiz.com/python-programming/methods/built-in/open

archivo = open("agenda.txt", 'r')

linea = archivo.read() ## lee una linea del archivo
print(linea)

partido = linea.split(",")
print(partido[0])