#include <iostream>
using namespace std;


int main()
{
    cout << "Operador de comparación \n";
    float operando1 = 4;
    float operando2 = 3;

    bool comparacion;

    comparacion = operando1 == operando2;
    cout << "¿Es cierto que el operando 1 es igual al operando 2?:"<< comparacion << "\n";

    comparacion = operando1 != operando2;
    cout << "¿Es cierto que el operando 1 NO es igual al operando 2?:"<< comparacion << "\n";

    comparacion = operando1 < operando2;
    cout << "¿Es cierto que el operando 1 es menor que al operando 2?:"<< comparacion << "\n";

    comparacion = operando1 > operando2;
    cout << "¿Es cierto que el operando 1 es mayor que al operando 2?:"<< comparacion << "\n";

 
    comparacion = operando1 <= operando2;
    cout << "¿Es cierto que el operando 1 es menor o igual al operando 2?:"<< comparacion << "\n";

    comparacion = operando1 >= operando2;
    cout << "¿Es cierto que el operando 1 es mayoro o igual al operando 2?:"<< comparacion << "\n";


    return 0;
}
