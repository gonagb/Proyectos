#include <iostream>
using namespace std;

class Persona{
    public:
        string nombre;
        int edad;
        Persona(string minombre,int miedad){
            nombre = minombre;
            edad = miedad;
        }
};

int main(){
    
    Persona persona1("Goncho",27);
    cout << persona1.nombre << "\n";
    
    return 0;
}