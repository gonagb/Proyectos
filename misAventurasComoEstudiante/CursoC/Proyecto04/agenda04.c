/*
Programa agenda v1
por Goncho
*/

#include <stdio.h>
#define PI 3.14159
#define NOMBREPROGRAMA "Programa agenda"
#define VERSION "1.2"
#define AUTOR "Goncho"

int main(int argc,char *argv[]){
    // Mensaje de bienvenida
    printf("%S v%s \n", NOMBREPROGRAMA,VERSION);
    printf("por %s \n", AUTOR);    
    printf("Seleccion una opcion: \n");
    printf("\t 1 - Listado de registros \n");
    printf("\t 2 - Introducir un registro \n");
    printf("\t 3 - Eliminar registros \n");
    printf("\t 4 - Buscar en registros \n");
    printf("\t 5 - Actualizar un registros \n");
    printf("Tu opción: \n");
    char opcion = getchar(); 
    printf("La opción que has seleccionado es %c \n", opcion)

    return 0;
}