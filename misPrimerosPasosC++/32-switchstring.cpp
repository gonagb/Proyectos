#include <iostream>
#include <string.h>
using namespace std;

int main(){
   string diadelasemana = "Lunes";
   switch(diadelasemana){
    case strcmp(diadelasemana,"Lunes"):
    cout << "Hoy es Lunes \n";
    break;
    
    default:
    cout << "Lo que has introducido no es ningun dia de la semana \n";

  
    }
    return 0;
}
