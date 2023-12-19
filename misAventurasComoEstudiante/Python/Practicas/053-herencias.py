## Creando herencias con el ejemplo de un gato

class Animal:
    def __init__(self,altura):
        self.altura = altura
    def salta(self):
        print("este animal es capaz de saltar")

class Mamifero(Animal):
    def __init__(self,edad):
        self.edad = edad
    def mama(self):
        print("este animal mama al nacer")

class Felino(Mamifero):
    def __init__(self, especie):
        self.especie = especie
        print("Este felino es un gato")

class Gato(Felino):
    def __init__(self,color):
        self.color = color

    def maulla(self):
        print("El gato esta maullando")

micifu = Gato("orange")
micifu.maulla()
micifu.mama()
micifu.salta()

