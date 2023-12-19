#include <iostream>
#include <fstream>
#include <string>


using namespace std;

int main() {
    string linea;
    ifstream archivo;
    archivo.open("miarchivo2.txt");

    if (!archivo.is_open()) {
        cout << "No se pudo abrir el archivo." << endl;
        return 1;
    }

    while (getline(archivo, linea)) {
        cout << linea << "\n";
    }

    archivo.close();
    return 0;
}
