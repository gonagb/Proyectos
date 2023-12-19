#include <iostream>
using namespace std;

int main(){
    int diadelasemana = 7;

    switch(diadelasemana){

    case 1:
    cout << "Hoy es Lunes \n";
    break;
    case 2:
    cout << "Hoy es Martes \n";
    break;
    case 3:
    cout << "Hoy es Miercoles \n";
    break;
    case 4:
    cout << "Hoy es Jueves \n";
    break;
    case 5:
    cout << "Hoy es Viernes \n";
    break;
    case 6:
    cout << "Hoy es Sabado \n";
    break;
    case 7:
    cout << "Hoy es Domingo \n";
    break;
    default:
    cout << "Lo que has introducido no es ningun dia de la semana \n";

  
    }
    return 0;
}
