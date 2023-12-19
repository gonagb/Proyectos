## Programa Notas (C) 2022 Goncho

import sqlite3 as bd        # Importo la librería SQLite para trabajar con bases de datos.
import time                 # Importo la librería de fechas para manejar las fechas de las notas.
import re                   # Importo la librería de expresiones regulares (regex) para validar correos electrónicos.

# Establezco una conexión a la base de datos 'notas.sqlite' ubicada en la carpeta 'Semana5/notas'.
conexion = bd.connect("Semana5/notas/notas.sqlite")
cursor = conexion.cursor()

# Sobre el cursor, ejecuto la petición para crear una tabla de 'notas' en caso de que no exista.
cursor.execute(
    """
    CREATE TABLE IF NOT EXISTS 'notas'(
        'id' INTEGER PRIMARY KEY AUTOINCREMENT,
        'texto' TEXT,
        'color' TEXT,
        'fecha' TEXT
    );
""")
# Sobre el cursor, ejecuto la petición para crear una tabla de 'usuarios' en caso de que no exista.
cursor.execute(
    """
    CREATE TABLE IF NOT EXISTS 'usuarios'(
        'id' INTEGER PRIMARY KEY AUTOINCREMENT,
        'usuario' TEXT,
        'password' TEXT,
        'email' TEXT
    );
""")

# Créditos Iniciales

# Definimos una clase llamada 'Nota' que se utilizará para representar notas con texto, color y fecha.
class Nota:
    def __init__(self, texto, color, fecha):
        self.texto = texto
        self.color = color
        self.fecha = fecha

# Inicializamos una variable 'usuario' con un valor predeterminado.
usuario = "Esta es mi primera nota"
# Inicializamos una lista vacía llamada 'notas' para almacenar objetos de tipo 'Nota'.
notas = []

# Solicitamos al usuario que introduzca su nombre de usuario, contraseña y correo electrónico.
print("Introduce el usuario")
usuario = input()
print("Introduce el password")
password = input()
print("Introduce el email")
email = input()

# Validamos el formato del correo electrónico utilizando una expresión regular.
expresion = re.compile(r'([A-Za-z0-9]+[.-_])*[A-Za-z0-9]+@[A-Za-z0-9-]+(\.[A-Z|a-z]{2,})+')
if re.fullmatch(expresion, email):
    print("Tu email es válido")
    # Insertamos el usuario en la tabla 'usuarios'.
    cursor.execute("INSERT INTO usuarios VALUES(NULL,'" + usuario + "','" + password + "','" + email + "');")
    conexion.commit()
else:
    print("Tu email NO es válido")

print("El usuario es: " + usuario)

# Usamos un bucle 'for' para permitir al usuario ingresar notas.
for i in range(0, 10):
    # Solicitamos al usuario que introduzca el contenido de la siguiente nota en la lista.
    print("Introduce el contenido de la siguiente nota de la lista o escribe 'salir' si es lo que deseas")
    entrada = input()
    print("Introduce el color de la nota")
    color = input()
    # Generamos una fecha en formato Unix timestamp para la nota.
    fecha = str(int(time.time()))

    # Verificamos si el usuario quiere salir del bucle.
    if entrada == "salir":
        break
    else:
        # Creamos un objeto de la clase 'Nota' con la información proporcionada y lo agregamos a la lista 'notas'.
        notas.append(Nota(entrada, color, fecha))
        print("Has introducido una nota nueva")

# Mostramos en pantalla el contenido de todas las notas almacenadas en la lista 'notas'.
print("Saco el contenido de todas las notas")
for i in notas:
    print(i.texto)
    print(i.color)
    print(i.fecha)
    # Insertamos las notas en la tabla 'notas'.
    cursor.execute("INSERT INTO notas VALUES(NULL,'" + i.texto + "','" + i.color + "','" + i.fecha + "');")
    conexion.commit()

# Finalmente, cerramos la conexión con la base de datos.
conexion.close()
