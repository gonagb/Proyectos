#include <iostream>
#include <fstream>
#include <string>

using namespace std;

string saluda(string nombre, int edad){
    string micadena = "Hola, " + nombre + " , tienes " + to_string(edad) + " años, yo te saludo \n";
    return micadena;
}

string saluda(){
    string micadena = "Hola, yo te saludo \n";
    return micadena;
}

int main() {
    cout << saluda("Goncho",27);
    cout << saluda("JV",45);
    cout << saluda();

    return 0;
}


