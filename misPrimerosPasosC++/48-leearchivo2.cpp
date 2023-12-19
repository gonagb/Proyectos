#include <iostream>
#include <fstream>
#include <string>


using namespace std;

int main() {
    string linea;
    ifstream archivo;
    archivo.open("miarchivo2.txt");

    if (archivo.is_open()) {
        while (getline(archivo, linea)) {
        cout << linea << "\n";
        }
    }else{
        cout << "Ha ocurrido algun error";
    
    }
    archivo.close();
    return 0;
}
