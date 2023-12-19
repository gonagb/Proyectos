#include <iostream>
#include <fstream>
#include <string>


using namespace std;

string saluda(string nombre){
    return "Hola, " + nombre + " , yo te saludo \n";
}

int main() {
    cout << saluda("Goncho");
    return 0;
}


