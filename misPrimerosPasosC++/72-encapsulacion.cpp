#include <iostream>
using namespace std;

class Persona{
    public:
        string nombre;
        int edad;
    private:
        double altura;
    public:
        void ponAltura(double alt){
            altura = alt;
        }
        double dameAltura(){
            return altura;
        }
};

int main(){
    
    Persona persona1;
    persona1.nombre = "Goncho";
    persona1.ponAltura(1.84);
    cout << persona1.dameAltura();
    return 0;
}