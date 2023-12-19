/**/
#include <stdio.h>

int main(int argc,char *argv[]){
    float numero1 = 4;
    float numero2 = 3;
    // El resto entero de la division
    // 4 entre 3, cabe a 1 y sobra 1
    float resultado = numero1 % numero2;
    printf("El resultado de la operacion es: %f \n",resultado);

    return 0;
}