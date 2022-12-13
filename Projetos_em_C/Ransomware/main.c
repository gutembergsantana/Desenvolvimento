#include <stdio.h>
#include <stdlib.h>
#include <dirent.h>
#include <string.h>


void usarDepois(){
    int i;
     /*Leitura do Arquivo*/
    FILE *fin = fopen("arquivos/teste.txt", "rb");
    fseek(fin, 0, SEEK_END);
    long len = ftell(fin);
    rewind(fin);
    void *buffer = malloc(len);
    fread(buffer, len, 1, fin);
    fclose(fin);

    /*Fim da Leitura do Arquivo*/

    /*Criptografia Aqui*/
    for(i = 0; i < len; i++){
        *(char*)(buffer + i) += 1;
    }
    /*Fim da Criptografia*/

    /*Escrita do Arquivo de Volta para o Disco*/

    FILE *fout = fopen("arquivos/teste_editado.txt", "wb");
    fwrite(buffer, len, 1, fout);
    fclose(fout);

    /*Decriptografia Aqui*/
    for(i = 0; i < len; i++){
        *(char*)(buffer + i) -= 1;
    }
    /*Fim da Criptografia*/

    FILE *fout2 = fopen("arquivos/teste_decriptado.txt", "wb");
    fwrite(buffer, len, 1, fout2);
    fclose(fout2);

}

void cifrar(char *path){
    int i;
    printf("Cifrando arquivo: %s\n", path);
    FILE *fin = fopen(path, "rb");
    fseek(fin, 0, SEEK_END);
    long len = ftell(fin);
    rewind(fin);
    void *buffer = malloc(len);
    fread(buffer, len, 1, fin);
    fclose(fin);
    for(i = 0; i < len; i++){
        *(char*)(buffer + i) -= 1;
    }
    FILE *fout = fopen(path, "wb");
    fwrite(buffer, len, 1, fout);
    fclose(fout);
}

void buscaArquivos(char *raiz)
{
/*int i;*/
   DIR *d;
   struct dirent *dir;
   d = opendir(raiz);
   dir = readdir(d);
   while(dir != NULL){

        if(dir->d_type == 8){
            printf("%s\n", dir->d_name);
            char path[strlen(raiz) + strlen(dir->d_name)];
            snprintf(path, sizeof(path), "%s/%s", raiz + 2, dir->d_name);
            cifrar(path);
         }
         else if(dir->d_name[0] !='.')
         {
            char caminho[strlen(raiz) + strlen(dir->d_name) +2];
            snprintf(caminho, sizeof(caminho), "%s/%s", raiz, dir->d_name);
            printf("Caminho da Pasta: %s\n", caminho);
            buscaArquivos(caminho);
         }
         dir = readdir(d);

       }
   closedir(d);
}

int main()
{
   buscaArquivos("./arquivos");
    return 0;
}
