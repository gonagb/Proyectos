#include <iostream>
#include <string>
using namespace std;

int main(){
    string nombre = "Gonzalo";
    string apellidos = "Aguirre Boix";
    string retorno = "\n";
    string nombrecompleto = nombre+" "+apellidos+retorno;
    
    cout << nombrecompleto;
    
    return 0;
}