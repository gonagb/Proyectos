import tkinter as tk                                # Importamos el módulo tkinter para crear una interfaz gráfica.
from tkinter import ttk                             # Importamos el módulo ttk de tkinter para usar widgets mejorados.

raiz = tk.Tk()                                      # Creamos una instancia de la ventana principal de la aplicación.
raiz.title("Notas v0.1")                            # Establecemos el título de la ventana.
raiz.geometry('240x240+50+50')                      # Establecemos la geometría de la ventana (ancho x alto + posición X + posición Y).
raiz.attributes("-topmost", True)                   # Hacemos que la ventana esté siempre en la parte superior.
raiz.attributes("-alpha", 0.9)                      # Establecemos la opacidad de la ventana (0.9 es 90% opaco).
## raiz.attributes("-toolwindow", True)             Esto podría ser utilizado para darle a la ventana un aspecto de "herramienta".
raiz.resizable(0, 0)                                # Hacemos que la ventana no sea redimensionable en ancho y alto.
raiz.iconbitmap("./notas.ico")                      # Establecemos el ícono de la ventana.
estilo = ttk.Style()                                # Creamos un objeto de estilo para personalizar los widgets.
estilo.theme_use('classic')                         # Aplicamos un tema clásico de estilo a los widgets.

version = tk.Label(raiz, text=" Versión 0.1")         # Creamos una etiqueta para mostrar la versión de la aplicación.
version.pack()                                      # Colocamos la etiqueta en la ventana.

inputusuario = ttk.Entry(raiz)                      # Creamos un campo de entrada para el usuario.
inputusuario.insert(0, 'Introduce tu usuario')      # Insertamos un texto predeterminado en el campo de entrada.
inputusuario.pack(pady=10)                          # Colocamos el campo de entrada en la ventana con un espacio en la parte inferior.

inputpassword = ttk.Entry(raiz)                     # Creamos un campo de entrada para la contraseña.
inputpassword.insert(0, 'Introduce tu password')    # Insertamos un texto predeterminado en el campo de entrada.
inputpassword.pack(pady=10)                         # Colocamos el campo de entrada en la ventana con un espacio en la parte inferior.

inputemail = ttk.Entry(raiz)                        # Creamos un campo de entrada para el correo electrónico.
inputemail.insert(0, 'Introduce tu email')          # Insertamos un texto predeterminado en el campo de entrada.
inputemail.pack(pady=10)                            # Colocamos el campo de entrada en la ventana con un espacio en la parte inferior.

botonlogin = ttk.Button(raiz, text="Enviar")        # Creamos un botón con el texto "Enviar".
botonlogin.pack(pady=10, expand=True)               # Colocamos el botón en la ventana con espacio en la parte inferior y permitimos que se expanda.

try:
    from ctypes import windll
    windll.shcore.SetProcessDpiAwareness(1)         # Intentamos ajustar la conciencia DPI en Windows para mejorar el escalado.
except Exception as e:
    print(e)                                        # En caso de excepción, imprimimos el error.
finally:
    raiz.mainloop()                                 # Iniciamos el bucle principal de la aplicación tkinter para mostrar la ventana.
