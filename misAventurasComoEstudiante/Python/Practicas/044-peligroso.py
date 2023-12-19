class CuentaBancaria:
    def __init__(self,numero,nombre,saldo):
        self.numero = numero
        self.nombre = nombre
        self.saldo = saldo

    def modificaSaldo():
        pass
cuenta1 = CuentaBancaria("0001", "Goncho", 1000)

cuenta1.saldo = 100000000
print(cuenta1.saldo)
