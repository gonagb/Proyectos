#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main(){
    // Defino los datos con los que voy a trabajar 
            int longitud = 100;
        // Creo una estructura
            struct registro{
                string nombre;
                string telefono;
                string email;
            };
        // Defino el array de agenda
            registro agenda[100];
        // Guardo la opcion del usuario
            string opcion;
    // Muestro el menú inicial al usuario de la aplicación
        system("clear"); // cls en Win
        cout << "Programa agenda v.01 - gonagb\n";
        cout << "Escoge una opción:\n";
        cout << "1.-Introducir un registro\n";
        cout << "2.-Listar registros\n";
    // Solicito una entrada del usuario
        cin >> opcion;
        cout << "Has elegido la opción: " << opcion << "\n";
    // Ejecuto un código u otro en función de la entrada de usuario
        if(opcion == "1"){
            cout << "Vamos a insertar un nuevo registro en la agenda\n";
            
            cout << "Introduce el nombre de la persona:\n"; 
            string nombre;
            cin >> nombre;
            
            cout << "Introduce el telefono de la persona:\n";
            string telefono;
            cin >> telefono;
            
            cout << "Introduce el email de la persona:\n";
            string email;
            cin >> email;
            
            cout << "Voy a introducir: " << nombre << ", " << telefono << ", " << "email\n";
        }else if(opcion == "2"){
            cout << "Vamos a listar los elementos de la agenda\n";
        }
    
    return 0;
}