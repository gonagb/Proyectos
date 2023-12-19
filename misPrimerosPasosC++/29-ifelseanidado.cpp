#include <iostream>
using namespace std;


int main()
{
    string nombre = "Goncho";
    int edad = 27;
    cout << "Inicio el programa \n";
    if(edad < 30){
        if(edad < 20){
            cout << "Eres un chaval \n";
        }else{
        cout << "Eres joven \n";
        }
    }else{
        if(edad = 40){
        cout << "Estas ahí ahí \n";
        }else{
        cout << "Definitivamente no eres joven \n";
        }

    }
    cout << "Continuo con el programa \n";

    return 0;
}
