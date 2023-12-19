from tkinter import *
import time

marco = Frame (width=300, height=30)
marco.pack(padx=30, pady=30)

lienzo = Canvas()
lienzo.create_rectangle(10,10,200,200,outline="#ff0000",fill="#00ff00")

lienzo.create_oval(50,50,200,200,outline="#ffffff", fill="#0000ff",width=4)
lienzo.pack(side=TOP)

while 1:
    print("hola")
    time.sleep(1)
