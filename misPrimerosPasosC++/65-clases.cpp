#include <iostream>
using namespace std;

class Persona{
    public:
        string nombre;
        int edad;
};

int main(){
    Persona persona1;
    persona1.nombre = "Goncho";
    persona1.edad = 27;
    
    Persona persona2;
    persona2.nombre = "Jose Vicente";
    persona2.edad = 45;
    cout << persona1.nombre << "\n";
    cout << persona2.nombre << "\n";
    
    return 0;
}