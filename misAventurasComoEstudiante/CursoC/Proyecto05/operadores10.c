/**/
#include <stdio.h>

int main(int argc,char *argv[]){
    int numero1 = 4;
    int numero2 = 3;
    int numero3 = 2;
    int numero4 = 6;

    int comparacion = numero1 < numero2 && numero3 < numero4;
    int comparacion2 = numero1 < numero2 || numero3 < numero4;
    int comparacion3 = numero1 != numero2;

    // Es menor o igual que
    printf("El resultado de la operacion es: %i \n",comparacion);
    printf("El resultado de la operacion es: %i \n",comparacion2);
    printf("El resultado de la operacion es: %i \n",comparacion3);


    return 0;
}