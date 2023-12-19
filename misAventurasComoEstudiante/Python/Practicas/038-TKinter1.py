from tkinter import *

marco = Frame (width=300, height=300)
marco.pack(padx=30, pady=30)

titulo = Label(marco, text="Programa agenda v0.1", fg="black",font=("Arial,Verdana,sans-serif",20))
titulo.pack(side= TOP)

autor = Label(marco,text="Goncho Aguirre", fg="grey",font=("Arial,Verdana,sans-serif",16))
autor.pack(side=TOP)

foto = PhotoImage(file="fotoperfil.png")

textofoto = Label(marco,image=foto)
textofoto.pack(side=TOP)
def saluda():
    print("Has pulsado el boton")

boton = Button(marco, text="Pulsame",command=saluda)
boton.pack(side=TOP, padx=10, pady=10)

 


mainloop()

