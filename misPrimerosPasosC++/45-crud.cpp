#include <iostream>
using namespace std;

int main(){
    struct registro{
        string nombre;
        int telefono;
        string email;
    };

    registro agenda [20];
    agenda[0].nombre = "Goncho";
    agenda[0].telefono = 63636363;
    agenda[0].email = "Goncho@gonagb.com";


    cout << agenda[0].nombre << "\n";

return 0;
    
}

