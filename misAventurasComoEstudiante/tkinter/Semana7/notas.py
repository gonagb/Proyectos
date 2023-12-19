import tkinter as tk
from tkinter import ttk
import sqlite3 as bd
from tkinter.colorchooser import askcolor

# CONEXIÓN INICIAL CON LA BASE DE DATOS

# Establecemos la conexión con la base de datos "notas.sqlite"
conexion = bd.connect("notas.sqlite")
# Creamos un cursor para ejecutar consultas en la base de datos
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
# DECLARO FUNCIONES PARA EL PROGRAMA

def iniciaSesion():
    # Función de inicio de sesión
    print("Vamos a iniciar sesión")
    print("El nombre de usuario es: " + varusuario.get())
    print("La contraseña de usuario es: " + varpassword.get())
    print("El email de usuario es: " + varemail.get())

    # Comprobamos si existe un usuario en la base de datos
    cursor = conexion.cursor()
    cursor.execute('SELECT * FROM usuarios')
    datos = cursor.fetchall()
    numerousuarios = 0

    # Contamos la cantidad de usuarios en la base de datos
    for i in datos:
        numerousuarios += 1

    if numerousuarios == 0:
        print("Actualmente no hay ningún usuario en la base de datos")
        # Insertamos el nuevo usuario en la base de datos
        cursor.execute("INSERT INTO usuarios VALUES(NULL,'" + varusuario.get() + "','" + varpassword.get() + "','" + varemail.get() + "');")
        conexion.commit()
    else:
        print("Sí que existe un usuario en la base de datos")
        # Realizamos una consulta para verificar las credenciales del usuario
        cursor.execute('''
            SELECT *
            FROM usuarios
            WHERE usuario = "''' + varusuario.get() + '''"
            AND password = "''' + varpassword.get() + '''"
            AND email = "''' + varemail.get() + '''"
            ''')

        existe = False

        # Comprobamos si existe un usuario con las credenciales proporcionadas
        datos = cursor.fetchall()
        print("Datos de la base de datos:", datos)  # Agregamos esta línea para imprimir los datos obtenidos de la base de datos

        for i in datos:
            existe = True

        if existe:
            print("El usuario que has introducido es correcto")
            # Creamos una nueva ventana y mostramos un icono
            marco.destroy()
            marco2 = ttk.Frame(raiz)
            marco2.pack()

            iconoaplicacion = tk.PhotoImage(file="./notas.png")
            iconoaplicacion = iconoaplicacion.subsample(3, 3) # Redimensionar la imagen

            etiquetaicono = ttk.Label(
                marco2,
                text="Notas v0.01",
                image=iconoaplicacion,
                compound=tk.TOP,
                font=("Arial", 14)
            )
            etiquetaicono.image = iconoaplicacion
            etiquetaicono.pack()

            # Añadimos un botón para crear una nueva nota
            botonnuevanota = ttk.Button(marco2, text="Nueva nota", command=creaNota)
            botonnuevanota.pack(pady=10, expand=True)
        else:
            print("El usuario no es correcto")
            # Cerramos la ventana después de 3 segundos
            raiz.after(3000, lambda: raiz.destroy())

def creaNota():
    # Función para crear una nueva nota
    ventananuevanota = tk.Toplevel()
    anchura = 300
    altura = 300
    ventananuevanota.geometry(str(anchura) + 'x' + str(altura) + '+100+100')

    # Añadimos un botón para cambiar el color de fondo
    selectorcolor = ttk.Button(ventananuevanota, text="Cambiar color", command=lambda: cambiaColor(ventananuevanota))
    selectorcolor.pack()

    # Añadimos un área de texto para la nota
    texto = tk.Text(ventananuevanota, bg="white")
    texto.pack()

def cambiaColor(ventana):
    # Función para cambiar el color de fondo de la ventana
    nuevocolor = askcolor(title="Selecciona un color")
    ventana.configure(bg=nuevocolor[1])

# CREACIÓN DE LA VENTANA PRINCIPAL Y ESTILO DE LA VENTANA #

raiz = tk.Tk()
raiz.title("Notas v0.1")
raiz.geometry('300x300+50+50')
raiz.attributes("-topmost", True)
raiz.attributes("-alpha", 0.9)
raiz.resizable(0, 0)
raiz.iconbitmap("./notas.ico")
estilo = ttk.Style()
estilo.theme_use('classic')

# DECLARO VARIABLES GLOBALES DEL PROGRAMA

varusuario = tk.StringVar()
varpassword = tk.StringVar()
varemail = tk.StringVar()

# AÑADIMOS WIDGETS A LA VENTANA

marco = ttk.Frame(raiz)
marco.pack()

version = tk.Label(marco, text="Notas v0.01")
version.pack()

inputusuario = ttk.Entry(raiz)
inputusuario.insert(0, 'Introduce tu usuario')
inputusuario.pack(pady=10)

inputpassword = ttk.Entry(raiz)
inputpassword.insert(0, 'Introduce tu password')
inputpassword.pack(pady=10)

inputemail = ttk.Entry(raiz)
inputemail.insert(0, 'Introduce tu email')
inputemail.pack(pady=10)

botonlogin = ttk.Button(marco, text="Enviar", command=iniciaSesion)
botonlogin.pack(pady=10, expand=True)

# INTENTO INTRODUCIR ANTIALIAS EN WINDOWS Y LANZO EL BUCLE

try:
    from ctypes import windll
    windll.shcore.SetProcessDpiAwareness(1)
except Exception as e:
    print(e)
finally:
    raiz.mainloop()
