#include <iostream>
using namespace std;

class Mamifero{
    public:
        string mama(){
            return "Este animal se amamanta cuando es pequeño\n";
        }
        string grita(){
            return "Este animal grita\n";
        }
};
class Gato: public Mamifero{
    public:
        string nombre;
        int edad;
        string maulla(){
            return "El gato está maullando\n";
        }
        string grita(){
            return "Este gato está gritando\n";
        }
};

int main(){
    Gato gato1;
    cout << gato1.maulla();
    cout << gato1.grita();
    
    return 0;
}