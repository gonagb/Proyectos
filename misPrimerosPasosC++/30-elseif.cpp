#include <iostream>
using namespace std;


int main()
{
    string diadelasemana = "Domingo";
    if(diadelasemana == "Lunes"){cout << "Hoy es Lunes \n";}
    else if(diadelasemana == "Martes"){cout << "Hoy es Martes \n";}
    else if(diadelasemana == "Miercoles"){cout << "Hoy es Miercoles \n";}
    else if(diadelasemana == "Jueves"){cout << "Hoy es Jueves \n";}
    else if(diadelasemana == "Viernes"){cout << "Hoy es Viernes \n";}
    else if(diadelasemana == "Sabado"){cout << "Hoy es Sabado \n";}
    else if(diadelasemana == "Domingo"){cout << "Hoy es Domingo \n";}
    else{
        cout << "No has introducido ningun dia de la semana \n";
    }
   

    return 0;
}
