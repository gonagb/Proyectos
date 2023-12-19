#include <iostream>
using namespace std;


int main()
{
    // Variables 
    int operando1;
    int operando2;
    int suma;
    // Entrada de datos (in)
    cout << "Introduce el valor del primer operando : \n";
    cin >> operando1;
    cout << "Introduce el valor del segundo operando : \n";
    cin >> operando2;

    // Calculos 
    suma = operando1 + operando2;

    // Salida de datos (out)
    cout << "El valor de la suma es :" << suma << "\n";

    return 0;
}
