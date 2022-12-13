#include <stdio.h>
#include <stdlib.h>

int main()
{
    float num1;
    float num2;
    printf("Digite o primeiro número: ");
    scanf("%f", &num1);
    printf("Digite o segundo número: ");
    scanf("%f", &num2);
    if (num1 > num2) {
        printf("%f\n", num1);
    }
    else if (num2 > num1) {
        printf("%f\n", num2);
    }
    else{
        printf("Os números são iguais \n");
    }

    return 0;
}
