#include <iostream>
using namespace std;


int main()
{
    cout << "Operador de asignación \n";
    float operando1 = 4;
    cout << "Ahora el operando vale " << operando1 << "\n";
    
    operando1++;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1--;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1 = operando1 + 5;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1 += 5;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1 -= 5;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1 *= 5;
    cout << "Ahora el operando vale " << operando1 << "\n";

    operando1 /= 5;
    cout << "Ahora el operando vale " << operando1 << "\n";

    return 0;
}
