#include <iostream>
#include <string>
using namespace std;

int main(){
    string nombre = "Goncho";
    string &referencia = nombre;

    cout << &nombre << "\n";
    
    return 0;
}