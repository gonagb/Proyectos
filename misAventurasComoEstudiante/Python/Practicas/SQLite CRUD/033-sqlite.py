import sqlite3 as lite
import sys
import tkinter

conexion = lite.connect("agenda.sqlite")

cursor = conexion.cursor()
cursor.execute("SELECT SQLITE_VERSION()")
datos = cursor.fetchone()
print("La version de SQLite es:" ,datos)

