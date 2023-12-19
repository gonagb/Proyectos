#include <iostream>
using namespace std;

class Persona{
    public:
        string nombre;
        int edad;
    string saluda(){
        string cadena = "Me llaman " + nombre + " , ¿Qué tal estás? \n";
        return cadena; 
    }
    string buenosDias();
};

string Persona::buenosDias(){
    return "Bon dia!\n";
}

int main(){
    Persona persona1;
    persona1.nombre = "Goncho";
    persona1.edad = 27;
    
    Persona persona2;
    persona2.nombre = "Jose Vicente";
    persona2.edad = 45;
    
    cout << persona1.nombre << "\n";
    cout << persona2.nombre << "\n";
    
    cout << persona1.saluda();
    cout << persona2.saluda();
    cout << persona1.buenosDias();
    
    return 0;
}