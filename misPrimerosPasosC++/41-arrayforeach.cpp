#include <iostream>
using namespace std;

int main(){

    int longitud = 20;
    string agenda[20];
    agenda[0] = "Goncho";
    agenda[1] = "Carlos";
    agenda[2] = "Carlota";
    agenda[3] = "Carolina";
    agenda[4] = "Carmen";

  for(string i : agenda){
    cout << "Tengo este elemento en la agenda: " << i << "\n";
  }

return 0;
    
}

// g++ -stf=c++11 41-arrayforeach.cpp