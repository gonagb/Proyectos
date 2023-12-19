#include <iostream>
#include <fstream>
#include <string>


using namespace std;

int main(){
    ofstream archivo;
    archivo.open("miarchivo.txt");
    archivo << "hola archivo.\n";
    archivo.close();
return 0;
    
}

