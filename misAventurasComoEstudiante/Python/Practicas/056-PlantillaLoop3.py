import tkinter as tk
import random 

class Persona(object):
    def __init__(self,canvas,*args,**masargs):
        self.canvas = canvas
        self.id = canvas.create_oval(*args,**masargs)
        self.vx = 1
        self.vy = 0
        
    def mover(self):
    ## Quiero que los elementos se muevan aleatoriamente
    ## Creo un bounding box
        x1,y1,x2,y2 = self.canvas.bbox(self.id)
        self.vx = random.randint(-1, 1)
        self.vy = random.randint(-1, 1)
        self.canvas.move(self.id,self.vx,self.vy)
        
class Aplicacion(object):
    def __init__(self,master):
        self.master = master
        ## Este metodo se va a ejecutar una sola vez
        self.canvas = tk.Canvas(self.master, width=512, height=512)
        self.canvas.pack()
        ##Aqui ahora voy a pintar uno o variso ovalos
        self.personas = [
        Persona(self.canvas,150,150,20,20, outline="black", fill="orange"),
                        ]
        for i in range(10):
            self.personas.append(Persona(self.canvas,150,150,20,20, outline="black", fill="orange"))
        self.canvas.pack()
        ## Desde el constructor quiero arrancar una vez el bucle
        self.master.after(1000,self.bucle)
        
    def bucle(self):
        ## Este metodo se va a ejecutar de forma continua
        ## Cojo una a una a las personas y las muevo
        for persona in self.personas:
            persona.mover()
        ## El metodo se llama a si mismo
        self.master.after(33,self.bucle)


root = tk.Tk()
aplicacion = Aplicacion(root)

