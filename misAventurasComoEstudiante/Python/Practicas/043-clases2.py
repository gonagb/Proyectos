## Esto es la definicion de una clase
class Persona:
    def __init__(self, nombre, apellido, edad, colorpelo):
        self.nombre = nombre
        self.apellido = apellido
        self.edad = edad
        self.colorpelo = colorpelo

    def mePresento(self):
        print("Hola, mi nombre es "+self.nombre)
        

persona1 = Persona("Juan","Lopez",0, "negro")
persona2 = Persona("Jorge","Garcia",3, "pelirrojo")

print(persona1.nombre)
print(persona2.edad)

persona1.mePresento()
persona1.nombre = "Goncho"
persona1.mePresento()

del persona1

persona1.mePresento()
