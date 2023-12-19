#include <iostream>
using namespace std;

int main(){

    int longitud = 10;
    string agenda[10];
    agenda[0] = "Goncho";
    agenda[1] = "Carlos";
    agenda[2] = "Carlota";
    agenda[3] = "Carolina";
    agenda[4] = "Carmen";

  for(int i = 0; i<longitud;i++){
    cout << "Elemento en la agenda: " << agenda[i] << "\n";
  }

return 0;
    
}
