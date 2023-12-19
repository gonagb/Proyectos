
#include <stdio.h>

int main(int argc,char *argv[]){ç
    printf("Selecciona un nombre: \n");
    char nombre[] = getchar();
    scanf("%s",nombre);
    printf("El nombre que has introducido es %s \n",nombre);

    return 0;
}