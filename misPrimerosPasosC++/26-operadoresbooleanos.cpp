#include <iostream>
using namespace std;


int main()
{
    cout << "Operadores Booleanos \n";
    int operando1 = 4;
    int operando2 = 3;
    int operando3 = 5;
    int operando4 = 6;
    int operando5 = 7;
    int operando6 = 8;


    bool comparacion;

    comparacion = operando1 == operando2 && operando3 == operando4;
    cout << "¿Es cierto que op1 = op2 y op3 = op4:"<< comparacion << "\n";
    
    comparacion = operando1 == operando2 || operando3 == operando4;
    cout << "¿Es cierto que op1 = op2 y op3 = op4:"<< comparacion << "\n";
    
    comparacion = operando1 == operando2 && operando3 == operando4 && operando5 == operando6;
    cout << "¿Es cierto que op1 = op2 y op3 = op4:"<< comparacion << "\n";
    
    comparacion = operando1 == operando2 || operando3 == operando4 || operando5 == operando6;
    cout << "¿Es cierto que op1 = op2 y op3 = op4:"<< comparacion << "\n";

    return 0;
}
