import threading
import time
import math

def trabajador(numero):
    print("hola soy el trabajador numero %s \n" % numero)
    minumero = math.pi/(numero+1)
    time.sleep(1)
    trabajador(numero)

tareas = []

for i in range(5):
    t = threading.Thread(target = trabajador,args=(i,))
    tareas.append(t)
    t.start()

