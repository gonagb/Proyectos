#include <iostream>
#include <fstream>
#include <string>


using namespace std;

string saluda(string nombre){
    string micadena = "Hola, " + nombre + " , yo te saludo \n";
    return micadena;
}

string saluda(){
    string micadena = "Hola, yo te saludo \n";
    return micadena;
}

int main() {
    cout << saluda("Goncho");
    cout << saluda("JV");
    cout << saluda();

    return 0;
}


