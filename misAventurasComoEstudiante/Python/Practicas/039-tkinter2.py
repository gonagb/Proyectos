from tkinter import *
import sqlite3 as lite
import sys

def guarda(nombre,telefono,email):
    conexion = lite.connect("agenda.sqlite")
    cursor = conexion.cursor()
    cursor.execute("INSERT INTO contactos VALUES(NULL,'"+nombre+"','"+telefono+"','"+email+"');")
    conexion.commit()

def lee():
    print("voy a leer la base de datos")
    conexion = lite.connect("agenda.sqlite")
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM contactos;")
    longaniza = ""
    datos = cursor.fetchall()

    for i in datos:
        longaniza += str("nombre:"+i[1]+"\t telefono:"+i[2]+"\t correo:"+i[3]+"\n")
    titulodevuelve.insert(INSERT,longaniza)

   



marco = Frame (width=300, height=300)
marco.pack(padx=30, pady=30)

titulo = Label(marco, text="Programa agenda v0.1", fg="black",font=("Arial,Verdana,sans-serif",20))
titulo.pack(side= TOP)
autor = Label(marco,text="Goncho Aguirre", fg="grey",font=("Arial,Verdana,sans-serif",16))
autor.pack(side=TOP)

foto = PhotoImage(file="fotoperfil.png")
textofoto = Label(marco,image=foto)
textofoto.pack(side=TOP)


titulo = Label(marco, text="Introduce un nombre", fg="black",font=("Arial,Verdana,sans-serif",14))
titulo.pack(side= TOP)
camponombre = Entry(marco)
camponombre.pack(side=TOP)


titulo = Label(marco, text="Introduce un telefono", fg="black",font=("Arial,Verdana,sans-serif",14))
titulo.pack(side= TOP)
campotelefono = Entry(marco)
campotelefono.pack(side=TOP)


titulo = Label(marco, text="Introduce un email", fg="black",font=("Arial,Verdana,sans-serif",14))
titulo.pack(side= TOP)
campoemail = Entry(marco)
campoemail.pack(side=TOP)

boton = Button(marco, text="Guarda este registro en la BD",command=lambda:guarda(camponombre.get(),campotelefono.get(),campoemail.get()))
boton.pack(side=TOP, padx=10, pady=10)

titulo = Label(marco, text="Dame los registros de la base de datos", fg="black",font=("Arial,Verdana,sans-serif",14))
titulo.pack(side= TOP)

botondame = Button(marco, text="Devuelve los registros",command=lambda:lee())
botondame.pack(side=TOP, padx=10, pady=10)

titulodevuelve = Text(marco, height=20, width=20)
titulodevuelve.pack(side= TOP)


mainloop()

