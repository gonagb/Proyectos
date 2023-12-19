'''
Programa Calculadora
(C) 2023 Gonzalo Aguirre
v0.1
'''
## Bienvenido al programa
print("Bienvenido al programa Calculadora")
# print("Introduce tu nombre")
nombre = "Gon"
print ("Hola",nombre,"te doy la bienvenida al programa calculadora")
## Induca la operación
print("Ahora elige la opreación que vas a realizar"+
    "\n1.-Suma"+
    "\n2.-Resta"+
    "\n3.-Multiplicación"+
    "\n4.-División"+
    "")
operacion = int(input())
print("La operación es",operacion)
## Introduce los numeros 
print("Ahora introduce un numero")
n1 = int(input())
print("Ahora introduce otro numero")
n2 = int(input())

## Realiza la operación
if operacion == 1:
    print("El resultado es:",(n1+n2))
if operacion == 2:
    print("El resultado es:",(n1-n2))   
if operacion == 3:
    print("El resultado es:",(n1*n2))
if operacion == 4:
    print("El resultado es:",(n1/n2))