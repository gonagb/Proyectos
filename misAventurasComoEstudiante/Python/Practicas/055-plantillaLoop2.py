import tkinter as tk

class Persona(object):
    def __init__(self,canvas,*args,**masargs):
        self.canvas = canvas
        self.id = canvas.create_oval(*args,**masargs)
        self.vx = 0
        self.vy = 0
        
    def mover():
        pass
    ## Quiero que los elementos se muevan aleatoriamente 
        
class Aplicacion(object):
    def __init__(self,master):
        self.master = master
        ## Este metodo se va a ejecutar una sola vez
        self.canvas = tk.Canvas(self.master, width=512, height=512)
        self.canvas.pack()
        ##Aqui ahora voy a pintar uno o variso ovalos
        self.personas = [
        Persona(self.canvas,50,50,10,10, outline="black", fill="orange"),
        Persona(self.canvas,250,250,30,30, outline="white", fill="cyan"),
                         ]
        
        self.canvas.pack()
        ## Desde el constructor quiero arrancar una vez el bucle
        self.master.after(1000,self.bucle)
        
    def bucle(self):
        ## Este metodo se va a ejecutar de forma continua
        ## El metodo se llama a si mismo
        self.master.after(33,self.bucle)


root = tk.Tk()
aplicacion = Aplicacion(root)

