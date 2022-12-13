import os
def parimpar():
    num1 = float(input("Digite o primeiro número: "))
    num2 = float(input("Digite o segundo número: "))
    parimpar1 = num1%2
    parimpar2 = num2%2
    if parimpar1 == 0:
        print("O número ", num1," é par")
    else:
        print("O número ", num1," é impar")

    parimpar2 = num2%2
    if parimpar2 == 0:
        print("O número ", num2," é par")
    else:
        print("O número ", num2," é impar")
    """
    print("0 => Sair")
    print("1 => Somar")
    print("2 => Subtrair")
    print("3 => Multiplicar")
    print("4 => Dividir")
    """
    laco="1"
    #opc = input("Qual a sua opção? ")
    #laco=opc
    while (laco!="0"):
        input("Aperte <ENTER> para continuar")
        os.system('cls') or None
        print("0 => Sair")
        print("1 => Somar")
        print("2 => Subtrair")
        print("3 => Multiplicar")
        print("4 => Dividir")
        opc = input("Qual a sua opção? ")
        laco = opc

        if opc == "0":
            os.system('cls') or None
            print("Até breve")
        elif opc == "1":
            print("A soma de ",num1,"+ ",num2, "é: ",num1+num2)
        elif opc == "2":
            print("A subtração de ", num1, "e ", num2, "é: ", num1 - num2)
        elif opc == "3":
            print("A multiplicação de ", num1, "e ", num2, "é: ", num1 * num2)
        elif opc == "4":
            print("A divisão de ", num1, "por ", num2, "é: ", num1 / num2)
    """
        switch(opc)
        case "0":print("Até uma próxima operação")
        caso "1":print("A soma de ",num1,"+ ",num2, "é: ",num1+num2)
        caso "2":print("A subtração de ", num1, "e ", num2, "é: ", num1 - num2)
        caso "3":print("A multiplicação de ", num1, "e ", num2, "é: ", num1 * num2)
        caso "4":print("A divisão de ", num1, "por ", num2, "é: ", num1 / num2)
    """
